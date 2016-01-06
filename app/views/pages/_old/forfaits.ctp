<?php $this->pageTitle = 'YOU ART HERE, création d\'un site web d\'artiste professionnel ou d\'un book en ligne pour créatifs indépendants'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, formules proposées et services compris pour la création d'un site web d'artiste professionnel ou d'un book en ligne pour créatifs indépendants"; ?>

<div class="slide_forfaits_general">
<div class="slide_forfaits1">
	<h1 style="text-align:center;">light</h1>
	<h2 class="center">gratuit</h2>
	<ul>
		<li>1 page Biographie</li>
		<li>1 page Work</li>
		<li>Choix de l apage d'accueil</li>
		<br />
		<li>1 page Galerie <br />(3 thèmes et 15 visuels)</li>
		<li><a href="/service/collection-templates" title=" Consultez nore galerie de templates accessibles en mode LIGHT " class="lien_forfaits">4 templates</a> simples </li>
		<li>Typographies (limitées)</li>
	</ul>
	<div class="vignette_bouton_forfaits">
		<a href="/service/new" class="sprite bouton_create" title=" You art here : je crée mon site web artistique ">Créez votre site web</a>
	</div>
</div>

<div class="slide_forfaits2">
	<h1 style="text-align:center;">medium</h1>
	<h2 class="center">150 euros par an</h2>
	<ul style="margin:0; padding:20px 0 20px 0;">
		<li>1 page Biographie</li>
		<li>1 page Work</li>
		<li>1 page de Contacts</li>
		<li>1 page de News</li>
		<br />
		<li>1 page Galerie <br />(20 thèmes et 300 médias)</li>
		<li><a href="/service/collection-templates" title=" Consultez nore galerie de templates accessibles en mode MEDIUM " class="lien_forfaits">10 templates</a> de sites élaborés</li>
		<li>Typographies (non limitées)</li>
	</ul>
	<div class="vignette_bouton_forfaits" style="margin:0; padding:0;">
		<a href="/service/upgrade" class="sprite bouton_medium" style="margin:0; padding:0;" title=" You art here : upgrader mon compte ">upgradez votre compte</a>
	</div>
</div>

<div class="slide_forfaits3">
	<h1 style="text-align:center;">bold</h1>
	<h2 class="center">Sur mesure / sur devis</h2>
	<ul style="margin:0; padding:20px 0 20px 0;">
		<li>1 site medium +</li>
		<br />
		<li>1 page Galerie <br />(thèmes et médias illimités)</li>
		<li>Gabarit de site personnalisé</li>
		<li>Expertise de référencement</li>
		<li>Newsletter (Création et gestion)</li>
		<li>Gestion de vos abonnés</li>
	</ul>
	<div class="vignette_bouton_forfaits" style="margin:0; padding:0;">
		<a href="/service/devis-site-bold" class="sprite bouton_bold" style="margin:0; padding:0;" title=" You art here : demande de devis personnalisé ">Demande de devis personnalisé</a>
	</div>
</div>
</div>

<div class="slide_forfaits41">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">évènements LIGHT :</h2>
	<a href="/service/news" title=" Nouveau gabarit pour l'abonnement MEDIUM " style="text-transform:uppercase;">Nouveau gabarit pour l'abonnement MEDIUM</a>
	<p>L'abonnement MEDIUM se voit ajouté un nouveau gabarit fullscreen. Idéal pour mettre vos oeuvre en valeurs.</p>
</div>

<div class="slide_forfaits42">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">évènements MEDIUM :</h2>
	<a href="/service/news" title=" Nouveau gabarit pour l'abonnement MEDIUM " style="text-transform:uppercase;">Nouveau gabarit pour l'abonnement MEDIUM</a>
	<p>L'abonnement MEDIUM se voit ajouté un nouveau gabarit fullscreen. Idéal pour mettre vos oeuvre en valeurs.</p>
</div>
	
<div class="slide_forfaits43">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">évènements BOLD :</h2>
	<a href="/service/news" title=" Nouveau gabarit pour l'abonnement MEDIUM " style="text-transform:uppercase;">Nouveau gabarit pour l'abonnement MEDIUM</a>
	<p>L'abonnement MEDIUM se voit ajouté un nouveau gabarit fullscreen. Idéal pour mettre vos oeuvre en valeurs.</p>
</div>

<div style="clear:both; width:100%;"></div>

<div class="slide_forfaits41">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">Liste des sites LIGHT :</h2>
	<ul>
	<?php 
	$var_count = 5;
	foreach ($this->viewVars['menu_artiste'] as $link):?> 
	<?php 
		if($link['ArtisteCompte']['statut'] == "light"){ ?>
				<li><img src="/img/flags/<?php echo $link['Artiste']['pays']; ?>.png" alt=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " /> <a href="<?php echo "/".$link['Site']['url']; ?>" title=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " target="_blank"><?php echo $link['Artiste']['blase']; ?></a> . <?php echo $link['Artiste']['category']; ?>
				<!--<br /><span class="date_creation">Créé le : <?php echo $link['Artiste']['created']; ?></span>--></li>
			<?php 
			$var_count--;
			if($var_count <= 0) break;
		}
	endforeach; 
	if ($var_count == 5) {echo "<p>Des sites sont en cours de création, revenez plus tard...</p>";} ?> 
		</ul>
</div>

<div class="slide_forfaits42">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">Liste des sites MEDIUM :</h2>
	<ul>
	<?php 
	$var_count = 5;
	foreach ($this->viewVars['menu_artiste'] as $link):?> 
	<?php 
		if($link['ArtisteCompte']['statut'] == "medium"){ ?>
				<li><img src="/img/flags/<?php echo $link['Artiste']['pays']; ?>.png" alt=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " /> <a href="<?php echo "/".$link['Site']['url']; ?>" title=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " target="_blank"><?php echo $link['Artiste']['blase']; ?></a> . <?php echo $link['Artiste']['category']; ?>
				<!--<br /><span class="date_creation">Créé le : <?php echo $link['Artiste']['created']; ?></span>--></li>
			<?php 
			$var_count--;
			if($var_count <= 0) break;
		}
	endforeach; 
	if ($var_count == 5) {echo "<p>Des sites sont en cours de création, revenez plus tard...</p>";} ?> 
		</ul>
</div>
	
<div class="slide_forfaits43">
	<h2 style="padding:10px 0 5px 0; margin:0; color:#FFF;">Liste des sites BOLD :</h2>
	<ul>
	<?php 
	$var_count = 5;
	foreach ($this->viewVars['menu_artiste'] as $link):?> 
	<?php 
		if($link['ArtisteCompte']['statut'] == "bold"){ ?>
				<li><img src="/img/flags/<?php echo $link['Artiste']['pays']; ?>.png" alt=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " /> <a href="<?php echo "/".$link['Site']['url']; ?>" title=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " target="_blank"><?php echo $link['Artiste']['blase']; ?></a> . <?php echo $link['Artiste']['category']; ?>
				<!--<br /><span class="date_creation">Créé le : <?php echo $link['Artiste']['created']; ?></span>--></li>
			<?php 
			$var_count--;
			if($var_count <= 0) break;
		}
	endforeach; 
	if ($var_count == 5) {echo "<p>Des sites sont en cours de création, revenez plus tard...</p>";} ?> 
		</ul>
</div>