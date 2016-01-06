<page>          
	<title>Liste des métiers proposés</title>
	<body>
		<h1>LA LISTE DES MÉTIERS</h1><br />
		<div style="float:left; width:286px; padding:0 20px 0 0; overflow:hidden;">
		<?php foreach ($artisteCategories as $artisteCategorie): ?>    
			<h3><?php echo $html->link($artisteCategorie['ArtisteCategorie']['nom'], "/metier/".$artisteCategorie['ArtisteCategorie']['nom'],array('title' => $artisteCategorie['ArtisteCategorie']['title_menu'])); ?></h3>
			<p><?php echo $artisteCategorie['ArtisteCategorie']['description']; ?></p><br /><br />
		<?php endforeach; ?>
		</div>
	</body>
</page>   


