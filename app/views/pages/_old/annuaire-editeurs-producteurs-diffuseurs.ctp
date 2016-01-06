<?php $this->pageTitle = 'YOU ART HERE, Annuaire des Editeurs / Diffuseurs / Producteurs'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>

<?php 
if($_POST){
	if($_POST['id_formulaire'] == "contact"){
		$headers ='From: "MWS - Exposants "<contact@you-art-here.com>'."\n"; 
		$headers .='Content-Type: text/html; charset="utf8"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit'; 
		
		$message ='<html><head><title>MWS - EXPOSANT DEMANDE</title></head><body>';
		$message .= 'NOM : '.$_POST['nom'].'<BR />';
		$message .= 'MAIL : '.$_POST['mail'].'<BR />';
		$message .= 'TELEPHONE : '.$_POST['telephone'].'<BR />';
		$message .= 'DEMANDE : '.$_POST['demande'].'<BR />';
		$message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR />';
		$message .= '</body></html>'; 
		
		mail('contact@you-art-here.com', 'MWS - Exposants', $message, $headers);
	}
}
?>

<!-- BOX COLONNE GAUCHE -->
<div class="slide_contact1">
	<h1>Editeurs, producteurs ou diffuseurs, You art here vous intéresse ?</h1>
	
	<label class="specifications">Les champs anotés d'une * sont obligatoires.</label>

	<form id="form_contact" name="contacts" action="/service/editeurs-producteurs-diffuseurs" method="POST">
		<input type="hidden" id="id_formulaire" name="id_formulaire" value="contact" />
		<label>NOM <label class="specifications">*</label> <input type="text" class="contact_obligatoire" id="nom" name="nom" value="" size="10" /></label>
		<label>MAIL <label class="specifications">*</label> <input type="text" class="contact_obligatoire" id="mail" name="mail" value="" /></label>
		<label>TÉLÉPHONE <input type="text" class="contact" id="telephone" name="telephone" value="" size="10" maxlength="10" /></label>
		<label>DEMANDE <label class="specifications">*</label> <textarea id="demande" name="demande" class="contact_obligatoire" value="" rows="10" cols="20"></textarea></label>
		<br />
		<div align="center">
		<input type="submit" name="valider" value="valider" style="text-align:center;" />
		</div>
	</form>
	<br />
</div>
<!-- FIN BOX COLONNE GAUCHE -->

<!-- BOX COLONNE DROITE -->
<div class="slide_contact2">
	<!-- BOX NEWSLETTER -->
	<div class="slide_contact21">
		<h1>Newsletter YOU ART HERE</h1>
		<p>Laissez votre email pour être tenu(e) informé(e)<br/>des évolutions de MyWebSite :</p>
		<form id="form_newsletter" name="newsletter" action="" method="POST">
			<label>VOTRE MAIL <input type="text" class="contact_obligatoire" id="mail" name="mail" value="Entrez votre Email" onfocus="if(this.value=='Entrez votre Email'){this.value=''};" onblur="if(this.value==''){this.value='Entrez votre Email'};" /></label>
			<br /><input type="submit" value="valider" />
		</form>
	</div>
	<!-- FIN BOX NEWSLETTER -->
	
	<!-- BOX PARTAGER -->
	<div class="slide_contact22">
		<h1>Partagez / Diffusez</h1>
		<p>Restez connectés à YOU ART HERE :</p>
		<div class="social">
			<a href="http://blog.you-art-here.com/" class="blog" title=" Rdv sur le blog " target="_blank">Blog de You-Art-Here</a>
        	<a href="http://twitter.com/youarthere/" class="twitter" title=" Suivez nous sur Twitter " target="_blank">Page twitter de YOU ART HERE</A>
        	<a href="http://www.facebook.com/pages/MyWebSite-dot-You-Art-Here/115086111838150" class="facebook" title=" Devenez fan sur Facebook " target="_blank">Facebook de MywebSite</a>
        </div>
	</div>
	<!-- FIN BOX PARTAGER -->
</div>
<!-- FIN BOX COLONNE DROITE -->