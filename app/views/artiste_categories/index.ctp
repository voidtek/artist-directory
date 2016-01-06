<h1>Les métiers</h1>
<hr>
<div>
	<?php foreach ($artisteCategories as $artisteCategorie): ?>   
		<div id='<?php e("box_metier_".$artisteCategorie['ArtisteCategorie']['id'])?>' class="box_metiers" onClick="window.location.href='<?php e("/metier/".$artisteCategorie['ArtisteCategorie']['nom']);?>';" onmouseover="javascript:glowOn(<?php e("box_metier_".$artisteCategorie['ArtisteCategorie']['id']); ?>);" onmouseout="javascript:glowOff(<?php e("box_metier_".$artisteCategorie['ArtisteCategorie']['id']); ?>);"> 
			<div class="image">
				<?php echo $html->image("/img/metiers/".$artisteCategorie['ArtisteCategorie']['nom'].".png", array("alt" => $artisteCategorie['ArtisteCategorie']['description'],"title" => $artisteCategorie['ArtisteCategorie']['nom']." : ".$artisteCategorie['ArtisteCategorie']['description'],'url' => "/metier/".$artisteCategorie['ArtisteCategorie']['nom'])); ?>
			</div>
			<div class="titre">
				<?php echo $html->link($artisteCategorie['ArtisteCategorie']['nom'], "/metier/".$artisteCategorie['ArtisteCategorie']['nom'],array('style' => 'color:#FFFFFF; text-decoration:none;', 'title' => $artisteCategorie['ArtisteCategorie']['title_menu'])); ?>
			</div>
			<div class="description">
				Nbr d'artistes : ...
				<br />Nbr de books : ...
			</div>
		</div>
	<?php endforeach; ?> 
</div>
<script type="text/javascript">
		<!-- 
		// <![CDATA[
		function glowOn(identifiant){  
			document.body.style.background = "url(/img/metiers/fond_on.png)" + "px"; identifiant.style.background = "url(/img/metiers/fond_on.png)"
		} 
		
		function glowOff(identifiant){ 
			document.body.style.background = "url(/img/metiers/fond.png)" + "px"; identifiant.style.background = "url(/img/metiers/fond.png)"; 
		} 
		// ]]>
		-->
	</script>