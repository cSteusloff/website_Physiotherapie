<?php

/**
 * Project: website_Physiotherapie
 * User: Christian Steusloff
 * Date: 08.04.14
 * Time: 21:44
 */
class Physiotherapie
{

    const DATABASE_ID = '1';

    /**
     * @var DatabaseConnection
     */
    private $db;

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param \DatabaseConnection $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

    /**
     * @var string street - varchar(30)
     */
    private $street;
    /**
     * @var string zip - varchar(5)
     */
    private $zip;
    /**
     * @var string city - varchar(30)
     */
    private $city;
    /**
     * @var string phone - varchar(30)
     */
    private $phone;

    /**
     * @var string fax - varchar(30)
     */
    private $fax;
    /**
     * @var string mail - varchar(255)
     */
    private $mail;
    /**
     * @var string message - varchar(511)
     */
    private $message;
    /**
     * @var bool showMessage - tinyint(1)
     */
    private $showMessage;
    /**
     * @var string hours - varchar(1023)
     */
    private $hours;

    /**
     * @return \DatabaseConnection
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param string $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @return string
     */
    public function getHoursHtml()
    {
        return nl2br($this->hours);
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getMessageHtml()
    {
        return nl2br($this->message);
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param boolean $showMessage
     */
    public function setShowMessage($showMessage)
    {
        $this->showMessage = $showMessage;
    }

    /**
     * @return boolean
     */
    public function getShowMessage()
    {
        return $this->showMessage;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    public function getAddress(){
        return $this->getStreet().", ".$this->getZip()." ".$this->getCity();
    }

    function __construct(DatabaseConnection $connection)
    {
        $this->db = $connection;
        $this->getModelFromDb();
    }

    private function getModelFromDb()
    {
        $sql_getInformation = "SELECT Street,
                                      Zip,
                                      City,
                                      Phone,
                                      Fax,
                                      Mail,
                                      Message,
                                      ShowMessage,
                                      Hours
                               FROM physio_Meta
                               WHERE Id = '" . self::DATABASE_ID . "'";
        $this->db->connect();
        if ($result = $this->db->query($sql_getInformation)) {
            while ($row = $result->fetch_object()) {
                $this->setStreet($row->Street);
                $this->setZip($row->Zip);
                $this->setCity($row->City);
                $this->setPhone($row->Phone);
                $this->setFax($row->Fax);
                $this->setMail($row->Mail);
                $this->setMessage($row->Message);
                $this->setShowMessage($row->ShowMessage);
                $this->setHours($row->Hours);
            }
        }
        $this->db->disconnect();
    }

    public function saveToDatabase(){
        $sql_setInformation = "UPDATE physio_Meta
                               SET Street='".$this->getStreet()."',
                                   Zip='".$this->getZip()."',
                                   City='".$this->getCity()."',
                                   Phone='".$this->getPhone()."',
                                   Fax='".$this->getFax()."',
                                   Mail='".$this->getMail()."',
                                   Message='".$this->getMessage()."',
                                   ShowMessage='".$this->getShowMessage()."',
                                   Hours='".$this->getHours()."'
                               WHERE Id ='". self::DATABASE_ID . "'";
        $this->db->connect();
        $success = $this->db->query($sql_setInformation);
        $this->db->disconnect();

        return $success;
    }
}
