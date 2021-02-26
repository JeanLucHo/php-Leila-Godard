<?php
	// Les langues disponibles (les sous-répertoire du répertoire "textes)
	$langueDispos = scandir("textes");

	
	// Choix de langue par défaut. 
	$lan = "fr";
	if(isset($_COOKIE["i18n"])) {
		$lan = $_COOKIE["i18n"];
	}

	// Choix de langue explicitement requis par l'utilisateur
	// Vérifier si le paramètre existe avant de l'utiliser
	if(isset($_GET["langue"])) {
		$lan = $_GET["langue"];
		setcookie("i18n", $lan, time()+3600*24*365);
	}

	// Inclure les fichiers textes
	include("textes/$lan/commun.txt.php");
	include("textes/$lan/$page.txt.php");

	// Inclure le fichier du code utilitaire
	include("lib/utilitaires.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet'>
		<title><?=$contenusTitle[$page]; ?></title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="<?=$contenusContent[$page]; ?>">
		<link rel="stylesheet" href="ressources/css/normalize.css">
		<link rel="stylesheet" href="ressources/css/polices.css">
		<link rel="stylesheet" href="ressources/css/eg.css">
	</head>
	<body>
		<div id="conteneur">
			<header>
				<nav class="primaire">
					<ul class="gauche">
						<li class="<?=$page == "accueil" ? "actif" : ""; ?>"><a href="index.php"><?=$ongletAccueil; ?></a></li>
						<li class="<?=$page == "portfolio" ? "actif" : ""; ?>"><a href="portfolio.php"><?=$ongletPortfolio; ?></a></li>
						<li><a href="#"><?=$ongletDossierArtiste; ?></a></li>
					</ul>
					<ul class="droite">
					
							<?php for($i = 2; $i < count($langueDispos); $i++) : ?>
							<li class="majuscule">
								<a href="?langue=<?=$langueDispos[$i]; ?>"
									class= "groupe <?=$langueDispos[$i] == $lan ? "actif" : ""; ?>"
									title="<?=$nomsLangues[$langueDispos[$i]]; ?>">
									<?=$langueDispos[$i]; ?> 
								</a>
								|
							</li>
							<?php endfor;?>

						
						<li><a href="#"><span class="icone-courriel"></span><?=$ongletContact; ?></a></li>
					</ul>
				</nav>
				<h1><span><?=$titreEric; ?></span> <?=$titreGodard; ?></h1>
			</header>