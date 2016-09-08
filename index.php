<?php
$string = file_get_contents("data.json");
$data = json_decode($string, true);

function total_name()
{
	global $data ;
	return $data["user"]["lastname"]." ".$data["user"]["firstname"] ;
}

?>

<html>

	<head>
		<title><?= total_name() ?></title>
		<meta charset="utf-8">
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" >
		<link href="css/print.css" rel="stylesheet" type="text/css"  media="print">
	</head>


	<body>

		<header><h1><?= total_name() ?></h1></header>

		<pre><?= var_dump($data) ?></pre>


		<div id="contact">
			<a href="mailto:<?= $data["user"]["email"] ?>?subject=Votre%20CV"><img src="img/mai.png"></a>
			<a href="www.linkedin.fr"><img src="img/lkd.svg" alt="Linkedin"></a>
		</div>


		<!--  professional experience -->
		<section>
			<?php foreach($data["professional experience"] as $entreprise => $details): ?>

				<h2><?= $entreprise ?> depuis <?= $details["begin"] ?></h2>

				<?php foreach($details["functions"] as $name => $function): ?>

					<h3><?= $name ?></h3>

					<ul class="experience" >
						<?php foreach($function as $picture => $activity): ?>
							<li><img src="img/<?= $picture ?>"><?= $activity ?></li>
						<?php endforeach // next activities ?>
					</ul>

					
				<?php endforeach // next categories ?>
			<?php endforeach // next entreprise?>
		</section>



	<section style="background-color:#bdc3c7">
		<h2>Experience personnelle</h2>


		<h3>Webmaster <small>(front &amp; back-end)</small></h3>

		<ul class="experience">
			<li><img src="img/ror.png" >Bonne connaissance et application du langage orienté objet Ruby et de son framework web Ruby On Rails.</li>
			<li><img src="http://www.xttechnologies.com/wp-content/uploads/2014/10/c1.png" >Bonne connaissance et application du langage PHP et de son framework web CakePHP.</li>
			<li><img src="img/css.png" >Bonne connaissance et application des standards du web : HTML, CSS, Javascript &amp; JQuery</li>
		</ul>


		<h3>Développement applications</h3>

		<ul class="experience">
			<li><img src="img/bry.svg">Création d'applications pour la plateforme Blackberry 10. <a href="https://appworld.blackberry.com/webstore/vendor/45412/?lang=en">Accéder à mon compte vendeur.</a></li>
		</ul>


		<h3>Autres</h3>

		<ul class="experience">
			<li><img src="img/lnx.svg">Connaissance et utilisation environnement Linux via SSH pour installer et utiliser un serveur Apache ou Nginx.</li>
			<li><img src="img/oth.png" >Connaissance de la retouche photographique avec GIMP et du dessin vectoriel avec Inkscape</li>
			<li><img src="img/git.png" >Utilisation du versionning avec Git</li>
		</ul>

	</section>

	<section>
		<h2>Etudes et formations</h2>

		<h3>Parcours scolaire</h3>

		<ul class="experience">
			<li><img src="http://www.maximeculea.fr/wp-content/themes/voice-child/img/graduation.png" ><a href="http://www.lamartinieremonplaisir.org/index.php/scolarite-top/sts/sts-fluides-energies-environnements/option-genie-frigorifique">BTS F.E.E. spécialisation froid</a> en 2013 à La Martinière Monplaisir</li>
			<li><img src="http://www.maximeculea.fr/wp-content/themes/voice-child/img/graduation.png" ><a href="http://www.lamartinieremonplaisir.org/index.php/scolarite-top/sts/sts-fluides-energies-environnements/option-genie-frigorifique">Baccalauréat STI en 2011 à La Martinière Monplaisir</li>
		</ul>


		<h3>Formation et aptitudes</h3>

		<ul class="experience">
			<li><img src="http://www.plaformac.fr/images/logo-voiture-png.png">Permis de conduire type B</li>
			<li><img src="img/frd.png" >Attestation d’aptitude des fluides frigorigènes (Catégorie 1) depuis mai 2012</li>
		</ul>


		<h3>Langues</h3>
		<ul class="experience">
			<li><img src="http://www.interlingo.fr/wp-content/uploads/2015/03/United-Kingdom-icon.png">
				<ul>
					<li>parlé: <progress value="3" max="5">3/5</progress></li>
					<li>écouté: <progress value="4" max="5">4/5</progress></li>
					<li>écris: <progress value="4" max="5">3/5</progress></li>
					<li>lu: <progress value="5" max="5">3/5</progress></li>
				</ul></li>
		</ul>

	</section>


	<footer>
		<p>28 décembre 1992 à Toulouse</p>
		<p><adress>2c, rue de Margnolles, 69300 , Caluire-et-Cuire, France</adress></p>
		<p><strong>+336 663 549 581</strong></p>
		<p><a href="mailto:RousseauAlexandre.Lyon@gmail.com?subject=Votre%20CV">RousseauAlexandre.Lyon@gmail.com</a></p>
	</footer>


</body></html>
