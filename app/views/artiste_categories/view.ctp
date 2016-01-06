<h1><?php echo $artistecategorie[0]['ArtisteCategorie']['nom']?></h1>
<p><?php echo $artistecategorie[0]['ArtisteCategorie']['description']?></p><br /><br />
<h2>liste des artistes '<?php echo $artistecategorie[0]['ArtisteCategorie']['nom']?>'</h2>
<p>
<?php foreach ($menu_artiste as $artiste):?>
	<?php if ($artiste['ArtisteCategorie']['nom'] == $artistecategorie[0]['ArtisteCategorie']['nom']):?>
	>> <?php echo $html->link($artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'] , "/".$artiste['Artiste']['blase'] ,array('title' => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'])); ?>
	<?php endif; ?>
<?php endforeach; ?>
</p>