<page>          
	<title>liste des Artistes toutes catégories présents sur YOU ART HERE</title>
	<body>
		<h1>LISTE DES ARTISTES</h1><br />
		  
		<p>
		<img src="/img/maquette/line.png" width="450" height="5" border="0" /><br /><br />
		Trier par : <a href="">date</a> | <a href="">métier</a> | <a href="">date d'entrée</a> | <a href="">type de compte</a>
		<br /><img src="/img/maquette/line.png" width="450" height="5" border="0" />
		</p>
		
		<br /><br />
		
		<?php foreach ($artistes as $artiste): ?>
			<p>
			FR | <?php echo $html->link($artiste['Artiste']['blase'], "/artiste/".$artiste['Artiste']['blase'] ,array('title' => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'])); ?> | 
			<?php echo $html->link($artiste['ArtisteCategorie']['nom'], "/metiers/" ,array('title' => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'])); ?> | compte professionnel | 22/12/2009 ---- { Administrateur }
			</p>
		<?php endforeach; ?>
	</body>
</page>
