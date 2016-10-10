<?php
include "util.php";
$pagxtitolo="Bienvenue sur le site d’iKurso !";
$korpo="hejmo";
$gxisdatigDato="2016-01-21";
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
	redirigeParDroits($persono);
}
include "pagxkapo.inc.php";
?>
		<section id="enkonduko">
			<div class="row">
				<div class="col s12 m5 l6">
					<img src="<?=$vojo?>bildoj/robin-2012.jpg" alt="© Robin Guinin" class="responsive-img">
					<p class="creditphoto primaire-texte">dessin : Robin Guinin, <a href="https://www.facebook.com/robin.guinin/">www.facebook.com/robin.guinin/</a></p>
				</div>
				<div class="col s12 m7 l5">
					<h2>Bienvenue sur <span class="ikurso">iKurso</span></h2>
					<p>Ici, vous pourrez découvrir ce qu’est la langue internationale Espéranto.<br> 
						Vous pourrez également l’apprendre en suivant nos cours, à votre rythme.<br>
						Pour mieux vous aider, l’association Espéranto-France vous propose un service de correction gratuit. Pour en bénéficier, il suffit de vous inscrire.</p>
						<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-activates="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
						<p class="center"><a href="#prezento" class="btn-flat small">L’espéranto, qu’est-ce que c’est ?<i class="material-icons right">arrow_drop_down</i></a></p>
				</div>
			</div>
		</section>
		<section id="niaj_kursoj">
			<h2>Nos cours en ligne</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m5 offset-m1">
						<h5>Cours en 10 leçons</h5>
						<p>Cours d’espéranto pour débutants. À suivre avec l’aide d'un correcteur ou en totale autonomie.</p>
						<p><a href="<?=$vojo?>fr/cge/intro.php" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
					<div class="col s12 m5 offset-m1">
						<h5>Gerda malaperis</h5>
						<p>Pour ceux qui connaissent déjà les bases de l’espéranto, par exemple après le cours en 10 leçons. </p>
						<p><a href="<?=$vojo?>fr/gerda/index.php" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
				</div>
			</div>
		</section>
		
		<section id="komentoj">
			<div class="row">
				<div class="col s12 l10 offset-l1">
					<div class="card-panel blue lighten-5">
						<div class="row">
							<div class="col s12">
								<h5>Ils ont suivi nos cours :</h5>
								<div class="row">
									<div class="col s12 m6 l6">
										<div class="row">
											<div class="col s2 center">
												<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/gwen.jpg" alt="" class="circle responsive-img">
												<br><span class="eta"><em>Gwen</em></span>
											</div>
											<div class="col s10">
												<span>Le cours en 10 leçons d′iKurso est parfait pour commencer l’apprentissage de l’espéranto. 
												Comptez sur vos tuteurs pour vous aider à progresser rapidement&nbsp;!</span>
											</div>
										</div>
									</div>
									<div class="col s12 m6 l6">
										<div class="row">
											<div class="col s2 center">
												<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Ishtima.jpg" alt="" class="circle responsive-img">
												<br><span class="eta"><em>Ishtima</em></span>
											</div>
											<div class="col s10">
												<span>Je peux témoigner que le Kurso de Esperanto est une excellente application pour découvrir la langue internationale et pour commencer à se l’approprier. Des cours bien structurés, des exercices rapidement corrigés en font une très bonne méthode que je recommande.</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m11">
										<div class="row">
											<div class="col s2 m1 center">
												<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Philippe-D.jpg" alt="" class="circle responsive-img">
												<br><span class="eta"><em>Philippe</em></span>
											</div>
											<div class="col s9 m11">
												<span>Le cours d’espéranto d’iKurso répond très  précisément aux besoins de l’apprenant. Dès le début, on travaille sur des textes&nbsp;; on travaille des phrases complètes. Le vocabulaire ainsi appris, en contexte, est plus facilement mémorisé grâce à l’image mentale que l’on se fait du contenu du texte.<br>De plus, et c’est loin d’être négligeable, on assigne à chaque apprenant un correcteur-motivateur bénévole et intéressé pour l’encourager à la régularité, veiller sur l’augmentation graduelle de la difficulté tout en soutenant la motivation. Le tout gratuit. Que demander de plus&nbsp;!</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 l5">
										<div class="row">
											<div class="col s3">
												<span class="eta"><em>Jean-Baptiste</em></span>
											</div>
											<div class="col s9">
												<span>iKurso permet de très rapidement progresser en espéranto. Le fait d'avoir un-e correcteur-trice qui nous suit tour au long des leçons est vraiment un plus.</span>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col s3 center">
												<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Nathael.jpg" alt="" class="circle responsive-img">
												<br><span class="eta"><em>Nathaël</em></span>
											</div>
											<div class="col s9">
												<span>L’apprentissage de l’espéranto est très simple, en particulier sur iKurso. 
												Les cours sont clairs et équilibrent parfaitement grammaire, vocabulaire et exercices. 
												Très vite on se sent à l’aise en espéranto. 
												De plus nos tuteurs, dévoués, corrigent au mieux nos exercices, 
												en prenant soin de notre bonne compréhension. Je recommande&nbsp;!</span>
											</div>
										</div>
									</div>
									<div class="col s12 l7">
										<div class="row">
											<div class="col s2 center">
												<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Marko.jpg" alt="" class="circle responsive-img">
												<br><span class="eta"><em>Marko</em></span>
											</div>
											<div class="col s10">
												<span>Ikurso est un site exceptionnel.
												Sans doute parce que l′espéranto est également une langue exceptionnelle.<br> 
												Mon expérience personnelle m'a permis de constater que chez iKurso règnent les valeurs 
												de fraternité, de générosité et de partage propres à l′espéranto.
												Le cours <em>Gerda malaperis</em> est particulièrement bien structuré et complet.
												Mais surtout, les exercices de chaque leçon ne sont pas des questions à choix multiples
												corrigées par un ordinateur, mais des questions à développement corrigées par des 
												correcteurs (accompagnateurs) très très humains.
												Pour ma part, mon correcteur a fait preuve d′une telle générosité de son temps, 
												que je crois avoir tout autant appris en correspondant librement avec lui, 
												que j′ai appris grâce aux cours eux-mêmes.<br>
												Alors, cent fois bravo et merci à iKurso !<br>
												Mais surtout, mille fois bravo et merci à ces sympathiques et dévoué(e)s 
												correcteurs(trices) bénévoles.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

		<section id="aliaj_kursoj">
			<h2>Autres cours</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m3 offset-m1">
						<h5>Kurso de Esperanto</h5>
						<p>Logiciel multimédia pour Windows, Linux et Mac OSX</p>
						<p>En 12 leçons vous apprendrez les bases de l’espéranto.<br><a href="http://www.kurso.com.br/" class="btn-flat small"><i class="material-icons right">arrow_right</i>télécharger le logiciel</a></p>
					</div>
				
					<div class="col s12 m3 offset-m1">
						<h5>lernu.net</h5>
						<p>Autre site, traduit dans plus de 20 langues.<br>
						Pour ceux qui veulent découvrir l’espéranto, l’apprendre ou le pratiquer.</p>
						<p class="container"><img class="responsive-img" src="<?=$vojo?>bildoj/lernu.png"></p>
						<p><a href="http://www.lernu.net" class="btn-flat small"><i class="material-icons right">arrow_right</i>aller sur lernu.net</a></p>
					</div>

					<div class="col s12 m3 offset-m1">
						<h5>duolingo</h5>
						<p>Cours ludique pour débutants.<br>
						N’existe pour l’instant qu’en anglais. (Nous attendons avec impatience une version pour les francophones.)</p>
						<p class="container"><img class="responsive-img" src="<?=$vojo?>bildoj/duolingo.jpg"></p>
						<p><a href="https://en.duolingo.com/course/eo/en/Learn-Esperanto-Online" class="btn-flat small"><i class="material-icons right">arrow_right</i>aller sur duolingo</a></p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="prezento" class="scrollspy">
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<h2>L’espéranto, qu’est-ce que c’est ?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8 offset-m1">
					<p>L’espéranto, la Langue Internationale, est une langue destinée à faciliter la communication entre des personnes de différentes cultures. Son auteur, le docteur L. L. Zamenhof (1859-1917) publia sa « Lingvo Internacia » en 1887 sous le pseudonyme de « Docteur Esperanto ». On estime que l’espéranto est maintenant parlé par au moins deux millions de personnes dans plus de 100 pays. Il y a des milliers de livres et plus de 100 revues différentes paraissent régulièrement. Mais qu’est-ce qui en fait une langue plus internationale que le français, l’anglais ou le russe ?</p>
					<p>L’espéranto est une langue construite (le terme « artificiel » est plutôt impropre), particulièrement destinée à un usage international / interculturel, afin que ceux qui l’utilisent puissent dialoguer sur un pied d’égalité, dans la mesure où aucun n’utilise sa langue natale. Avec les langues nationales, un individu normal n’est pas capable de s’exprimer aussi bien dans une langue étrangère que celui dont c’est la langue maternelle, à moins d’être expert. Alors que grâce à sa construction simple, logique et régulière, chacun peut apprendre l’espéranto très rapidement.</p>
				</div>
				<div class="col s12 m2">
					<img src="<?php echo $vojo;?>bildoj/unua-libro.jpg" class="responsive-img">
				</div>
			</div>

			<div class="row">
				<div class="col s12 m10 offset-m1">
					<h2>Une langue vivante</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 offset-m1">
					<img src="<?php echo $vojo;?>bildoj/vivanta-lingvo.jpg" class="responsive-img">
				</div>
				<div class="col s12 m6">
					<p>L’espéranto s’utilise comme n’importe quelle autre langue. Néanmoins, il est plus facile à apprendre qu’une langue nationale. Même ceux qui n’arrivent pas à se souvenir d’un mot dans une langue qu’ils ont étudiée plusieurs années à l’école ou à l’université n’auront besoin que de quelques mois d’étude intensive pour parler couramment l’espéranto. L’espéranto est aussi plus utile qu’une langue nationale si votre but en apprenant une langue est de connaître des gens un peu partout dans le monde, puisque presque tout le monde l’a appris pour cette même raison.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<p>L’espéranto n’existe que depuis une centaine d’années ; il est donc la plus moderne des langues vivantes. Introduit d’abord en Europe, l’espéranto sert aujourd’hui aux échanges à l’échelle mondiale. En plus, il constitue une préparation idéale à l’étude d’une seconde langue en général et vous fait mieux apprécier le sens exact des mots de votre propre langue.</p>
				</div>
			</div>
		</section>
		
		<section id="konkludo">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5 center">
							<h5>Je veux apprendre l’espéranto&nbsp;!</h5>
							<p>En créant un compte, vous pourrez suivre nos cours, voir votre progression<br>et demander l’aide d’un correcteur.<br>C’est gratuit !</p>
							<p><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-activates="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php include "pagxpiedo.inc.php";?>