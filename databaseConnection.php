<?php

/**
 * Project: splan
 * User: Christian Steusloff
 * Date: 10.03.14
 * Time: 17:25
 */
class DatabaseConnection extends Mysqli
{
    /**
     * @var array - database settings
     */
    private $db = array();
    /**
     * @var bool - connection
     */
    private $connection = false;


    public function __construct($host = DB_HOST, $database = DB_DATABASE, $user = DB_USER, $password = DB_PASSWORD, $port = DB_PORT, $charset = DB_CHARSET)
    {
        $this->db['hostname'] = $host;
        $this->db['database'] = $database;
        $this->db['username'] = $user;
        $this->db['password'] = $password;
        $this->db['port'] = $port;
        $this->db['charset'] = $charset;
        $this->connect();
    }

    public function connect()
    {
        @parent::__construct($this->db['hostname'],$this->db['username'],$this->db['password'],$this->db['database'],$this->db['port']);
        if(mysqli_connect_errno()){
            echo("ERROR MySQLi (".mysqli_connect_errno()."): ".mysqli_connect_error());
            exit();
        }
        $this->connection = true;
        parent::set_charset($this->db['charset']);
    }

    public function disconnect()
    {
        if($this->is_connected()){
            parent::close();
            $this->connection = false;
        }
    }

    public function query($query,$debug = false){
        $result = parent::query($query);
        if($debug){
            if(mysql_errno()){
                echo("ERROR MySQLi (".parent::mysqli_errno()."): ".parent::mysqli_error());
                exit();
            }
        }
        return $result;
    }

    public function getFirstResult($queryResult,$onlyFirstAttribute = true){
        $result = $queryResult->fetch_row();
        if($onlyFirstAttribute){
            return $result[0];
        } else{
            return $result;
        }
    }

    public function clearText($text){
        if(!is_array($text)){
            return $this->_cleanText($text);
        } else {
            $clean = array();
            foreach($text as $p=>$word){
                $clean[$p] = $this->_cleanText($word);
            }
            return $clean;
        }
    }

    private function _cleanText($text){
        $text = trim($text);
        $text = parent::real_escape_string($text);
        $text = stripcslashes($text);
        return $text;
    }

    public function is_connected()
    {
        return $this->connection;
    }

    public function __destruct(){
        $this->disconnect();
    }
} 