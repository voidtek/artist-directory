<page>          
	<title>Annuaire des artistes <? echo $artistecategorie[0]['ArtisteCategorie']['nom'] ?> </title>
	<body>
		<h1><?php echo $artistecategorie[0]['ArtisteCategorie']['nom']?></h1>
		<p><i><?php echo $artistecategorie[0]['ArtisteCategorie']['description']?></i></p><br /><br />
		<h2>| Liste des artistes pour la rubrique : <?php echo $artistecategorie[0]['ArtisteCategorie']['nom']?></h2>
		<p>
		<?php foreach ($menu_artiste as $artiste):?>
			<?php if ($artiste['ArtisteCategorie']['nom'] == $artistecategorie[0]['ArtisteCategorie']['nom']):?>
			&nbsp;&nbsp;>> <?php echo $html->link($artiste['Artiste']['blase'], "/artiste/".$artiste['Artiste']['blase'] ,array('title' => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'])); ?> : <?php echo $artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom']; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		</p>
	</body>
</page>   


