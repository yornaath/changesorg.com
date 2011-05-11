<?php
require_once 'php/lib/mobile_device_detect.php';
mobile_device_detect(true,true,true,true,true,true,true,'http://www.mobi.changesorg.com',false);
?>﻿

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv='Content-Type' content='text/html;charset=UTF-8' />
        <title>Changes</title>
        <meta name='description' content='Changes er en frivillig hjelpeorganisasjon som har fokus på å hjelpe barn og unge.' />
        <meta name="keywords" content="Changes, frivillig, hjelpeorganisasjon, utdanning" />
        
		<link rel="image_src" type="image/jpeg" href="http://changesorg.com/style/img/logo.png" />
        
		<link href="style/changesorg_min.css" rel="stylesheet" type="text/css" />
	
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <script type="text/javascript" src="javascript/tipsy/src/javascripts/jquery.tipsy.js"></script>
        <link href="javascript/tipsy/src/stylesheets/tipsy.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="javascript/lightbox/lightbox.js"></script>
        <link rel="stylesheet" href="javascript/lightbox/lightbox.css" type="text/css" media="screen" />

        <script type="text/javascript" src="javascript/shaman/rokhan_min.js"></script>
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-18459419-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

        </script>

    </head>

    <body>
        <div id="pagewrapper">
            <div id="header">
                <div id="logo">
                    <a href="index.php"><img src="style/img/logo.png"/></a>
                    <h1 class="motto">You can make a change..!</h1>
                </div>
                <table id="nav">
                    <tr>
                        <td id="forside" class="nav_inactive">Forside</td>
                        <td id="visjon" class="nav_inactive">Formål og visjon</td>
                        <td id="prosjekter" class="nav_inactive">Prosjekter og Kurs</td>
                        <td id="stotte" class="nav_inactive">Bidra</td>
                        <td id="kontakt" class="nav_inactive">Om/Kontakt oss</td>
                    </tr>
                </table>
            </div>
            <div id="main">

                <div id="forside" class="content">
                    <h1>Vi vil gjøre en forandring</h1>
                    <p class="introduction">Changes er en frivillig hjelpeorganisasjon som har fokus på å hjelpe barn og unge. Ideen om organisasjonen kom fra studenter ved universitet i Agder. Organisasjonen ble etablert med et ønske om å skape forandring og å ta avstand fra krig og elendighet i verden.</p>
                    <p class="paragraph"><img style="float: left; margin-right: 10px; margin-top: 6px; border-radius: 2px;" src="style/img/forsidebilde.jpg"/>Changes skiller seg ut fra andre organisasjoner på flere måter. Den ble startet på eget initiativ av unge mennesker som studerer og jobber. Organisasjonen er- og skal til enhver tid fungere som et mellomledd fra givere til mottakere. Det vil si at hver eneste krone Changes mottar fra givere går direkte til saken. Av den grunn er et av Changes sine hovedmål å være en organisasjon som ikke har noen form for administrative utgifter. Dette medfører at organisasjonen ikke har egne lokaler med kontorer. Allikevel har det på ingen måte vært et hinder for organisasjonen i å utføre sitt arbeid.<br/><br/>Organisasjonen styres av studenter på deres fritid. Alt arbeid som utføres er et resultat av GOODWILL. Changes er særlig opptatt av å sette fokus på barn og ungdom både i den tredje verden og her hjemme i Norge. Changes ønsker er å gi et tilbud som består av aktiviteter hvor målgruppene kan få kunnskap om verden generelt, i tillegg de spesifikke områdene Changes arbeider i.<br/><br/><br/><br/>Organisasjonen vil gjennom sitt arbeid bygge et nettverk mellom ungdom i Norge og andre steder hvor Changes befinner seg. Dette gjøres for å kunne skape dialog på tvers av verden og gjøre det mulig å både lære av hverandre og om hverandre.</p>
                </div>

                <div id="visjon" class="content">
                    <div>
                        <div class="coloumn left">
                            <h1>Formål</h1>
                            <p class="paragraph">Changes sitt formål er å hjelpe mennesker som trenger hjelp rundt om i verden. Vi vil bidra med kursing og økonomiske midler til bestemte prosjekter som organisasjonen selv oppretter.</p>
                        </div>
                        <div class="coloumn right">
                            <h1>Visjon</h1>
                            <p class="paragraph">Organisasjonens visjon er å samle inn midler ved hjelp av folkets goodwill i form av frivillig arbeid.</p>
                        </div>
                    </div>
                    <br>
                    <img src="style/img/worldmap.png" style="margin-top: 10px; margin-bottom: 10px;"/>
                    <div>
                        <h1>Hvordan skal Changes oppnå dette?</h1>
                        <p class="paragraph">For å oppnå dette benytter Changes seg av følgende aksjoner og hjelpemiddler:</p>
                        <ul>
                            <li>Bøssebæring og bøsse utplassering</li>
                            <li>Medlemskontingent på 200 kr.</li>
                            <li>Stand og aksjoner</li>
                            <li>Søke om støtte fra bedrifter</li>
                            <?php
                                $i = 2;
                                if($i == 3){
                                echo "<li>test object</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>

                <div id="prosjekter" class="content">
                    <table id="nav">
                        <tr>
                            <td style="padding: 0;"><img src="style/img/pogkarrow.png"/></td>
                            <td id="pogk_generelt" class="nav_inactive">Generelt</td>
                            <td id="pogk_prosjekter" class="nav_inactive">Prosjekter</td>
                            <td id="pogk_kurs" class="nav_inactive">Kurs</td>
                        </tr>
                    </table>
                    <div id="pogk_generelt" class="pogk_content">
                        <h1>Prosjekter og Kurs</h1>
                        <p class="paragraph">Valg av prosjekter er primært avhengi av to faktorer:</p>
                        <ul>
                            <li>Mengden på innsamlede midler </li>
                            <li>Områdets sikkertsnivå </li>
                        </ul>
                        <p class="paragraph">Organisasjonen gjør vurderinger og setter seg mål i forkant av prosjekter. Dette i form av hvilke beløp som kan være realistiske å samle inn. Changes vil til enhver tid ta hensyn til sine medlemmer og de menneskene organisasjonen ønsker å hjelpe. For å unngå å gi falske løfter vil vi ikke kunne si noe i forkant om hvilke tiltak som skal utføres før vi får oversikt over inntjente midler. Allikevel vil vi kunne formidle til våre medlemmer hva vi ønsker å gjøre, og hva som skal til for å nå ønsket mål. Vi vil ikke love noen at vi skal støtte eller hjelpe dem med noe bestemt i forkant. Slik unngår vi å bryte løfter - noe som vil stride mot Changes sine grunnprinsipper som er ærlighet og seriøsitet.</p>
                        <img src="style/img/pogk.jpg"/>
                        <p class="paragraph">Changes vil jevnlig gjennomføre sikkerhetsvurderinger av de områdene organisasjonen ønsker å bistå. Det har blitt bestemt at minst én representant fra Changes skal oppholde seg der organisasjonen gjennomfører sine prosjekter. Vurderingene gjennomføres for å unngå å sende medlemmer til et sted hvor deres liv kan være i fare. Representantene befinner seg først og fremst i disse områdene for å være tilstede som en pålitelig aktør. De er utplassert for å kunne gi retningslinjer og kontrollere at midlene brukes til ment formål, samt kurse i Changes sin filosofi.</p>
                        <p class="paragraph">Klikk på kategoriene Kurs eller Prosjekter til høyre i fanen på toppen av denne seksjonen for å lese mer om kursene vi tilbyr og prosjektene Changes har foretatt seg.</p>
                    </div>
                    <div id="pogk_prosjekter" class="pogk_content">
                        <h1>Prosjekter</h1>
                        <div id="prosjekt1" class="prosjekt_content">
                            <h2>Prosjekt1 i Kalar i Germian området i Nord-Irak</h2>
                            <h3>Tid og sted:</h3>
                            <p class="paragraph">Fra: 28.06.09 Til: 05.07.09 Kalar i Germian området i Nord-Irak</p>
                            <h3>Prosjekt leder:</h3>
                            <p class="paragraph">Hemen Nadri</p>
                            <p class="paragraph">Germianprovinsen befinner seg i den nordlige delen av Irak (Kurdistan). Landet ligger i Midtøsten, et sted som kan sies å være blant de mest urolige stedene i verden. Området har vært preget av en rekke konflikter og kriger over mange år. I nyere tid har områdets befolkning vært offer for blant annet Iran-Irak-krigen, Golfkrigen, Anfal-kampanjen og Irak-krigen. Det er uklart nøyaktig hvor mange menneskeliv disse hendelsene har kostet, men det er dessverre snakk om millioner. Fortsatt den dag i dag blir det funnet massegraver fra Saddam Husseins regime. Gravene viser en diktaturs brutalitet ovenfor sivilbefolkningen.</p>
                            <p class="paragraph">Hvert barn fikk et beløp på 130 000 dinar (ca 100$) som skulle hjelpe dem med skolegang og videre formidling av Changes sitt budskap og lære.</p>
                            <p class="paragraph">Vi i Changes ønsker og håper at vårt arbeid kan være med på å bidra til å gi unge mennesker i u-land et godt utgangspunkt. Vi vil gi dem muligheten til å kunne bli fredsbyggende ledere i fremtiden med fokus på menneskerettigheter og utvikling. Samtidig vil vi vise at vi bryr oss om disse barna til tross for at de bor på den andre siden av kloden.</p>
                            <table>
                                <tr>
                                    <td><a href='bilder/prosjekt1/1.jpg' rel='lightbox' title=''><div class='thumbnail'><img class='thumbnail_pic' src='bilder/prosjekt1/1thumb.jpg'/></div></a></td>
                                    <td><a href='bilder/prosjekt1/2.jpg' rel='lightbox' title=''><div class='thumbnail'><img class='thumbnail_pic' src='bilder/prosjekt1/2thumb.jpg'/></div></a></td>
                                    <td><a href='bilder/prosjekt1/3.jpg' rel='lightbox' title=''><div class='thumbnail'><img class='thumbnail_pic' src='bilder/prosjekt1/3thumb.jpg'/></div></a></td>
                                    <td><a href='bilder/prosjekt1/4.jpg' rel='lightbox' title=''><div class='thumbnail'><img class='thumbnail_pic' src='bilder/prosjekt1/4thumb.jpg'/></div></a></td>
                                </tr>
                            </table>
                        </div>
                        <table id="prosjekter_nav" class="pogk_nav">
                            <tr>
                                <td id="-"><img src="style/img/leftarrow.png"/></td>
                                <td Id="+"><img src="style/img/rightarrow.png"/></td>
                            </tr>
                        </table>
                    </div>
                    <div id="pogk_kurs" class="pogk_content">
                        <h1>Kurs</h1>
                        <div id="kurs1" class="kurs_content">
                            <h2>Kurs Modul 1: Kommunikasjon</h2>
                            <p class="paragraph">Modul 1 tar utgangspunkt i bevisstgjøring omkring hvordan vi kommuniserer og forholder oss til fordommer. Den har også fokus på egne og andres behov generelt, samt i konfliktsituasjoner. Når det gjelder konfliktsituasjoner kurser vi i løsningsorientert og ikke-voldelig kommunikasjon. Et av formålene med kursene er å gi folk muligheten til å bli kjent med hverandre og bygge en trygg gruppe. Videre i modulen er det en bolk som består av tverrkulturell kommunikasjon. Også deltakernes praktiske erfaringer er lagt inn i denne modulen. Her skal det i tillegg legges inn et rollespill, hvor deltagerne representerer ulike land og diskuterer rundt Nord-Sør spørsmålet. Slik gir vi dem en sjanse til å bli bedre kjent med andre kulturer.</p>
                        </div>
                        <div id="kurs2" class="kurs_content">
                            <h2>Kurs Modul 2: Personlig utvikling</h2>
                            <p class="paragraph">Denne modulen består av spill og aktiviteter for deltakerne. Under uvante forhold skal de få grunnleggende erfaring i lederskap og samarbeid. De blir delt inn i lag hvor de sammen skal kommunisere, løse oppgaver og takle øvelser i naturen. Målet er å gi deltakerne erfaringer som bevisstgjør og inspirerer til videre utvikling på tre områder; personlig potensiale og mestring, hvordan en gruppe fungerer, og hva som kreves av en leder for en gruppe. Kursdeltakerne kan forvente overraskelser som setter dem i situasjoner hvor de må utøve lederskap og samarbeid gjennom ulike utfordringer og praktiske prøver. Dette skal være med på å bevisstgjøre dem og få dem til å reflektere over egne personligheter og spiritualitet, samt vise hvor viktig det er med godt lederskap i vanskelige situasjoner. En sentral del av denne modulen er debriefing og refleksjon i etterkant - å rydde opp i inntrykk, klargjøre erfaringer og innlede diskusjon rundt lederrollen.</p>
                        </div>
                        <div id="kurs3" class="kurs_content">
                            <h2>Kurs Modul 3: Verdibasert lederskap</h2>
                            <p class="paragraph">Målsettingen for Modul 3 er å gi deltakerne en introduksjon i verdibasert lederskap. Deltakerne blir introdusert for ulike lederstiler. Da både gjennom historiske lederstiler og deltakernes egne erfaringer. Deltakerne blir knyttet sammen opp mot de humanistiske verdiene kurset ønsker å formidle. Fremtidens ledere skal overta morgendagens utfordringer. Dette krever visjonært og etisk lederskap. Modulen skal bevisstgjøre deltakerne på betydningen av humanistiske verdier - verdier som Changes fremhever. Kursdeltakerne oppmuntres til å fremme endringslederskap basert på verdier, dialog og respekt for andre. Det blir også gått inn på at lederskap har sine røtter i afrikanske menneskelige og humanistiske verdier. Ubuntu begrepet skal være et nøkkelord i denne sammenheng. Ordet er afrikansk og betyr å bli et menneske gjennom andre mennesker.</p>
                        </div>
                        <div id="kurs4" class="kurs_content">
                            <h2>Kurs Modul 4: Personlig lederskap</h2>
                            <p class="paragraph">Målet for modulen om personlig lederskap er å styrke ungdommers evne til å lede seg selv. Modulen skal gi dem verktøy for å sette egne mål og nå dem basert på deltakerens egne verdier og drømmer. Pro-aktiv planlegging er en stor del av innholdet. Pro-aktiv planlegging hjelper den enkelte med å legge personlige strategier for nå egne mål. Ved å systematisk gå gjennom egne verdier, sterke og svake sider, og beskrive sine drømmer er det mulig å komme dit en ønsker. Fokus blir spesielt satt påhva en kan begynne med allerede i morgen for nå dit.</p> 
                        </div>
                        <div id="kurs5" class="kurs_content">
                            <h2>Lederskap i menneskerettigheter og likestilling</h2>
                            <p class="paragraph">Denne modulen er todelt. Den første delen tar for seg lederskap utøvd i kamp for menneskerettighetter. Det blir lagt spesielt stor vekt på lederskap som har blitt utført og som fortsatt bør utføres, sett i lys av verdiene til personer som Nelson Mandela og Mahatma Gandhi. Det er viktig å være bevisst på slike elementer når man står ovenfor en helt ny type aggressor i det internasjonale samfunnet. Også FNs rolle i det internasjonale samfunnet er i seg selv viktig kunnskap. Modulen innebefatter også betydningen av menneskerettigheter, samt de nødvendige behovene alle mennesker har.</p>
                        </div>
                        <table id="kurs_nav" class="pogk_nav">
                            <tr>
                                <td id="-"><img src="style/img/leftarrow.png"/></td>
                                <td Id="+"><img src="style/img/rightarrow.png"/></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div id="stotte" class="content">
                    <div>
                        <h1>Hvordan kan du hjelpe oss?</h1>
                        <p class="paragraph">Hvis du ønsker å støtte vår sak kan du gjøre dette på en av tre følgende måter:</p>
                        <ul>
                            <li>Bli medlem å betale årskontigent på kr. 200 </li>
                            <li>Sette inn et passende beløp på vår konto: <b>0539 58 63276</b></li>
                            <li>Gi støtte gjennom grasrotandelen</li>
                        </ul>
                        <p class="paragraph">Vi setter stor pris på alle bidrag og vil forsikre deg om at dine verdifulle penger vil gå til et godt formål.</p>
                        <h1>Grasrotandelen</h1>
                        <p class="paragraph"><img style="float: left; margin-right: 10px;" src="style/img/gralogo.png"/>Grasrotandelen er en ordning fra Norsk Tipping. Ordningen går ut på at du som registrert spiller kan velge et lag eller en forening du ønsker å støtte – din grasotmottaker. Vi oppfordrer deg til å støtte oss i Changes.</p>
                        <p class="paragraph">Tenk deg at du kan spille favorittspillene dine; for eksempel lotto, tipping og joker, og samtidig gi noe til det laget eller den foreningen du selv ønsker å støtte. Dette er nå mulig via grasrotandelen. Ved å spille via. norsk tipping vil 5 % av innsatsen gå direkte til ditt lag eller forening (gjelder ikke Extra og Flax). Merk at grasrotandelen ikke på noen måte går ut over innsatsen eller premien din – du blir ikke belastet for å være grasrotgiver. Du trenger et spillerkort fra Norsk Tipping for å knytte deg til grasrotandelen. Spillekort får du kjøpt hos kommisjonær, eller du kan bestille det på <a style="color: #73afc8;" href="http://www.norsk-tipping.no" target="blank">www.norsk-tipping.no</a></p>
                        <p class="paragraph">Vi oppfordrer deg til å knytte deg til ordningen allerede i dag, og du gjør det på en av følgende måter:</p>
                        <ol>
                            <li>Hos kommisjonær: Ta med spiller kortet og be om å bli knyttet til grasrotandelen og oppgi organisasjons nummert til changes: 992277246</li>
                            <li>Sms: GRASROTANDELEN 992277246 til 2020 (tjenesten er gratis)</li>
                            <li>Internett: grasrotandelen.no eller norsk-tipping.no</li>
                            <li>Norsk tippingmobilspill</li>
                        </ol>
                        <p class="paragraph">Mer informasjon finnes på <a target="blank" style="color: #73afc8;" href="http://www.grasrotandelen.no">www.grasrotandelen.no</a>. Her vil du også kunne følge med på hvor mye grasrotandelen genererer for de enkelte grasrotmottakerne.</p>
                        <p class="paragraph">Takk for at du søtter oss via Grasrotandelen!</p>
                    </div>
                </div>

                <div id="kontakt" class="content">
                    <div class="coloumn left">
                        <h1>Hemen Nadri <i style="font-size:12px;">(tv)</i></h1>
                        <table class="paragraph">
                            <tr>
                                <td>Rolle:</td>
                                <td>Administrerende direktør</td>
                            </tr>
                            <tr>
                                <td>Alder:</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>student</td>
                            </tr>
                        </table>
                        <h1>Julian Saura <i style="font-size:12px;">(th)</i></h1>
                        <table class="paragraph">
                            <tr>
                                <td>Rolle:</td>
                                <td>Styre leder</td>
                            </tr>
                            <tr>
                                <td>Alder:</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>student</td>
                            </tr>
                        </table>
                        <h1>Kontakt informasjon</h1>
                        <p class="paragraph">
                            Du kan nå oss på følgende:
                        <ul>
                            <li>Telefon: 95 76 01 14</li>
                            <li>Email: <a href="mailto:changes.org@live.no">changes.org@live.no</a></li>
                            <li>Eller ved å bruke kontakt skjemaet under.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="coloumn right">
                        <img style="margin-top: 0.67em;" src="style/img/hogj.jpg"/>
                    </div>
                    <img src="style/img/filler.png" style=" margin: 0px; height: 1px; width: 500px;"/>
                    <h1>Kontakt skjema</h1>
                    <p class="paragraph">
                        Her kan du sende en mail direkte til changes.org@live.no, det er viktig at du fyller inn feltet "fra" med din egen mail-adresse slik at vi kan svare deg så fort som mulig.
                    </p>
                    <form method="post">
                        <p class="paragraph">Emnefelt:</p>
                        <br/>
                        <input id="mailsubject" class="mailform_input" type="text" name="mailsubject"/>
                        <br/>
                        <p class="paragraph">Fra: (din mail adresse)</p>
                        <br/>
                        <input id="mailfrom" class="mailform_input" type="text" name="mailfrom"/>
                        <br/>
                        <p class="paragraph">Innhold:</p>
                        <br/>
                        <textarea id="mailcontent" class="mailform_textarea" name="mailcontent"></textarea>
                        <br/>
                        <table style="border-spacing: 0px 0px;">
                            <tr>
                                <td><div id="mailform_submit">send</div></td>
                                <td><div id="mailform_response"></div></td>
                            </tr>
                        </table>


                    </form>
                </div>

            </div>

            <div id="footer">
                <p style=" width: 678px; text-align: center;">
					Web Development and design by <a href="mailto:jornandretangen@gmail.com">Jørn Andre Tangen</a>
					<br/>
                    This Document and all content Copyright © 2010 By
                    <br/>
                    the Changes organization - All Rights Reserved
                </p>
                <table class="social_bar">
                    <tr>
                        <td id="fbbutton" class="social_button" title="del på facbook"><img src="style/img/facebookicon.png"/></td>
                        <td id="tweetbutton" class="social_button" title="informer dine tilhengere om Changes"><img src="style/img/twittericon.png"/></td>
                    </tr>
                </table>
            </div>

        </div>
    </body>
    <!-- <3 lille maio <3 !-->
</html>