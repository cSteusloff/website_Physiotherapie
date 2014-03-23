<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

// Bootstrap 3.0 -> mobile first

// responsive images
// <img src="..." class="img-responsive" alt="Responsive image">

require_once('../template.php');

if(!isset($TPL)){
    $TPL = new Template();
    $TPL->pageTitle = "Therapie";
    $TPL->bannerTitle = "Therapie";
    $TPL->contentBody = __FILE__;
    require_once("../layout.php");
    die();
}
?>

    <div class="row">
        <div class="panel-primary">
            <div class="panel-body">
                Unsere Praxis zeichnet sich durch ein vielfältiges Angebot an physiotherapeutischen Leistungen und durch
                ein angenehmes Behandlungsumfeld aus. Wir sind zugelassen für Patienten aller gesetzlichen Krankenkassen,
                BG und für Privatpatienten.
            </div>
        </div>

        <div class="col-xs-6 col-md-5">
            <div class="panel-group" id="accordionLeft">
                <h3 class="therapieHeader">Klassische Therapie</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionLeft"
                               href="#collapseOne">
                                Krankengymnastik
                            </a>
                            <h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Die Physiotherapie orientiert sich bei der Behandlung an den Beschwerden und den Funktions-,
                            Bewegungs- bzw. Aktivitätseinschränkungen des Patienten, die bei der physiotherapeutischen
                            Untersuchung festgestellt werden. Dabei zielt die Behandlung einerseits auf natürliche,
                            physiologische Reaktionen des Organismus (z. B. motorisches Lernen, Muskelaufbau und
                            Stoffwechselanregung), andererseits auf ein verbessertes Verständnis der Funktionsweise
                            des Organismus.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionLeft"
                               href="#collapseTwo">
                                Medizinische Massagen
                            </a>
                            <h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Die Massage [maˈsaːʒə] (von frz. masser „massieren“, aus arab. مس „berühren; betasten“ oder
                            aus griech. μάσσω „kauen, kneten“) dient zur mechanischen Beeinflussung von Haut, Bindegewebe
                            und Muskulatur durch Dehnungs-, Zug- und Druckreiz. Die Wirkung der Massage erstreckt sich
                            von der behandelten Stelle des Körpers über den gesamten Organismus und schließt auch die
                            Psyche mit ein.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionLeft"
                               href="#collapseThree">
                                Fango, Heißluft Kälte
                            </a>
                            <h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Fango ist ein Mineralschlamm vulkanischen Ursprungs und wird in der Peloidtherapie verwendet.
                            Obwohl sie ähnlich in Anwendung und Wirkungsweise sind, werden aufgrund unterschiedlicher
                            Aufbereitung und Zusammensetzung grundsätzlich zwei Arten von Fango unterschieden:
                            organischer und anorganischer Fango.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionLeft"
                               href="#collapseThree">
                                Ultraschall und Elektrotherapie
                            </a>
                            <h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Elektrotherapie oder Elektromedizin ist die Bezeichnung für therapeutische Anwendungen von
                            elektrischem Strom in der Medizin und in der Physikalischen Therapie. Für einige der
                            Verfahren werden synonym auch die Begriffe Reizstromtherapie oder Feinstromtherapie benutzt.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 hidden-xs" style="text-align: center;">
            <img src="../picture/stehendMitBall.png">
        </div>

        <div class="col-xs-6 col-md-5">
            <div class="panel-group" id="accordionRight">
                <h3 class="therapieHeader">Spezielle Therapien</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionRight"
                               href="#collapseOneR">
                                KG nach Bobath (auch Kinder)
                            </a>
                            <h4>
                    </div>
                    <div id="collapseOneR" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Das Bobath-Konzept ist ein problemlösender Ansatz in der Befundaufnahme und Behandlung
                            Erwachsener und Kinder mit neurologischen Erkrankungen. Bobath-Konzept basiert auf
                            neurophysiologischen und entwicklungsneurologischen Grundlagen und orientiert sich an den
                            Ressourcen des Patienten. Dieser Anspruch bietet große Chancen in der Weiterentwicklung des
                            Konzeptes selbst und gleichzeitig einen Grund für Kritik am Konzept
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionRight"
                               href="#collapseTwoR">
                                Manuelle Lymphdrainage
                            </a>
                            <h4>
                    </div>
                    <div id="collapseTwoR" class="panel-collapse collapse">
                        <div class="panel-body">
                            Die manuelle Lymphdrainage (ML) ist eine Form der physikalischen Therapien. Ihre
                            Anwendungsgebiete sind breit gefächert. Sie dient vor allem als Ödem- und
                            Entstauungstherapie ödematöser Körperregionen, wie Körperstamm und Extremitäten (Arme und
                            Beine), welche nach Traumata oder Operationen entstehen können. Besonders häufig wird diese
                            Therapie nach einer Tumorbehandlung bzw. Lymphknotenentfernung verschrieben.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionRight"
                               href="#collapseThreeR">
                                Manuelle Therapie
                            </a>
                            <h4>
                    </div>
                    <div id="collapseThreeR" class="panel-collapse collapse">
                        <div class="panel-body">
                            Die manuelle Therapie dient in der Medizin zur Behandlung von Funktionsstörungen des
                            Bewegungsapparats (Gelenke, Muskeln und Nerven); sie ist der von Physiotherapeuten/
                            Masseuren mit einer speziellen Weiterbildung durchgeführte Teil der Manuellen Medizin.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionRight"
                               href="#collapseThreeR">
                                Schlingentischbehandlung
                            </a>
                            <h4>
                    </div>
                    <div id="collapseThreeR" class="panel-collapse collapse">
                        <div class="panel-body">
                            Der Schlingentisch wird in der Physiotherapie als Therapiehilfsmittel benutzt, um die
                            betroffenen, schmerzhaften oder auch unbeweglichen Gliedmaßen zu behandeln.Der Schlingentisch
                            ist somit für bestimmte orthopädische Diagnosen ein unverzichtbarer Bestandteil der
                            physiotherapeutischen Behandlung.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-primary">
            <div class="panel-body">
                Als Ergänzung zu diesen Therapien bieten wir, neben den durch die Krankenkassen übernommen Leistungen,
                auch Cranio Sacral Therapie, Shiatsu, Migränetherapie, Dolo- und Kinesio Taping, Fußreflexzonenmassage
                sowie Reiki.
            </div>
        </div>

    </div>


