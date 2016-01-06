<h1>ANNUAIRE DES ARTISTES</h1><br />
<p>FILTRES :</p>
<hr>
<div>
	<form name="" method="" id=""> 
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;"><p>PAR DATE</p></td>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;"><p>PAR PAYS</p></td>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;"><p>PAR MÉTIERS</p></td>
				<td style="padding:0 0 0 10px;"><p>PAR TYPE DE COMPTE</p></td>
			</tr>
			<tr>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;">
					<select id="date" name="date">
						<option>février 2010</option>
						<option>janvier 2010</option>
					</select>
				</td>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;">
					<select id="pays" name="pays">
						<option>France</option>
						<option>Canada</option>
						<option>Italie</option>
						<option>Portugal</option>
					</select>
				</td>
				<td style="border-right:1px solid #DDD; padding:0 0 0 10px;">
					<select id="metiers" name="metiers">
						<option>graphisme</option>
						<option>photographie</option>
						<option>illustration</option>
						<option>peinture</option>
					</select>
				</td>
				<td style="padding:0 0 0 10px;">
					<select id="type_compte" name="type_compte">
						<option>compte professionnel</option>
						<option>compte gratuit</option>
					</select>
				</td>
			</tr>
		</table>
	</form>
<hr>
<?php foreach ($artistes as $artiste): ?>
	<div id='<?php e("box_artistes_".$artiste['Artiste']['id'])?>' class="box_artistes" onClick="window.location.href='<?php e("/artiste/".$artiste['Artiste']['blase']);?>';" onmouseover="javascript:glowOn(<?php e("box_artistes_".$artiste['Artiste']['id']); ?>);" onmouseout="javascript:glowOff(<?php e("box_artistes_".$artiste['Artiste']['id']); ?>);">  
		<div class="image">
			<?php echo $html->image("/timthumb.php?src=".$artiste['Artiste']['avatar']."&w=56&h=56&zc=1", array("style" => "","alt" => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'], "title" => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'],'url' => "/artiste/".$artiste['Artiste']['blase'])); ?>
		</div>
		<div class="titre">
			<?php echo $html->link($artiste['Artiste']['blase'], "/artiste/".$artiste['Artiste']['blase'] ,array('style' => 'color:#FFFFFF; text-decoration:none; font-size:14pt;', 'title' => $artiste['Artiste']['blase'] . ' : '.$artiste['ArtisteProfil']['prenom'].' '.$artiste['ArtisteProfil']['nom'])); ?>
			<br /><br />
			flag <?php echo $html->link($artiste['ArtisteCategorie']['nom'], "/metiers/".$artiste['ArtisteCategorie']['nom'] ,array('style' => 'color:#FFFFFF; text-decoration:none; font-size:10pt;', 'title' => $artiste['ArtisteCategorie']['nom'])); ?>
		</div>
		<div class="description" style="padding:0px; margin:5px 0 0 11px; line-height:1.2em;">
			<br />Date de création : ...
			<br />Compte : ...
			<br />Nbr de visites : ...
		</div>
	</div>
<?php endforeach; ?>
</div>
<script type="text/javascript">
		<!-- 
		// <![CDATA[
		function glowOn(identifiant){  
			document.body.style.background = "url(/img/artistes/fond_pro_on.jpg)" + "px"; identifiant.style.background = "url(/img/artistes/fond_pro_on.jpg)"
		} 
		
		function glowOff(identifiant){ 
			document.body.style.background = "url(/img/artistes/fond_pro.jpg)" + "px"; identifiant.style.background = "url(/img/artistes/fond_pro.jpg)"; 
		} 
		// ]]>
		-->
	</script>