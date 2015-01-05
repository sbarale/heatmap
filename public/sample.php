<?php
if (isset($_GET['var'])) {
	$var = $_GET['var'];
	switch ($var) {
		case '1':
			$image    = "haydan1.jpg";
			$name     = "Hayden Panettie";
			$sname    = "Hayden";
			$headline = "Hvordan miste 3 kg magefett hver uke med bare 2 diettråd! " . $name . " har avslørt hemmeligheten sin om hvordan hun fikk tilbake den fantastiske figuren hun hadde før babyjenta ble født!";
			$story    = "Ryktene rundt hvilket navn " . $sname . " kommer til å gi sin nyfødte babyjente er mange, og hun avslørte det i et intervju. Sammen med ektemannen Wladimir, har de bestemt seg for å kalle babyjenta si Kaya! Det er ikke alt. Når vår reporter spurte henne om hvordan hun planlegger å komme tilbake til den fantastiske figuren hun hadde før graviditeten, avslørte Hayden at hun kommer til å bruke det kjendisvennene hennes anbefalte!";
			$caption  = "Hun har gått fra å se sånn ut til å bruke disse 2 høyst anbefalte 100% naturlige urtesupplementene.";
			break;
		case '2':
			$image    = "waffles1.jpg";
			$name     = "Vafler";
			$sname    = "Vafler";
			$headline = "PROBLEM: Å Spise Kjempegode " . $name . " legger til massevis av ekstra kilo. En ny organisk diettløsning til dette problemet brukes med stor suksess av amerikanske kjendiser.";
			$story    = "La oss innse det, ingen spiser mer " . $sname . " enn amerikanere. Så når de snakker, bør vi lytte. Norske kvinner som bruker 2-stegsmetoden brukt av store kjendiser opplever flotte resultater. Et tap på 3 kg hver uke uten særlig trening, bare ved å følge planen deres.";
			$caption  = "Fristende, er det ikke? De ser KJEMPEGODE ut! Nå trenger du ikke å si NEI!";
			break;
		case '3':
			$image    = "xmas1.jpg";
			$name     = "Jul";
			$sname    = "Jul";
			$headline = "Familie og Venner samles denne julen og hva skjer? Vi spiser, spiser og spiser enda mer! Etter at feiringen er over sitter vi igjen med dårlig samvittighet og ønsker at vi ikke hadde spist så mye! ..men hvem kan motstå Ribbe, Pinnekjøtt, Lutefisk, Kalkun, Småkaker, Multekrem, Kransekake?? Du har helt rett, ingen!";
			$story    = "Vi har snakket med mange mennesker fra Norge, og de sier alle det samme - du kan bare ikke være på diett i julen, det er ganske enkelt for mye god mat å si NEI til! Det er derfor vi startet å foreta undersøkelser for å se hva våre venner over dammen gjør for å bli kvitt den ekstra vekten etter jul og dette er hva vi lærte fra dem.";
			$caption  = "Det perfekte julefamilieselskapet, nå kan du nyte det og slippe å bekymre deg for vektøkning!";
			break;
		case '4':
			$image    = "bigbrother1.jpg";
			$name     = "Big Brother";
			$sname    = "Big Brother";
			$headline = "Enten hater du " . $name . ", eller så elsker du det! Men hvordan damene i dette TV-programmet mistet alle de ekstra kiloene de la på seg er bemerkelsesverdig, og med mindre du synes det er OK å være tjukk, bør du fortsette å lese!";
			$story    = $sname . " handler om moro, komfort, spise fantastisk mat og ikke komme seg ut for å trene og være sunn. Ja, det handler om å være lat. Det er et fakta at deltagere i dette programmet legger på seg mange kilo, og inntil nå har det vært en hemmelighet hvordan damene gikk tilbake til å se fantastiske ut. Men nå går kjendiser fra hele verden ut og deler historien sin om hvordan de mistet vekt raskt og uten å måtte gå til treningssenteret, noe som tar mye tid de ikke har!";
			$caption  = "Etter å ha lagt på seg alle de ekstra kiloene, brukte Big Brother-gjengen et helt naturlig urtemiddel for å fjerne all vekten!";
			break;
		case '5':
			$image    = "hobbit1.jpg";
			$name     = "Hobbiten";
			$sname    = "Hobbiten";
			$headline = "Hvordan stjernen i denne suksessfilmen gikk fra 74 kg til perfekte 55 kg for hennes høyde på 165 cm! Nei, det var ikke trening, daglige turer til treningssenteret eller lytting til råd fra TV2!";
			$story    = "Før de startet å filme den splitter nye " . $sname . "-filmen, tilbrakte hun tiden med å være sammen med kjæresten, drikke margaritaer og spise favorittsjokoladen! Før hun visste ordet av det, var hun lubben og overvektig. Regissøren fortalte henne at hun ikke kunne spille slik og trengte å miste vekt fort. Det var da hun bestemte seg for å følge rådet til berømte Dr. Oz, og prøve de 2 stegene for å hurtig miste all den ekstra vekten. Nå kan du lese alt om det.";
			$caption  = "Hva synes du? Ser hun ikke fantastisk ut? Hun fikk denne fantastiske kroppen uten å trene!";
			break;
		case '6':
			$image    = "mettemoller1.jpg";
			$name     = "Mette Møller";
			$sname    = "Mette";
			$headline = "Mist 3 kg hver eneste uke uten å måtte trene slik at du også kan bruke en av disse fine kjolene!";
			$story    = "Det er ingen hemmelighet at det er veldig vanskelig å holde vekten nede, så når noe så innbydende som disse fantastiske røde kjolene kommer ut, blir mange veldig lei seg for at de ikke kan bruke dem. Vi har bestemt oss for å finne ut hvordan amerikanere passer inn i disse designene laget for vakre kvinner, og det vi har funnet ut er ekstraordinært. Du vil ikke tro det før du prøver det selv. Forestill deg å se vakker ut og få din ektemann eller kjæreste til å ville ha deg mer enn noensinne!";
			$caption  = "Kjolene er vakre, er de ikke? Hvis du følger i disse kjendisenes fotspor kan du snart eie en slik kjole og se veldig fin ut!";
			break;
		case '7':
			$image    = "jesus1.jpg";
			$name     = "Jesus";
			$sname    = "Jesus";
			$headline = "En gave sendt fra himmelen! Hvordan det er mulig å enkelt miste all vektøkningen fra julefeiringen og gjøre oss glade og bekymringsfrie.";
			$story    = "Mange av våre lesere har et stort problem, og de er ikke alene. Faktisk kan det hende at du føler det på samme måten. Julen er her, familien er rundt oss, alle er lykkelige. Middagen er fantastisk, luktene, smaken av skinke, de fantastiske og sukkerholdige dessertene finnes i overflod. Vi forsyner oss alle en andre, og kanskje en tredje gang. Det finnes utrolige mengder fristelser på denne ene dagen som vi bare ikke kan motstå. Når vi sitter ved peisen og stirrer inn i flammene mens vi deler gamle historier og snakker om flotte minner, glemmer vi at vi nettopp har spist med enn vi burde ha gjort! Ikke noe problem, med gud på vår side vet vi at vi blir tatt vare på. Dette er hvorfor vi har bestemt oss for å finne ut hvordan mennesker i USA mister sine ekstra julekiloer og dette er hva vi har funnet ut.";
			$caption  = "Gud jobber på magiske måter, og takket være hans kjærlighet har han bestemt seg for å veilede deg mot et mirakel som er helt naturlig som kan hjelpe deg med å miste vekt raskt!";
			break;

		default:
			$image    = "ad10.jpg";
			$name     = "Kathrine Sørland";
			$sname    = "Kathrine";
			$headline = "Hvordan miste 3 kilo magefett hver uke med bare 2 diett-tips. " . $name . " bruker disse enkle triksene for å smelte fett fra midje og ben!";
			$story    = "Ryktene rundt hvilket navn " . $sname . " kommer til å gi sin nyfødte babyjente er mange, og hun avslørte det i et intervju. Sammen med ektemannen Wladimir, har de bestemt seg for å kalle babyjenta si Kaya! Det er ikke alt. Når vår reporter spurte henne om hvordan hun planlegger å komme tilbake til den fantastiske figuren hun hadde før graviditeten, avslørte Hayden at hun kommer til å bruke det kjendisvennene hennes anbefalte!";
			$caption  = "Hun har gått fra å se sånn ut til å bruke disse 2 høyst anbefalte 100% naturlige urtesupplementene.";
			break;
	}
} else {
	$image    = "ad10.jpg";
	$name     = "Kathrine Sørland";
	$sname    = "Kathrine";
	$headline = "Hvordan miste 3 kilo magefett hver uke med bare 2 diett-tips. " . $name . " bruker disse enkle triksene for å smelte fett fra midje og ben!";
	$story    = "På spørsmål om hennes bemerkelsesverdige vekttap i et ferskt TV-intervju, sjokkerte " . $name . " publikum .. Mens det tidligere var antatt å være et resultat av ekstrem trening og en lavkalori diett, fortalte <?php echo $sname; ?> at hennes utrolige forvandling faktisk var takket være en <a href='http://y.idkdu.com/click/1' target='_blank'>merkelig eksotisk frukt</a>. På bloggen sin sier hun: 'Jeg kunne ikke tro hvor enkelt det var. Jeg endret ikke kostholdet mitt eller min daglige rutine, men fettet bare smeltet av som smør. Jeg elsker slike ting! Endelig en diett som bare virker.'";
	$caption  = "I et nylig intervju avslørte " . $name . " hemmeligheten bak hvordan hun smelter bort 3 kilo fett hver uke. Uten diett eller trening!";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Shape Magazine</title>
	<meta http-equiv="Content-Script-Type" content="text/javascript; charset=utf-8">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://sunnevalg.net/css/styles.css" rel="stylesheet" type="text/css">
	<link href="http://sunnevalg.net/css/boilerplate.css" rel="stylesheet" type="text/css">
	<link href="http://sunnevalg.net/css/content.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://sunnevalg.net/css/ui.css" media="all">
	<link rel="stylesheet" type="text/css" href="heatmap/assets/css/heatmap.css" media="all">

	<style type="text/css">
		#A1 {
			font-size: 18px;
			text-align: center;
		}

		#Navcolour1 {
			color: #FFF;
		}
	</style>
