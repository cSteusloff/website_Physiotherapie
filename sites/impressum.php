<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

require_once('../template.php');
if (!isset($TPL)) {
    $TPL = new Template();
    $TPL->pageTitle = "Impressum";
    $TPL->bannerTitle = "Impressum";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}
?>

<div class="row">
    <div class="col-xs-12">
        <div class="panel-body">
            <h3><b>Impressum</b></h3>

            <p>
                Angaben gemäß § 5 TMG:
            </p>

            <p> </p>
            <h4><b>Anschrift</b></h4>

            <p>
                Physiotherapie am Gesundbrunnen Center<br/>
                Praxisgemeinschaft<br/>
                <?= $metaData->getStreet()?><br/>
                <?= $metaData->getZip() ?>&nbsp;<?= $metaData->getCity() ?>
            </p>

            <p> </p>
            <h4><b>Inhaber</b> (Verantwortlich für den Inhalt der Seite)</h4>

            <p>
                Andrea Klonz<br>
                Rita Seidler
            </p>

            <p> </p>
            <h4><b>Kontakt</b></h4>

            <p>
                Telefon: <?= $metaData->getPhone() ?><br>
                Telefax: <?= $metaData->getFax() ?><br>
                Email: <?= $metaData->getMail() ?>
            </p>

            <p> </p>
            <h4><b>Gesetzliche Berufsbezeichnung</b></h4>

            <p>
                staatlich anerkannte Physiotherapeuten
            </p>

            <p> </p>
            <h4><b>Zulassungsland</b></h4>

            <p>
                Deutschland
            </p>

            <p> </p>
            <h4><b>Gestaltung und Realisation / Technische Umsetzung und Programmierung</b></h4>

            <p>
                <a href="http://submit-ev.de/">submit e.V.</a><br>
                <a href="http://csteusloff.com/">Christian Steusloff</a><br>
            </p>

            <p> </p>
            <h4><b>Haftungsausschluss (Disclaimer)</b></h4>

            <p><b>Haftung für Inhalte</b></p>

            <p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den
                allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht
                verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu
                forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung
                der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine
                diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung
                möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend
                entfernen.</p>

            <p><b>Haftung für Links</b></p>

            <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben.
                Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der
                verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die
                verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft.
                Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche
                Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht
                zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>

            <p><b>Urheberrecht</b></p>

            <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen
                Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der
                Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
                Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte
                Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem
                auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei
                Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

            <p> </p>

            <h4><b>Datenschutzerklärung</b></h4>

            <p><b>Datenschutz</b></p>

            <p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf
                unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben
                werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre
                ausdrückliche Zustimmung nicht an Dritte weitergegeben. </p>

            <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail)
                Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist
                nicht möglich. </p>

            <p>Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur
                Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit
                ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im
                Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>

            <p> </p>

            <p><b>Datenschutzerklärung für die Nutzung von Facebook-Plugins (Like-Button)</b></p>

            <p>Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook (Facebook Inc., 1601 Willow Road, Menlo
                Park, California, 94025, USA) integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder
                dem "Like-Button" ("Gefällt mir") auf unserer Seite. Eine Übersicht über die Facebook-Plugins finden Sie
                hier: <a href="http://developers.facebook.com/docs/plugins/" target="_blank">http://developers.facebook.com/docs/plugins/</a>.<br/>
                Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und
                dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse
                unsere Seite besucht haben. Wenn Sie den Facebook "Like-Button" anklicken während Sie in Ihrem
                Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil
                verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen
                darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie
                deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der
                Datenschutzerklärung von facebook unter <a href="http://de-de.facebook.com/policy.php" target="_blank">
                    http://de-de.facebook.com/policy.php</a></p>

            <p>Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen
                kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p>

            <p> </p>

            <p><b>Datenschutzerklärung für die Nutzung von Google Analytics</b></p>

            <p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google
                Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine
                Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen
                über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen
                und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre
                IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen
                Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt.</p>

            <p>Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort
                gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre
                Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere
                mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem
                Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte
                IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.</p>

            <p>Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software
                verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche
                Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung
                der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse)
                an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden
                Link verfügbare Browser-Plugin herunterladen und installieren: <a
                    href="http://tools.google.com/dlpage/gaoptout?hl=de">http://tools.google.com/dlpage/gaoptout?hl=de</a>.

            <p> </p>
        </div>
    </div>
</div>