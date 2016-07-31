<?php 
$titolo="15 (dek kvin)";
$leciono = 15;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);

		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h3>Preciza raporto</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Bonan matenon, ho plej bela, ĉu vi bone dormis?"</p>
					<p>"Bonan matenon, Tom. Mi ne dormis tre multe. Kaj vi, ĉu vi
					dormis kontentige?"</p>
					<p>"Perfekte, kara, perfekte. Sed diru do al via plej fidinda
					amiko, kial vi ne sufiĉe dormis."</p>
					<p>"Ĉu ne estas klare al vi? Mi tro pensis. Mi pensadis tutnokte
					pri ĉio, kio okazis hieraŭ."</p>
					<p>"Estas fakto, ke mi ne revidis vin hieraŭ, post kiam mi eliris
					kun Bob por okupiĝi pri Gerda. Ni lasis vin en la memserva restoracio
					kun la tasko observi la blondulon. Kiam mi revenis, vi estis for. Kien
					vi iris? ĉu vi faros al mi precizan raporton?"</p>
					<p>"Kun plezuro, sed ankaŭ vi raportos al mi poste, ĉu ne? Nu,
					mi veturis al la urbocentro kun tiu junulo. Mi rakontis al li, ke io
					fuŝa okazis al mia aŭto, kaj mi petis lin min veturigi. Li hezitis,
					sed fine decidis jese. Mi deziris lin paroligi, por ekscii pri li kiel
					eble plej multe, sed mi ne sukcesis. Ni diris unu al la alia nur tre
					banalajn aferojn."</p>
					<p>"Ĉu vi almenaŭ scias, kien li iris en la urbo, laŭ kiuj
					stratoj, al kiu domo?"</p>
					<p>"Atendu. Mi rakontos ĉion. Por ke mia peto ŝajnu natura, mi
					petis lin lasi min en la centro. Li lasis min ĉe la dekstra flanko de
					la Granda Teatro, kaj li veturis plu. Mi ne sciis, kion fari. Mi
					promenis en la urbo, pensante, ke mia ideo ne estis tiel bona: mi
					eksciis nenion pri li, kaj troviĝis sen aŭto en la mezo de la urbo.
					Fakte, mi sentis min iom stulta. Mi promenis de strato al strato,
					provante elpensi planon, kaj jen subite mi vidas lin eliri el la
					poŝtoficejo. Mi estis nekredeble bonŝanca. Imagu! Se mi estus
					troviĝinta naz-al-naze kun li ĝuste kiam li eliris el la
					poŝt-oficejo...! Sed mi vidis lin sufiĉe frue por min kaŝi."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda15-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Feliĉe, ke vi vidis lin sufiĉe frue!"</p>
					<p>"Kiel mi diris: mi estis bonŝanca, mi vidis lin ĝustatempe.
					Nu, li iris piede, kaj mi decidis lin sekvi. Ĉu vi konas tiun grandan
					magazenon, kiu vendas kvardek malsamajn specojn de pano kaj ĉiaspecajn
					ĉokoladojn kaj aliajn dolĉaĵojn? Sur la maldekstra flanko de la
					strato, kiu iras al la ĉefa Sportocentro. Estas granda vendejo de
					mebloj apude. Nu, ne gravas, ĉu vi konas aŭ ne. Li eniris tiun
					panejon, aŭ tiun dolĉaĵvendejon, aŭ tiun… nu… tiun pan- kaj
					dolĉaĵvendejon, kaj eliris post minuto portante paperan sakon, kiu
					aspektis plenplena. ŝajnis, ke li aĉetis la tutan magazenon. Mi devas
					diri, ke ili vendas tre bonajn aĵojn en tiu ejo.  Mi, kiu tiom ŝatas
					ĉokoladon kaj dolĉaĵojn, ofte irus tien kaj aĉetus multon, se mi ne
					timus dikiĝi. Nu… e… kion mi rakontis?"</p>
					<p>"Vi raportis pri via spiona sekvado, sed vi devojiĝis de la
					ĉefa vojo de via raporto al flankaj konsideroj pri pano kaj ĉokolado.
					Fakte, ĉu vi deziras iom pli da pano? Kion vi trinkas ĉi-matene?
					Teon, mi vidas. ĉu vi ŝatus, ke mi replenigu vian tason?"</p>
					<p>"Jes, dankon. Mi plezure trinkos plian tason da teo. Dankon,
					Tom, kara. Nu, do…"</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda15-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<p><span class="eo">bonŝanca</span> : chanceux, -euse</p>
		
				<p><span class="eo">devojiĝi (de + <span class="eo">voj</span> + <span class="eo">iĝi</span>)</span> : dévier ; s'écarter ; dériver</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">cent</span> : cent</p>
					<p><span class="eo">ĉefa</span> : principal(e), chef</p>
					<p><span class="eo">ĉokolado</span> : chocolat</p>
					<p><span class="eo">dek</span> : dix</p>
					<p class="sekva"><span class="eo">dek kvar</span> : quatorze</p>
					<p><span class="eo">dekstra</span> : droit(e) (côté) </p>
					<p class="sekva">→ <span class="eo">maldekstra</span> : gauche (côté)</p>
					<p><span class="eo">dolĉa</span> : doux; sucré</p>
					<p><span class="eo">flanko</span> : côté</p>
					<p><span class="eo">frue</span> : tôt, de bonne heure</p>
					<p><span class="eo">hieraŭ</span> : hier</p>
					<p><span class="eo">kvar</span> : quatre</p>
					<p><span class="eo">kvardek</span> : quarante</p>
					<p class="sekva"><span class="eo">kvardek kvar</span> : quarante-quatre</p>
					<p><span class="eo">magazeno</span> : magasin, boutique</p>
					<p><span class="eo">mateno</span> : matin</p>
					<p><span class="eo">meblo</span> : meuble</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">nazo</span> : nez</p>
					<p><span class="eo">pano</span> : pain</p>
					<p><span class="eo">papero</span> : papier</p>
					<p><span class="eo">plani</span> : établir un plan, projeter de</p>
					<p class="sekva"><span class="eo">plano</span> : plan</p>
					<p><span class="eo">plenplena</span> : complètement plein, rempli</p>
					<p><span class="eo">poŝto</span> : poste (administation de distribution du courrier), courrier</p>
					<p><span class="eo">raporti</span> : rapporter, annoncer</p>
					<p><span class="eo">sako</span> : sac</p>
					<p><span class="eo">speco</span> : sorte, espèce, genre</p>
					<p><span class="eo">sporto</span> : sport</p>
					<p><span class="eo">strato</span> : rue</p>
					<p><span class="eo">ŝanco</span> : chance</p>
					<p><span class="eo">tasko</span> : tâche, besogne, devoir (scolaire)</p>
					<p><span class="eo">teo</span> : thé</p>
					<p><span class="eo">vendi</span> : vendre</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap15.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kun kiu parolas Tom?",
					2 => "Ĉu ŝi bone dormis?",
					3 => "Ĉu Tom raportas unue?",
					4 => "Ĉu ŝi sukcesis paroligi la blondulon en la aŭto?",
					5 => "Kie ŝi poste vidis lin?",
					6 => "Kion la blondulo aĉetis?",
					7 => "Kial Linda ofte irus al la vendejo por multon aĉeti?",
					8 => "Kial ŝi tamen ne faras tion?",
					9 => "Kion trinkis Linda?"
					);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Trovu la vortojn.</legend>
				<input type="hidden" name="013_cxap15.1" value="Trovu la vortojn.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>ne alia → ne alia : <u>sama</u></p>
				</div>

				<div class="tasko">
					<p class="primaire-texte texte-moyen">La vortoj estas:</p>
					<p class="primaire-texte texte-moyen">ambaŭ, aŭto, aŭtomato, baldaŭ, bruo, ĉambro, diskuti, dormi, ekster, el, flegi, helpi, informi, kapo, konscia, kuraci, nokto, observi, opinio, perdi, piedo, resti, risko, ruĝa, sama, sekvi, semajno, vespero, vivi, voki</p>

					<?php $demandoj=array (
						10 => "al ekster : [15].",
						11 => "atente rigardi : [15].",
						12 => "ĉiuj el la du : [15].",
						13 => "danĝero, necerteco : [15].",
						14 => "daŭre esti en la sama loko : [15].",
						15 => "ekmalhavi : [15].",
						16 => "esti senkonscia, sed sana : [15].",
						17 => "faciligi la agadon : [15].",
						18 => "fina parto de kruro : [15].",
						19 => "interparoli pri io : [15].",
						20 => "io, kio funkcias per si mem : [15].",
						21 => "iri malantaŭ io : [15].",
						22 => "laŭte peti, ke iu venu : [15].",
						23 => "malbela aŭdaĵo : [15].",
						24 => "maltago : [15].",
						25 => "motora veturilo : [15].",
						26 => "ne alia : [15].",
						27 => "ne en : [15].",
						28 => "ne esti mortinta : [15].",
						29 => "noktiĝo : [15].",
						30 => "parto de domo : [15].",
						31 => "parto de la korpo, kie estas la okuloj : [15].",
						32 => "pensanta : [15].",
						33 => "post mallonga tempo : [15].",
						34 => "resanigi : [15].",
						35 => "doni sciigon : [15].",
						36 => "sep tagoj : [15].",
						37 => "tio, kion oni pensas pri iu temo : [15].",
						38 => "tomatokolora : [15].",
						39 => "zorgi pri malsanulo : [15]."
						);
						plenigEkzerco("U");
						?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

		<?php 
		} // fin section 5
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('GR',$leciono); 
			?>
		</ul>	
		
		<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="<?php echo $vojo;?>fr/gerda/son/gerda-malaperis.zip">gerda-malaperis.zip</a>
		</p>
		
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>