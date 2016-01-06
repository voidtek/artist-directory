<page>          
	<title><?php echo $artiste[0]['Artiste']['blase']; ?> - <?php echo $artiste[0]['ArtisteCategorie']['nom']; ?></title>
	<body>
		<h1><?php echo $artiste[0]['Artiste']['blase']; ?></h1>
		<img src="../<?php echo $artiste[0]['Artiste']['avatar']; ?>" alt="<?php echo $artiste[0]['Artiste']['blase']; ?>" align="left" />
		<br /><br />
		<p>FR <?php echo $artiste[0]['ArtisteCategorie']['nom']; ?></p>
		
		<br /><br /><br /><br /><br /><br /><br /><br />
		
		<p><?php echo $artiste[0]['Artiste']['description']; ?></p>
		
		<p><?php echo $html->link($artiste[0]['Artiste']['site'], $artiste[0]['Artiste']['site'], array('title' => 'Site officiel de '.$artiste[0]['Artiste']['blase'], 'target' => '_blank')); ?></p>
	</body>
</page>
