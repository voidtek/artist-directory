<?php $this->layout = 'flash_xml'; ?>
<page>          
	<title>YOU ART HERE, Plateforme artistique / Gestion de book professionnel en ligne</title>
	<body>
		<h1>You Art Here</h1>
		<div style="float:left; height:auto; width:286px; padding:0 20px 0 0; overflow:hidden;">
		<h2>| Pages</h2>
		<p><span class="yah">You-Art-Here</span>, Plate-forme artistique propose la création et la gestion de book professionnel en ligne.
		<br />Un espace sur le web pour communiquer auprès des exposants, des particuliers et pour tisser ensemble une toile culturelle ou l'unique exigence est la mise en valeur de vos oeuvres artistiques originales.
		<br />Pour une navigation optimale, vous trouverez ci-dessous la liste des pages accessibles du site <span class="yah">You-Art-Here</span>.</p>
		<span class="blanc1">
		<?php foreach ($this->viewVars['menu_content'] as $link):?> 
				<?php echo $html->link($link['Content']['title_menu'], "/" .$link['Content']['url'], array('class' => 'artiste-random-box', 'title' => $link['Content']['title'])); ?><br />
		<?php endforeach; ?>
		<br /><br />
		</span>
		</div>
		
		<div style="float:left; height:auto; width:265px; padding:0 20px 0 20px; border-left:1px dotted #969696; overflow:hidden;">
		<h2>| Annuaire des artistes</h2>
		<p>Liste des artistes appartenants à l'annuaire artistique 
		<br /><span class="yah">YOU-ART-HERE</span>, triés par métiers (design, photographie, graphisme, peinture, illustration, vidéo, soud-design, musique, théâtre, scénographie, collectif...)</p>
		<span class="blanc1">
		<?php foreach ($this->viewVars['menu_artiste'] as $link):?> 
				>> <?php echo $html->link($link['Artiste']['blase'] , "/artiste/".$link['Artiste']['blase'],array('class' => 'artiste-random-box', 'title' => $link['Artiste']['blase'].' : '.$link['ArtisteProfil']['prenom'].' '.$link['ArtisteProfil']['nom'])); ?> | <?php echo $html->link($link['ArtisteCategorie']['nom'] , "/metier/".$link['ArtisteCategorie']['nom'],array('class' => 'cat-random-box', 'title' => $link['ArtisteCategorie']['title_menu'])); ?><br />
		<?php endforeach; ?> 
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		</span>
		</div>
		
		<div style="float:left; height:auto; width:285px; padding:0 0 0 20px; border-left:1px dotted #969696; overflow:hidden;">
		<h2>| Liens</h2>
		<p><span class="yah">You-Art-Here</span>, communauté pour artistes indépendants, gestion de book professionnel en ligne pour une mise en valeur de vos oeuvres artistiques.
		<br />Ci-dessous, la liste des liens disponibles sur le site <span class="yah">You-Art-Here</span> : sociaux, propriétaires, artistiques.</p>
		<span class="blanc1">
		<?php foreach ($this->viewVars['menu_link'] as $link):?> 
				<?php echo $html->link($link['Link']['nom'], $link['Link']['url'], array('title' => $link['Link']['title'])); ?><br />
		<?php endforeach; ?>
		<br /><br />
		</span>
		</div>
	</body>
</page>