<?php $this->pageTitle = 'YOU ART HERE, recherchez un artiste ou un métier'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, métier, métiers, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, recherchez un métier ou un artiste"; ?>

<div class="slide_explore">
	<div style="padding:0; margin:0; overflow:auto; width:100%; height:100%;">
		<h1>Résultat pour : <i>"<?php echo $_POST["search"]?>"</i></h1>
		<ul style="border-top:1px solid #2d6786; border-bottom:1px solid #2d6786; margin:0; padding:10px 0 10px;">
		<?php foreach ($this->viewVars['menu_artiste'] as $link):?> 
			<li><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> | <a href="<?php echo "/".$link['Site']['url']; ?>" target="_blank" title=" <?php echo "".$link['Artiste']['blase']; ?> : <?php echo "".$link['Artiste']['description']; ?> "><?php echo "".$link['Artiste']['blase']; ?></a> | <?php echo "".$link['Artiste']['category']; ?></li>
		<?php endforeach; ?> 
		</ul>
	</div>
	<br /><br />
</div>

<div class="slide_annuaire">
	<h2 style="padding:0; margin:0 0 10px 10px; color:#FFF;">Résultat pour : <i>"<?php echo $_POST["search"]?>"</i></h2>
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Démonstration</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if (($link['Artiste']['category'] == "demo")) { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style='padding:0 0 0 20px;'>Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier artiste non déterminé à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>

	<h2 style="padding:15px 0 0 0; margin:0 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les photographes</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "photographe") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier photographe à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les Peintres</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "peintre") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		/*if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier peintre à créer votre site sur You art here ?</a></p>";*/
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucune réponse pour ce métier.</p>";
		?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les sculpteurs</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "sculpteur") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier sculpteur à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les illustrateurs</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "illustrateur") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier illustrateur à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les plasticiens</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "plasticien") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier plasticien à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les musiciens</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "musicien") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier musicien à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les groupes de musique</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "groupe_musique") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier groupe de musique à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Les designers</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "designer") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier designer à créer votre site sur You art here ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Art de la rue</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "art_de_la_rue") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier artiste à créer votre site sur You art here, dans la rubrique Art de la rue ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Spectacle vivant</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "spectacle_vivant") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier artiste à créer votre site sur You art here, dans la rubrique Spectacle vivant ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Pluri-disciplinaire</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if ($link['Artiste']['category'] == "pluri-disciplinaire") { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style=\"padding:0 0 0 20px;\">Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier artiste à créer votre site sur You art here, dans la rubrique Pluri-disciplinaire ?</a></p>"; ?>
	
	<div style="clear:left; width:100%;"></div>
	
	<div style="text-align:right; width:100%; padding:0; margin:0 0 10px 0;"><a href="#top" title=" Retour en haut de la page "><img src="/img/bt-retourtop.png" alt=" Retour en haut de la page " /></a></div>
	
	<h2 style="padding:15px 0 0 0; margin:10px 0 10px 10px; color:#FFF; border-top:1px solid #2d6786;">Autres</h2>
	<?php 
		$cat_num = 0;
		foreach ($this->viewVars['menu_artiste'] as $link):
		if (($link['Artiste']['category'] == "autre") || ($link['Artiste']['category'] == "")) { ?> 
		<div class="annuaire_site">
			<a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> "><img src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=220&h=140&zc=1" width="220" height="140" style="border:5px solid #1D1D1D;" alt=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?> " /></a>
			<br /><a href="/<?php echo $link['Site']['url'] ?>" title=" <?php echo "".$link['Artiste']['blase'] ?> : <?php echo "".$link['Site']['slogan'] ?>"><?php echo "".$link['Artiste']['blase'] ?></a>
			<?php 
			switch($link['ArtisteCompte']['statut']) { 
				case "light" : echo ' | <span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "medium" : echo ' | <span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				case "bold" : echo ' | <span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
				default : break;
			} ?> 
			<br /><img src="/img/flags/<?php echo "".$link['Artiste']['pays']; ?>.png" style="border:1px solid #FFF;" alt=" <?php echo "".$link['Site']['url']; ?> / <?php echo "".$link['Artiste']['pays']; ?> " /> <?php echo "".$link['Site']['slogan']; ?>
		</div>
	<?php 
		$cat_num++;
		}
		endforeach;
		if ($cat_num == 0) echo "<p style='padding:0 0 0 20px;'>Aucun site pour le moment.<br /> <a href='/service/new' title=\" You art here : création d'un compte artiste \">Voulez-vous être le premier artiste non déterminé à créer votre site sur You art here ?</a></p>"; ?>

	<div style="clear:left; width:100%;"></div>

</div>