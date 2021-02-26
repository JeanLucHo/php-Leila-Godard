<?php
  $page = "portfolio";
  // Inclure le haut de page
  include("inclusions/haut-de-page.inc.php");
?>
			<div class="portfolio-principal">
				<h2><?=$titrePortfolio; ?></h2>
				<p class="introtext">
					<?=$paragraphePortfolio; ?>
				</p>
				<section class="affichage-oeuvre">
					<div class="info">
						<div class="gauche">
							<h4><?=$titreOeuvre; ?></h4>
							<p><?=$dimensionsOeuvre; ?></p>
						</div>
						<div class="flexibouton droite">
							<span><?=$bontonDemandeInfo; ?></span>
						</div>
					</div>
					<div class="affichage-image">
						<div class="precedent gauche"><a href="#" title="<?=$divPrecedentGaucheTitle; ?>"></a></div>
						<div class="cadre-image">
							<img src="ressources/images/portfolio/2019/t2019-001.jpg" alt="&OElig;uvre t2019-001"/>
						</div>
						<div class="suivant droite"><a href="#" title="<?=$divSuivantDroiteTitle; ?>"></a></div>
					</div>
					<div class="legende"><?=$nombreImage; ?></div>
				</section>
				<!-- DÉBUT : Images miniatures dans le portfolio -->
				<section class="categorie">
					<?php
						$portefolioAnnees = scandir("ressources/images/portfolio", SCANDIR_SORT_DESCENDING);
						for ($i = 0; $i < count($portefolioAnnees) - 2 ; $i++) :
					?>
						<article>
							<h3><?= $portefolioAnnees[$i]; ?></h3>
							<ul class="miniatures">
								<?php
									$portefoliofAnneeCourante = scandir("ressources/images/portfolio/".$portefolioAnnees[$i]);
									for ($k = 1; $k <= (count($portefoliofAnneeCourante) - 2) / 2 ; $k++) :
										$zero = ($k < 10) ? "0" : ""; 
								?>

									<li><img alt="&OElig;uvre t<?= $portefolioAnnees[$i]; ?>-00<?= $k ?>" src="ressources/images/portfolio/<?= $portefolioAnnees[$i]; ?>/t<?= $portefolioAnnees[$i]; ?>-0<?= $zero; ?><?= $k ?>-t.jpg"/></li>
								
								<?php endfor; ?>	
							</ul>
						</article>
					<?php endfor; ?>
				</section>

				<!-- FIN : Images miniatures dans le portfolio -->
			</div>
<?php
  // Inclure le bas de page
  include("inclusions/bas-de-page.inc.php");
?>