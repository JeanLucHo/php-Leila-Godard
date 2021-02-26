<?php
  $page = "accueil";
  // Inclure le haut de page
  include("inclusions/haut-de-page.inc.php");
?>
			<div class="accueil-principal">
				<div class="diaporama">
					<div class="masque">
						<div class="diapos" style="margin-left: 0px;">
							<article>
								<img src="ressources/images/diaporama/diapo1.jpg" alt="<?=$altImageDuvernin; ?>">
								<div class="etiquette"><?=$EtiquetteImageDuvernin; ?>
									<div class="sous-etiquette"><?=$SousEtiqutteImageDuvernin; ?></div>
								</div>
							</article>
							<article>
								<img src="ressources/images/diaporama/diapo2.jpg" alt="<?=$altImageFeuilleAutomne; ?>">
								<div class="etiquette"><?=$EtiquetteImageFeuilleAutomne; ?></div>
							</article>
							<article>
								<img src="ressources/images/diaporama/diapo3.jpg" alt="<?=$altImageSérigraphie; ?>">
							</article>
						</div>
					</div>
					<div class="controleur"></div>
				</div>
				<p>
					<?=$premierParagrapheAccueil; ?>
				</p>
				<p>
					<?=$deuxiemeParagrapheAccueil; ?>
				</p>
			</div>
<?php
  // Inclure le bas de page
  include("inclusions/bas-de-page.inc.php");
?>