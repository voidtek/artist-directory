<?php $this->pageTitle = 'YOU ART HERE, Contact'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>

<?php 

if($_POST){
	if($_POST['id_formulaire'] == "contact"){
		$headers ='From: "MWS - Contact "<contact@you-art-here.com>'."\n"; 
		$headers .='Content-Type: text/html; charset="utf8"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit'; 
		
		$message ='<html><head><title>MWS - PRISE DE CONTACT</title></head><body>';
		$message .= 'NOM : '.$_POST['nom'].'<BR />';
		$message .= 'MAIL : '.$_POST['mail'].'<BR />';
		$message .= 'TELEPHONE : '.$_POST['telephone'].'<BR />';
		$message .= 'DEMANDE : '.$_POST['demande'].'<BR />';
		$message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR />';
		$message .= '</body></html>'; 
		
		mail('contact@you-art-here.com', 'MWS - DEVIS SITE BOLD', $message, $headers);
	}
	if($_POST['id_formulaire'] == "newsletter"){
		$headers ='From: "MWS - Newsletter "<contact@you-art-here.com>'."\n"; 
		$headers .='Content-Type: text/html; charset="utf8"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit'; 
		
		$message ='<html><head><title>MWS - NEWSLETTER</title></head><body>';
		$message .= 'MAIL : '.$_POST['mail'].'<BR />';
		$message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR />';
		$message .= '</body></html>'; 
		
		mail('contact@you-art-here.com', 'MWS - DEVIS SITE BOLD', $message, $headers);
	}
}

?>

<!-- COLONNE DE GAUCHE : prise de contact -->
<div class="slide_contact1">
	<h1>Prise de contact /
	<br />Demande de renseignements</h1>
	<label class="specifications">Les champs anotés d'une * sont obligatoires.</label>

	<form id="form_contact" name="contacts" action="/service/contact" method="POST">
		<input type="hidden" id="id_formulaire" name="id_formulaire" value="contact"/>
		<label>NOM <label class="specifications">*</label> <input type="text" class="contact_obligatoire required" id="nom" name="nom" value="" size="10" /></label>
		<label>MAIL <label class="specifications">*</label> <input type="text" class="contact_obligatoire required email" id="mail" name="mail" value="" /></label>
		<label>TÉLÉPHONE <input type="text" class="contact digits" id="telephone" name="telephone" value="" size="10" maxlength="10" /></label>
		<label>DEMANDE <label class="specifications">*</label> <textarea id="demande" name="demande" class="contact_obligatoire required" value="" rows="5" cols="20"></textarea></label>
		<br />
		<div align="center">
		<input type="submit" name="valider" value="valider" style="text-align:center;" />
		</div>
	</form>
	<script type="text/javascript"> 
		$("#form_contact").validate();
	</script> 
	<br />
	<div style="clear:both;"></div>
</div>
<!-- FIN COLONNE DE GAUCHE : prise de contact -->

<!-- COLONNE DE DROITE -->
<div class="slide_contact2">
	<!-- FIN BOX NEWSLETTER -->
	<div class="slide_contact21">
		<h1>Newsletter YOU ART HERE</h1>
		<p>Laissez votre email pour être tenu(e) informé(e)<br/>des évolutions de MyWebSite :</p>
		<form id="form_newsletter" name="newsletter" action="/service/contact" method="POST">
			<input type="hidden" id="id_formulaire" name="id_formulaire" value="newsletter"/>
			<label>VOTRE MAIL <input type="text" class="contact_obligatoire required email" id="mail" name="mail" value="" onfocus="if(this.value=='Entrez votre Email'){this.value=''};" onblur="if(this.value==''){this.value='Entrez votre Email'};" /></label>
			<br /><input type="submit" value="valider" />
		</form>
		<script type="text/javascript"> 
			$("#form_newsletter").validate();
		</script>
		<div style="clear:both;"></div>
	</div>
	<!-- FIN BOX NEWSLETTER -->
	
	<!-- BOX PARTAGEZ / DIFFUSEZ -->
	<div class="slide_contact22">
		<h1>Partagez / Diffusez</h1>
		<p>Restez connectés à YOU ART HERE :</p>
		<div class="social">
			<a href="http://blog.you-art-here.com/" class="blog" title=" Rdv sur le blog " target="_blank">Blog de You-Art-Here</a>
        	<a href="http://twitter.com/youarthere/" class="twitter" title=" Suivez nous sur Twitter " target="_blank">Page twitter de YOU ART HERE</A>
        	<a href="http://www.facebook.com/pages/MyWebSite-dot-You-Art-Here/115086111838150" class="facebook" title=" Devenez fan sur Facebook " target="_blank">Facebook de MywebSite</a>
        </div>
        <div style="clear:both;"></div>
	</div>
	<!-- FIN BOX PARTAGEZ / DIFFUSEZ -->
</div>
<!-- FIN COLONNE DE DROITE -->

<!-- BOX BAS -->
<div style=" clear:both; height:1px;"></div>
<!-- BOX DEVENEZ FAN -->
<div class="slide_contact3" style="height:340px">
	<h1>DEVENEZ FAN<br />DE YOU ART HERE</h1>
	<div style="height:240px; width:815px; background-color:#FFF; border:none;">
		<iframe src="http://www.facebook.com/plugins/likebox.php?id=115086111838150&amp;width=815&amp;connections=10&amp;stream=false&amp;header=false&amp;height=242" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:815px; height:240px;" allowTransparency="true"></iframe>
	</div>
</div>
<!-- FIN BOX DEVENEZ FAN -->
<div style=" clear:both; height:1px;"></div>
<!-- FIN BOX BAS -->