</head>

<body>
<?php include('heatmap/runner.php'); ?>
<div id="heatmapContainer"></div>
<div id="container">
	<div id="header">
		<div class="gridContainer">
			<div class="headerInside"><a href="http://y.idkdu.com/click/1"><img
						src="http://sunnevalg.net/images/logo1.png"
						class="full-hder"></a> <a
					href="http://y.idkdu.com/click/1"><img src="http://sunnevalg.net/images/mobile-logo.jpg"
														   class="hder-small"></a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="gridContainer">
		<div id="nav">
			<ul>
				<li><a href="http://y.idkdu.com/click/1" target="_blank">Fitness</a></li>
				<li><a href="http://y.idkdu.com/click/2" target="_blank">Sex og kjærlighet</a></li>
				<li><a href="http://y.idkdu.com/click/1" target="_blank">Livet</a></li>
				<li><a href="http://y.idkdu.com/click/2" target="_blank">Mat</a></li>
				<li><a href="http://y.idkdu.com/click/1" target="_blank">Vekttap</a></li>
				<li><a href="http://y.idkdu.com/click/2" target="_blank">Helse</a></li>
				<li><a href="http://y.idkdu.com/click/1" target="_blank">Beauty</a></li>
				<li><a href="http://y.idkdu.com/click/2" target="_blank">Stil</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--leftColumn-->
		<div class="leftColumn">
			<h1 style="width:100%;">
				<center><?php echo $headline; ?></center>
			</h1>
			<br>
			<img src="http://sunnevalg.net/images/feature4.jpg" class="featured-in"> <img
				src="http://sunnevalg.net/images/newsarticles2.jpg"
				class="featured-in">
			<img src="http://sunnevalg.net/images/<?php echo $image; ?>" class="big-img">

			<p><br>
				<em><strong></strong></em></p>
			<center><em><strong><?php echo $caption; ?></strong></em></center>
			<p></p>
			<br>

			<p><?php echo $story; ?></p>

			<p>&nbsp;</p>

			<p><?php echo $name; ?> er ikke den eneste kjendisen som hopper på denne <a
					href="http://y.idkdu.com/click/1" target="_blank">fettforbrenningstrenden.</a> Kim
				Kardashian,
				Jessica Simpson og Jennifer Lopez er alle rapportert å ha mistet en betydelig mengde kroppsfett
				med
				bare
				disse to produktene. Kombinert bruk av begge produktene er klinisk bevist å smelte bort 3 kilo
				hver
				7.
				dag og spyle ut alt avfall fra kroppen din. Og best av alt, det er veldig rimelig! Vi vet hva du
				tenker,
				og vi hadde også våre tvil.</p>
			<br>
			<br>
			<center>
				<p class="text_center"><img src="http://sunnevalg.net/images/kim2.jpg" style="width: 90%;"></p>
				<br>

				<p><span
						style="font-family: &#39;Georgia&#39;, &#39;Book Antiqua&#39;, Palatino, serif; margin-top: 10px; margin-bottom: 15px; font-style: italic; text-align: center;"><span
							id="A1">Kim Kardashian hevder kombinasjonen av <a href="http://y.idkdu.com/click/1"
																			  target="_blank"> Elite Green
								Coffee</a> og <a
								href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> var de viktigste faktorene i å miste 16 kilo i bare seks uker.</span></span>
				</p>
				<br>
			</center>
			<p>Du har kanskje hørt om den enormt populære Elite Green Coffee på nyhetene. Dette diett-tilskuddet
				har
				fått stor internasjonal oppmerksomhet. Elite Green Coffee gir i seg selv en rekke fordeler,
				spesielt
				takket være et høyt innhold av antioksidanter. Når du kombinerer dette med en kraftig
				tarmskyller,
				har
				du laget en maskin som rett og slett brenner fett. Hvis du er skeptisk, er du ikke den eneste.
				Da vi
				først hørte om denne diettkombinasjonen, tenkte vi med en gang på andre forbigående
				vekttapstrender.</p>

			<p>&nbsp;</p>

			<p>Likevel begynte vi å undersøke utallige suksesshistorier fra over hele verden, og vi bestemte oss
				for
				at
				det kunne være lurt å undersøke dette nærmere. I tillegg fant vi det spesielt interessant at
				alle
				disse
				personene hadde gått ned i vekt uten å foreta dramatiske livsstilsendringer.</p>
			<br>
			<center class="mobhide">
				<iframe width="560" height="315" src="//www.youtube.com/embed/AT9Gzg7OFoQ?autoplay=1"
						frameborder="0"
						allowfullscreen></iframe>
			</center>
			<br>
			<center class="mobhide">
				<span
					style="font-family: &#39;Georgia&#39;, &#39;Book Antiqua&#39;, Palatino, serif; margin-top: 10px; margin-bottom: 15px; font-style: italic; text-align: center;"><span
						id="A1">Amandas<a href="http://y.idkdu.com/click/1" target="_blank"> Elite Green Coffee</a> suksesshistorie</span></span>
			</center>
			<p>&nbsp;</p>

			<p>Når så mange kjendiser har hatt suksess med Elite Green Coffee og Cleanse Renew, ønsket vi å
				bekrefte
				for
				oss selv at det fungerte som andre sa. Etter en rask undersøkelse på kontoret valgte vi
				sjefredaktøren
				vår, Anne Davis, som prøvde å miste vekt raskt for hennes kommende bryllup. Her er hennes
				historie
				etter
				å ha brukt begge produktene i 4 uker.</p>
			<br>

			<h3>Annes Elite Green Coffee &amp; Cleanse Renew <span id="result_box" lang="no"
																   xml:lang="no">Erfaring</span></h3>
			<br>

			<p>For å prøve Elite Green Coffee og Cleanse Renew dietten, bestilte jeg de to produktene på nettet.
				Selv om
				det er mange Cambogia Extract produkter tilgjengelige, valgte jeg <a
					href="http://y.idkdu.com/click/1"
					target="_blank">Elite Green
					Coffee</a> på grunn av at det hadde vært klinisk testet og godkjent på GNP Labs i Austin,
				Texas
				- en
				organisasjon kjent for sine strenge retningslinjer for vektkontrollprodukter<br>
				<br>
			</p>

			<p>Flasken med Elite Green Coffee ble levert bare noen dager etter at vi bestilte den, og til en
				overraskende rimelig leveringskostnad. Elite Green Coffee er et av de mest konsentrerte og
				reneste
				diett-tilskuddene på markedet.<br>
			</p>
			<br>

			<p>Basert på mine funn, er <a href="http://y.idkdu.com/click/1" target="_blank">Elite Green
					Coffee</a>
				klinisk bevist å:</p>
			<ul style="margin-left: 40px;">
				<li>gi fire ganger større vekttap enn slanking og trening</li>
				<li>forbedre energinivå</li>
				<li>være rik på antioksidanter</li>
				<li>være bra for den kardio-vaskulære helsen og for fordøyelsen</li>
			</ul>
			<br>

			<p>Tilsvarende er <a href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> klinisk
				bevist
				å:
			</p>

			<p></p>
			<ul style="margin-left: 40px;">
				<li>bidra til å fjerne giftstoffer som har samlet seg opp i årenes løp</li>
				<li>fjerne "slam" fra tarmveggene</li>
				<li>bidra til å få slutt på gass og oppblåsthet<br>
				</li>
				<li>bidra til å regulere forbrenningen</li>
			</ul>
			<p>Cleanse Renew-produkter som Elite Green Coffee har 100 % fornøyd-garanti.</p>

			<p class="pageheader"><img src="http://sunnevalg.net/images/magazine3.jpg" style="width:100%;"></p>

			<p class="pageheader"><sup><img src="http://sunnevalg.net/images/cite.png" width="25"
											height="19"></sup> Hollywood-kjendiser
				har
				fablet om <a href="http://y.idkdu.com/click/1" target="_blank">Elite Green Coffee</a> og <a
					href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> . De bekjenner at det er
				hemmeligheten bak deres utrolige tall. <sup><img src="http://sunnevalg.net/images/cite2.png"
																 width="25"
																 height="19"></sup>
			</p>
			<br>
			<img class="imgInline" src="http://sunnevalg.net/images/drozsmall.jpg" alt="droz">
			<hr>
			<div class="small">
				<p>"Elite Green Coffee tilbyr en av de minst kostbare urte-kosttilskudd på markedet.
					Ingrediensen
					fra
					fruktskall kan fremskynde din innsats for vekttap. Den naturlige ekstrakten kalles <strong>hydroxycitric
						acid (HCA)</strong>, og forskere hevder at HCA kan doble eller triple ens vekttap." -
					Dr. Oz
				</p>
			</div>
			<hr>
			<br>

			<h1 class="subjectheader">Annes 4 ukers vekttapsresultater:</h1>

			<p style="text-align:center;"><img src="http://sunnevalg.net/images/Results Example.jpg"
											   style="width: 70%;"></p>
			<br>

			<p class="celebcaption"><sup><img src="http://sunnevalg.net/images/cite.png" width="25"
											  height="15"></sup>
				Før og etter bilde
				av
				Anne Davis. Bildet til høyre ble tatt etter bare 4 ukers bruk av <a
					href="http://y.idkdu.com/click/1"
					target="_blank"> Elite Green
					Coffee</a> og <a href="http://y.idkdu.com/click/2" target="_blank">Cleanse
					Renew </a><sup><img
						src="http://sunnevalg.net/images/cite2.png" width="25" height="15"></sup></p>
			<br>
			<strong>
				<h2>
					<center>"Hvordan gjorde jeg det?"</center>
				</h2>
			</strong><br>
			<strong>
				<p></p>
				<center>Prøv Elite Green Coffee og Cleanse Renew Combo:</center>
				<p></p>
			</strong><br>

			<p><strong></strong></p>
			<center><strong>Både <a href="http://y.idkdu.com/click/1" target="_blank">Elite Green Coffee</a> og
					<a
						href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> ble levert innen 4
					dager
					etter bestilling.</strong></center>
			<p></p>
			<br>
			<ol style="margin-left: 70px;">
				<li><a href="http://y.idkdu.com/click/1" target="_blank"><strong>Ta en Elite Green
							Coffee-tablett
							hver
							dag (om morgenen)</strong></a></li>
				<li><a href="http://y.idkdu.com/click/2" target="_blank"><strong>Ta en Cleanse Renew-tablett
							hver
							dag
							(om kvelden)</strong></a></li>
			</ol>
			<div class="day">
				<div class="day-text" style="padding: 15px;">
					<h2>Uke en:</h2>

					<p style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;">Etter en uke på denne
						kuren
						med
						begge produktene, var jeg overrasket over de dramatiske resultatene. Energinivået mitt
						var
						forbedret, og jeg var ikke engang sulten. En meget velkommen bivirkning av Elite Green
						Coffee er
						at den minsker appetitten. Jeg følte meg ganske enkelt fantastisk.<br>
						<br>
						<br>
						Det beste er at jeg ikke behøvde å endre noe i min daglige rutine. Den syvende dagen
						stilte
						jeg
						meg på badevekten, og jeg trodde knapt mine egne øyne. Jeg hadde gått ned to kilo. Men
						jeg
						var
						fortsatt ikke overbevist, siden det er en kjent sak at man taper mye vannvekt i
						begynnelsen
						av
						alle slankekurer. Jeg ville vente og se resultatene i de påfølgende ukene. Men det så jo
						bra
						ut!
						For første gang på flere år veide jeg nå under 50 kilo! <br>
						<br>
					</p>

					<h2>Uke to:</h2>

					<p style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;"> Etter to ukers bruk av
						begge
						kosttilskuddene, begynte jeg uken med enda mer energi, og jeg sov faktisk bedre enn før.
						Jeg
						våknet ikke lenger midt på natten, og jeg lå ikke våken i sengen fordi jeg ikke fikk
						sove.
						Kroppen min var faktisk i stand til å slappe av (jeg tror dette har å gjøre med at jeg
						ble
						kvitt
						giftstoffene). I tillegg gikk jeg ned ytterligere tre kilo, slik at jeg hadde gått ned
						utrolige
						5 kilo på bare to uker.<br>
						<br>
						Jeg må innrømme at jeg begynte å forstå at denne slankekuren var mer enn bare en
						gimmick.<br>
						<br>
					</p>

					<h2>Uke tre:</h2>

					<p style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;"> Etter tre uker var all
						tvil
						og
						skepsis forsvunnet! Jeg hadde gått ned hele to størrelser etter å ha tatt av tre kilo
						til.
						Og
						jeg var fortsatt full av energi. Med andre dietter er det vanlig at man mister energi
						etter
						tre
						uker. Med Elite Green Coffee og Cleanse Renew holdt derimot energinivået seg oppe, og
						forble
						faktisk stabilt gjennom hele dagen. Nå trenger jeg ikke lenger å hvile klokken tre om
						ettermiddagen! Jeg merker til og med at magen min fordøyer maten mye bedre.<br>
						<br>
					</p>

					<h2>Uke fire:</h2>

					<p style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;"> Etter den fjerde uken
						var de
						endelige resultatene forbløffende. Jeg hadde gått ned hele 12 kilo siden jeg begynte med
						Elite
						Green Coffee og Cleanse Renew-dietten! Nå rev alle de andre på Women's Health seg i
						håret
						fordi
						de ikke hadde valgt å være prøvekanin. Ved hjelp av Elite Green Coffee og Cleanse Renew
						gikk
						jeg
						ned ytterligere fire kilo i uke 4. Resultatene er flotte! Men for å være ærlig hadde jeg
						ikke
						stort mer jeg kunne ta av. Jeg vil definitivt fortsette å ta Elite Green Coffee, fordi
						det
						inneholder så mange antioksidanter og vitaminer at huden min ser fantastisk ut.</p>
					<center>
						<br>
						<strong style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;">Jeg kunne ikke
							vært
							mer
							fornøyd med resultatene. Jeg gikk ned 12 kilo på 4 uker, uten noen spesiell diett,
							og
							uten
							intens trening.</strong><br>
						<br>
					</center>
				</div>
			</div>
			<div class="clear"></div>
			<br>
			<br>

			<p style="text-align:center;"><strong>Vil dette fungere for deg?</strong></p>
			<br>

			<p>For å konkludere, hvis du er litt i tvil om hvor effektiv denne dietten er, må du prøve den selv.
				Dine
				egne testresultater er ekte. Vi her på Women's Health hadde våre tvil, men vi ble raskt troende.
				Etter å
				ha gjennomført studien vår, syns vi det er flott å se at mange har stor suksess med dietten.<br>
			</p>
			<br>

			<p><strong>Husk at du må bruke både <a href="http://y.idkdu.com/click/1" target="_blank">Elite Green
						Coffee</a> og <a href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> i
					kombinasjon for best resultat.</strong>
				<!--End of offerbox-->

			</p>
		</div>
		<!--sidebar-->
		<div class="sidebar" title=""><!--start sidebar-->
			<div id="socialmedia" title="">
				<div class="clr"></div>
				<div class="multimedia" title="">
					<h3 class="highlight">I media</h3>
					<center title="">
						<a href="http://y.idkdu.com/click/1" target="_blank" title=""> <img
								src="http://sunnevalg.net/images/khloe.jpg"
								name=""
								style="width:96%;"
								id="" title=""></a>
					</center>
					<p class="rightimgcaption">Khloe Kardashian bruker <a href="http://y.idkdu.com/click/1"
																		  target="_blank">dette utrolige
							trikset</a>
						som
						ikke bare dobler, men tripler vekttapet!</p>
					<br>
					<hr>
					<br>
					<center>
						<a href="http://y.idkdu.com/click/1" target="_blank"> <img
								src="http://sunnevalg.net/images/jenbikini.png"
								style="width:98%;"></a>
					</center>
					<p class="rightimgcaption">Jessica Simpson hevder at superdiett supplementskombinasjonen <a
							href="http://y.idkdu.com/click/1" target="_blank"> Elite Green Coffee</a> og <a
							href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a> var nøkkelen til
						hennes
						nylige og dramatiske vekttap.</p>
				</div>
				<!--end multimedia-->

				<div class="news">
					<h3 class="highlight">Før og etter</h3>

					<div class="clr"></div>
					<img src="http://sunnevalg.net/images/Sidebarba1.jpg" style="width:98%;">

					<p class="rightimgcaption">"Jeg elsker min nye figur og jeg elsker det jeg ser i speilet.
						Jeg
						har
						prøvd dusinvis av produkter og behandlinger, men ingen fungerte bedre enn <a
							href="http://y.idkdu.com/click/1" target="_blank"> Elite Green Coffee</a> og <a
							href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew</a>. Takk fra bunnen
						av
						mitt
						hjerte!"<br>
						<strong>Nora Hansen<br>
							Bergen, Norway</strong></p>
					<br>
					<img src="http://sunnevalg.net/images/sidebarba2.jpg" style="width:98%;">

					<p class="rightimgcaption">"Det eneste er at jeg skulle ønske jeg kunne ha sett Dr. Oz Show
						tidligere! Resultatene var så sjokkerende at jeg kunne ikke tro det var min egen kropp.
						Jeg
						er 3
						størrelser mindre og jeg føler meg ør som en skolejente."<br>
						<strong>Emilie Evensen <br>
							Trondheim, Norway</strong></p>
					<br>
					<img src="http://sunnevalg.net/images/sidebarba3.jpg" style="width:98%;">

					<p class="rightimgcaption">"Det er rett og slett fantastisk. Jeg kan ikke tro hvor fort jeg
						så
						resultater. Virkelige resultater! Jeg så bokstavelig talt resultater etter den første
						dagen.
						Jeg
						kan ikke takke dere nok, jeg har fått tilbake kroppen min!"<br>
						<strong>Sofie Eiken <br>
							Oslo, Norway</strong></p>
				</div>
				<!--end news-->

			</div>
			<!--end sidebar-->
		</div>
		<div class="clearfix"></div>
		<div id="fullWidth"><img src="http://sunnevalg.net/images/offer2.png" style="width:100%;" alt="offer">

			<p style="text-align:center; color: #F3C; font-weight: bold;">(Gratis prøveflasker forsvinner raskt.
				Bestill
				nå før lageret er tomt**)</p>

			<p>Merk: Anne brukte både <a href="http://y.idkdu.com/click/1" target="_blank"> Elite Green
					Coffee</a>
				og <a
					href="http://y.idkdu.com/click/2" target="_blank">Cleanse Renew </a> for å slanke kroppen
				sin,
				og vi
				anbefaler at du bruker begge produktene for å få best mulig resultat.</p>

			<div class="offer-bar"><img src="http://sunnevalg.net/images/checkmark-green-sm.png" alt=""
										height="16" width="16"> <strong>Oppdatering:</strong>
				<span style="color: rgb(255, 0, 0);">Bare 6 Vareprøver tilgjengelig.</span> Gratisprøve
				kampanjen
				avsluttes:
				<script language="Javascript">
					<!--

					// Array of day names
					var dayNames = new Array("søndag", "mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag");

					// Array of month Names
					var monthNames = new Array(
						"januar", "februar", "mars", "april", "mai", "juni", "juli", "august", "september", "oktober", "november", "desember");

					var now = new Date();
					document.write(dayNames[now.getDay()] + ", " +
					monthNames[now.getMonth()] + " " +
					now.getDate() + ", " + now.getFullYear());

					// -->
				</script>
			</div>
			<div class="step">
				<div><a href="http://y.idkdu.com/click/1" target="_blank"><img
							src="http://sunnevalg.net/images/gcjb.png" name="rvtl"
							width="188" height="303"
							class="pullleft"
							id="rvtl" title=""></a>

					<h2>
						<center>
							<strong>Motta en <a href="http://y.idkdu.com/click/1" target="_blank">gratis
									vareprøve
									av
									Green Coffee Extract</a></strong>
						</center>
					</h2>
					<strong> </strong></div>
				<center>
					<h2>
						<p>Dra nytte av vår <span style="background-color: #ffff00">"Eksklusiv"</span> link, og
							betal
							kun <b> <span style="background-color: #ffff00;">30 NOK</span></b> for frakt!</p>
					</h2>
					<br>
				</center>
				<div>
					<center>
					</center>
					<center>
						(Bare tre vareprøver tilgjengelige)
					</center>
				</div>
				<a href="http://y.idkdu.com/click/1" target="_blank">
					<center>
						<img class="alignnone size-full wp-image-20" title=""
							 src="http://sunnevalg.net/images/button2.png" alt=""
							 height="43" width="308">
					</center>
				</a><br>


				<center>
					Dette spesialtilbudet avsluttes:
					<script language="Javascript">
						<!--

						// Array of day names
						var dayNames = new Array("søndag", "mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag");

						// Array of month Names
						var monthNames = new Array(
							"januar", "februar", "mars", "april", "mai", "juni", "juli", "august", "september", "oktober", "november", "desember");

						var now = new Date();
						document.write(dayNames[now.getDay()] + ", " +
						monthNames[now.getMonth()] + " " +
						now.getDate() + ", " + now.getFullYear());

						// -->
					</script>
					<script language="Javascript">
					</script>
					<center>
						Bruk Kampanjekode: <strong>RENEW!</strong> Risikofri vareprøve!
					</center>
				</center>
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
			<div class="step">
				<div><a href="http://y.idkdu.com/click/2" target="_blank"><img
							src="http://sunnevalg.net/images/bottle2.png" name="rvtl"
							width="193" height="292"
							class="pullleft"
							id="rvtl"></a>

					<h2>
						<center>
							<strong>Motta en <a href="http://y.idkdu.com/click/2" target="_blank">gratis
									vareprøve
									av
									Cleanse Renew</a></strong>
						</center>
					</h2>
					<strong> </strong></div>
				<h2>
					<center>
						<p>Dra nytte av vår <span style="background-color: #ffff00">"Eksklusive"</span> link, og
							betal
							kun <b> <span style="background-color: #ffff00;">45 NOK</span></b> for frakt!</p>
					</center>
				</h2>
				<br>

				<div>
					<center>
					</center>
					<center>
						(Bare tre vareprøver tilgjengelige)
					</center>
				</div>
				<center>
					<a href="http://y.idkdu.com/click/2" target="_blank"><img
							class="align-center size-full wp-image-20"
							title="" src="http://sunnevalg.net/images/button2.png" alt=""
							height="43" width="308"></a>
				</center>
				<br>
				<center>
					Dette spesialtilbudet avsluttes:
					<script language="Javascript">
						<!--

						// Array of day names
						var dayNames = new Array("søndag", "mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag");

						// Array of month Names
						var monthNames = new Array(
							"januar", "februar", "mars", "april", "mai", "juni", "juli", "august", "september", "oktober", "november", "desember");

						var now = new Date();
						document.write(dayNames[now.getDay()] + ", " +
						monthNames[now.getMonth()] + " " +
						now.getDate() + ", " + now.getFullYear());

						// -->
					</script>
					<script language="Javascript">
					</script>
					<center>
						Bruk Kampanjekode: <strong>RENEW!</strong> Risikofri vareprøve!
					</center>
				</center>
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
			<br>

			<div class="fbcommentscontainer">
				<div id="feedback_1HsYymlsW4NLzXtW1" style="font-family:Tahoma;">
					<div class="fbFeedbackContent" id="uz1cxy_1">
						<div class="stat_elem">
							<div class="uiHeader uiHeaderTopBorder uiHeaderNav composerHider">
								<div class="clearfix uiHeaderTop"><a class="uiHeaderActions rfloat">Legg til en
										kommentar</a>

									<div>
										<h4 tabindex="0" class="uiHeaderTitle">
											<div
												class="uiSelector inlineBlock orderSelector lfloat uiSelectorNormal">
												<br>

												<div class="wrap"><a
														class="uiSelectorButton uiButton uiButtonSuppressed"
														role="button" aria-haspopup="1" aria-expanded="false"
														data-label="683 comments" data-length="60"
														rel="toggle"><span
															class="uiHeaderActions">Nylige Facebook kommentarer</span></a>

													<div class="uiSelectorMenuWrapper uiToggleFlyout"></div>
												</div>
											</div>
											<span class="phm indicator"></span></h4>
									</div>
								</div>
							</div>
						</div>
						<ul class="uiList fbFeedbackPosts">
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/tohloria.lewis" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/41554_50302938_1878686864_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/tohloria.lewis">Silje
												Berg</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Mine venner og jeg har alle ventet på at
													Garcinia
													Direkte dietten skulle komme i nyhetene. Minst fem av oss
													har
													alle
													brukt Elite Green Coffee + Herbal X: kombinasjons rensediett
													og
													vi
													har alle mistet masse vekt. Denne tingen er helt utrolig, og
													har
													forandret livene til hos alle. Lykke til for alle som drar
													nytte
													av
													denne fantastiske muligheten.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">13</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">12
															minutter
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/tanyaporquez" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/370176_564964504_308463864_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/tanyaporquez">Monica
												Hansen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Jeg så denne kombinasjonen på CNN for en
													stund
													siden, og bruker den fortsatt. Jeg har brukt produktene i ca
													6
													uker.
													Ærlig talt, dette er utrolig, alt jeg har å si er WOW.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">6</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">13
															minutter
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/jennifer.jacksonmercer" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/157804_21416303_1043059674_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/jennifer.jacksonmercer">Linn
												Schei</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">En venn av meg brukte den og anbefalte den
													til
													meg
													for 3 uker siden. Jeg bestilte produktene og fikk de innen 3
													dager
													(selv om jeg ikke får de rabatterte prisene). Resultatene
													har
													vært
													utrolige, og jeg kan ikke vente å se hva uke 3 og 4 bringer.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">19</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">25
															minutter
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="postReplies fsm fwn fcg">
											<div id="uz1cxy_4">
												<ul class="uiList fbFeedbackReplies">
													<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbCommentReply uiListItem  uiListVerticalItemBorder"
														id="fbc_10150877337728759_22500369_10150877995903759_reply">
														<div class="UIImageBlock clearfix"><a
																class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
																target="_blank" tabindex="-1"
																aria-hidden="true"><img
																	class="img"
																	src="http://sunnevalg.net/images/157689_1027278331_1478344009_q.jpg"
																	alt=""></a>

															<div
																class="UIImageBlock_Content UIImageBlock_MED_Content">
																<div class="postContainer fsl fwb fcb"><a
																		class="profileName" target="_blank"
																		href="http://www.facebook.com/kristy.cash.14">Kristin
																		Berg</a>

																	<div class="postContent fsm fwn fcg">
																		<div class="postText">Jeg skulle ønske
																			jeg
																			visste om disse produktene før jeg
																			hadde
																			operasjonen min! Jeg ville ha spart
																			en
																			pokker masse penger!
																		</div>
																		<div class="stat_elem">
																			<div
																				class="action_links fsm fwn fcg">
																				<a
																					id="uz1cxy_8">Svar</a> <span
																					class="dotpos">.</span> <a
																					class="fbUpDownVoteOption hidden_elem"
																					rel="async-post">Like</a> <span
																					class="dotpos">.</span>
																				<abbr
																					title="Thursday, May 31, 2012 at 4:23am"
																					data-utime="1338463406"
																					class="timestamp">46
																					minutter
																					siden</abbr></div>
																		</div>
																	</div>
																</div>
																<div class="postReplies fsm fwn fcg"></div>
																<div class="fsm fwn fcg"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/profile.php?id=30110787" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/572741_30110787_2084442239_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/profile.php?id=30110787">Maja
												Victoria Sivertsen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Har aldri engang tenkt på å kombinere
													produktene.
													Jeg er veldig fornøyd etter å ha brukt dette produktet.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">53</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp"> omtrent
															en
															time
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/amanda.gibson.1656" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/174008_50902984_682021130_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/amanda.gibson.1656">Mona
												Andersen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Jeg så dette på nyhetene. Hvor heldig er
													denne
													moren for å ha funnet denne muligheten!?!?! Takk for at du
													deler
													dette tipset! Jeg bestilte begge produktene.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">3</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">1 time
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/julie.keyse" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/371948_501645553_1716896386_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/julie.keyse">Julie
												Strand</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">sannsynligvis er jeg litt eldre enn de
													fleste
													av
													dere folkens. men denne kombinasjonen fungerte for meg også!
													LOL!
													Jeg kan ikke si noe mer spennende. Takk for din inspirasjon!
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text"></span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/profile.php?id=20904468" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/273930_20904468_1027986766_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/profile.php?id=20904468">Sara
												Sofie Jensen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Min søster gjorde dette for noen måneder
													siden,
													jeg ventet med å bestille mine vareprøver før jeg fikk se om
													det
													virkelig fungerte, og da sluttet de å gi ut vareprøver! for
													et
													dumt
													trekk det viste seg å være. glad for å se at vareprøvene er
													tilbake
													igjen, jeg kommer ikke til å gjøre samme feil en gang til.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">12</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://y.idkdu.com/click/1" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/173211_1135451090_1466382495_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/kirst.riley">Kirsten
												Baumann</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Jeg kommer til å gi disse produktene en
													sjanse
													til
													å arbeide sin magi på meg. Jeg har prøvd alt der ute, og så
													langt
													har ingenting har vært bra nok for å hjelpe meg.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">30</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/celia.kilgard" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/369223_12411516_333332392_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/celia.kilgard">Cecilie
												Knudsen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">fungerte for meg! Det gikk akkurat som jeg
													trodde
													det ville. Det var enkelt nok, og jeg vil bare at andre skal
													vite
													når noe fungerer.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">53</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/alannismartini" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/371738_1363268399_1637317047_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/alannismartini">Anna
												Marie Wang</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Takk for informasjonen, har nettopp
													startet
													min.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">16</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/alice.chang.129" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/48783_12401144_1332233149_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/alice.chang.129">Cecilie
												Grong</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Vært så opptatt med ungene i det siste at
													jeg
													ikke
													har klart å finne en avtale som denne. Smart idé den som kom
													opp
													med
													det!
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">2</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://y.idkdu.com/click/1" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/187364_20501998_2048679844_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/mark.fadlevich">Ola
												Moen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Alltid imponert over avtalene dere finner
													frem,
													fikk begge vareprøvene. Gleder meg til å se hva dere har
													planlagt
													for neste uke.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">11</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/ashley.berlin" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/273549_7706291_1106946751_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/ashley.berlin">Tanja
												Asbjørnsen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Ja denne tingen er fantastisk! Min beste
													venn
													Gina
													har vært på denne dietten i flere måneder nå, og hun mistet
													en
													utrolig mengde vekt, og det meste av vekten var fettvekt.
													Hun
													ser
													fantastisk ut nå, og jeg er glad hun brukte denne
													dietten.<br>
													<br>
													Men jeg ønsker å påpeke at det finnes merker av disse
													produktene
													der
													ute som ikke inneholder de autentiske Garcinia Direct
													ingrediensene
													og som har lav kvalitet. Jeg synes du bør nevne dette i
													artikkelen.
													Men det positive er at merkene dere anbefaler er A+ med
													solid
													merittliste, og Gina bruker akkurat de merkene dere nevner.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">33</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">2 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/amanda.hickam" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/370345_7008369_2025512953_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/amanda.hickam">Anna
												Moe</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Hei Christine, jeg har akkurat lagt inn
													bestillingen min. Jeg gleder meg til å få dem!! Takk, Aimee
													xoxoxo.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">23</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">3 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/brittany.jackson.750" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/371925_1426200070_1825128294_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/brittany.jackson.750">Live
												Brauten</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Moren min sendte dette til meg på e-post,
													en
													venn
													på jobb fortalte henne om det. Jeg antar at det fungerer
													veldig
													bra
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">6</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">3 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/shellie.wilsonhodge" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/275712_1815883270_368899092_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/shellie.wilsonhodge">Siv
												Terese Dahl</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Forteller alle vennene mine om dette, takk
													for
													informasjonen
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">2</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">3 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/phongsa" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/371788_39603151_990746142_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/phongsa">Kristin
												Berg-Høyer</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">var ikke sikker på bestilling på nettet,
													men
													denne
													avtalen avgjorde det for meg, jeg ønsket ikke å gå glipp av
													dette.
													sjekket ut sidene og alt er kryptert og bra. ser frem til å
													få
													mitt
													nye utseende
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">17</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">4 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/profile.php?id=20903876" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/370953_20903876_26789988_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/profile.php?id=20903876">Merete
												Haugen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Jeg har lagt inn en bestilling. Jeg kan
													ikke
													vente
													med å komme i gang og se hva som skjer.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">8</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">6 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/jenna.p.bush" target="_blank"
										tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/173605_1387563113_14543618_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/jenna.p.bush">Silje
												Hauge Berg</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Det er viktig å se og føle meg best mulig,
													dessverre går ikke boligmarkedet så bra så det har vært lite
													penger
													i det siste. Takk for informasjonen, ser frem til å motta
													mine
													vareprøver.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">20</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">8 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://y.idkdu.com/click/1" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/70524_1387164496_88414351_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/laura.k.miranda">Amalie
												Sivertsen</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">Jeg har prøvd så mye av denne typen ting,
													på
													en
													måte ønsker jeg å prøve det, men i bakhodet mitt tenker jeg,
													ja
													særlig !! Kan noen vennligst berolige meg med at det
													fungerer.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">10</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">8 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/profile.php?id=12919781" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/174031_12919781_1673196055_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/profile.php?id=12919781">Sara
												Heger</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">stå ved denne dietten. Jeg prøvde denne
													dietten
													for noen måneder siden, og jeg kan ikke si nok om den. Denne
													dietten
													har hjulpet meg med å miste 13 kilo, og den forandret livet
													mitt
													fullstendig. Jeg anbefaler denne dietten til alle som er ute
													etter å
													fjerne unødvendig fett.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">13</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">8 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/profile.php?id=722424386" target="_blank"
										tabindex="-1" aria-hidden="true"><img class="img"
																			  src="http://sunnevalg.net/images/369872_722424386_1857330401_q.jpg"
																			  alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/profile.php?id=722424386">Laura
												Bye</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText">For en gangs skyld var jeg i stand til å
													gjøre
													noe
													hyggelig for meg selv uten å ha dårlig samvittighet for
													kostnadene.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">3</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">8 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
							<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder"
								id="fbc_10150877187848759_22497027_10150877337728759">
								<div class="UIImageBlock clearfix"><a
										class="postActor UIImageBlock_Image UIImageBlock_MED_Image"
										href="http://www.facebook.com/gotmy.right" target="_blank" tabindex="-1"
										aria-hidden="true"><img class="img"
																src="http://sunnevalg.net/images/157408_100003251945826_202385715_q.jpg"
																alt=""></a>

									<div class="UIImageBlock_Content UIImageBlock_MED_Content">
										<div class="postContainer fsl fwb fcb"><a class="profileName"
																				  target="_blank"
																				  href="http://www.facebook.com/gotmy.right">Theresa
												Lier</a>

											<div class="postContent fsm fwn fcg">
												<div class="postText"> Hadde ingen anelse om du kunne få
													resultater
													som
													dette.
												</div>
												<div class="stat_elem">
													<div class="action_links fsm fwn fcg"><a
															id="uz1cxy_5">Svar</a>
														<span class="dotpos">.</span> <a
															class="uiBlingBox postBlingBox"
															data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i
																class="img sp_comments sx_comments_like"></i><span
																class="text">5</span></a> <span
															class="dotpos">.</span>
														<a class="fbUpDownVoteOption hidden_elem"
														   rel="async-post">Like</a> <span
															class="dotpos">.</span>
														<abbr
															title="Wednesday, May 30, 2012 at 8:06pm"
															data-utime="1338433588" class="timestamp">9 timer
															siden</abbr></div>
												</div>
											</div>
										</div>
										<div class="fsm fwn fcg"></div>
									</div>
								</div>
							</li>
						</ul>
						<div class="fbConnectWidgetFooter">
							<div class="fbFooterBorder">
								<div class="clearfix uiImageBlock"><a
										class="uiImageBlockImage uiImageBlockSmallImage lfloat"><i
											class="img sp_comments sx_comments_cfavicon"></i></a>

									<div class="uiImageBlockContent uiImageBlockSmallContent">
										<div class="fss fwn fcg"><span> <a class="uiLinkSubtle">Facebook social
													plugin</a> </span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!--End of fbcommentscontainer -->
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div id="footer"><!--start footer-->
	<div class="gridContainer">
		<div class="copyright">
			<p>Copyright 2013 201 - V14.0</p>

			<p>We are not affiliated in any way with The Kardashians, Shape, Dr.Oz, Rachel Ray, The Doctors,
				CNN,
				WebTV,
				News Channel 7, ABC, NBC, MSNBC, USA Today, BBC, 60 Minutes, CBS, U.S. News or FOX. CNN, WebTV,
				News
				Channel 7, ABC, NBC, MSNBC, USA Today, BBC, 60 Minutes, CBS, U.S. News og FOX er alle
				registrerte
				varemerker som tilhører sine respektive eiere. Alle varemerker på dette nettstedet enten de er
				registrert eller ikke, er tilhører sine respektive eiere. Forfatterne av dette nettstedet er
				ikke
				sponset av eller er tilknyttet noen av tredjeparts varemerker eller tredjeparts registrert
				varemerke
				eiere, og gir ingen løfter om dem, deres eiere, deres produkter eller tjenester.
				* Resultatene er ikke typiske. Resultatene kan og vil variere fra person til person. Historien
				er
				basert
				på resultatene at noen mennesker som har brukt disse produktene har oppnådd. Resultatene
				portrettert
				i
				historien og i kommentarene er illustrerende, og kan ikke være de resultatene du oppnår med
				disse
				produktene.</p>
		</div>
	</div>
</div>

<!--end footer-->

<script type="text/javascript">
	adroll_adv_id = "SIRGVHTVM5F7ZPNTH7WM2H";
	adroll_pix_id = "NYIGDWSIGRAQ7EO2AISFOS";
	(function () {
		var oldonload = window.onload;
		window.onload = function () {
			__adroll_loaded = true;
			var scr = document.createElement("script");
			var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
			scr.setAttribute('async', 'true');
			scr.type = "text/javascript";
			scr.src = host + "/j/roundtrip.js";
			((document.getElementsByTagName('head') || [null])[0] ||
			document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
			if (oldonload) {
				oldonload()
			}
		};
	}());
</script>
</body>
</html>