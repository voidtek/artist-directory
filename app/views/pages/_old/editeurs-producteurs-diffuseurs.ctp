<?php $this->pageTitle = 'YOU ART HERE, Contact et inscription Editeurs / Diffuseurs / Producteurs'; ?>
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
	
	if($_POST['id_formulaire'] == "inscription"){
		$headers ='From: "MWS - Exposants "<contact@you-art-here.com>'."\n"; 
		$headers .='Content-Type: text/html; charset="utf8"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit'; 
		
		$message ='<html><head><title>MWS - EXPOSANT INSCRIPTION</title></head><body>';
		$message .= 'NOM : '.$_POST['nom'].'<BR />';
		$message .= 'MAIL : '.$_POST['mail'].'<BR />';
		$message .= 'RESPONSABLE : '.$_POST['responsable'].'<BR />';
		$message .= 'TELEPHONE : '.$_POST['telephone'].'<BR />';
		$message .= 'ADRESSE : '.$_POST['adresse'].'<BR />';
		$message .= 'DESCRIPTION : '.$_POST['description'].'<BR />';
		$message .= 'PROPOSITION : '.$_POST['proposition'].'<BR />';
		$message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR />';
		$message .= '</body></html>'; 
		
		mail('contact@you-art-here.com', 'MWS - Exposants', $message, $headers);
	}
}
?>

<div class="slide_exposants1">
	<h1>Editeurs, producteurs ou diffuseurs, You art here vous intéresse ?</h1>
	
	<label class="specifications">Les champs anotés d'une * sont obligatoires.</label>

	<form id="form_contact" name="contacts" action="/service/editeurs-producteurs-diffuseurs" method="POST">
		<input type="hidden" id="id_formulaire" name="id_formulaire" value="inscription" />
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

<div class="slide_exposants2">
	<h1>Editeurs, producteurs ou diffuseurs, vous souhaitez vous inscrire sur l'annuaire You art here ?</h1>
	
	<p>L'inscription sur l'annuaire You-Art-Here vous permet de proposer vos coordonnées aux artistes enregistrés chez nous uniquement. L'intérêt est pour vous de pouvoir recevoir des demandes artistiques d'artistes en tout genre directement chez vous. A tout moment, vous aurez la possibilité de modifier les informations vous concernant, via la console de gestion. De plus, vous pourrez proposer des événements artistiques que les artistes pourront consulter.</p>
	
	<label class="specifications">Les champs anotés d'une * sont obligatoires.</label>
	<form id="form_contact" name="contacts" action="/service/editeurs-producteurs-diffuseurs" method="POST">
		<input type="hidden" id="id_formulaire" name="id_formulaire" value="contact" />
		<label>NOM <label class="specifications">*</label> <input type="text" class="contact_obligatoire" id="nom" name="nom" value="" size="10" /></label>
		<label>MAIL <label class="specifications">*</label> <input type="text" class="contact_obligatoire" id="mail" name="mail" value="" /></label>
		<label>RESPONSABLE <input type="text" class="contact" id="responsable" name="responsable" value="" /></label>
		<label>TÉLÉPHONE <input type="text" class="contact" id="telephone" name="telephone" value="" size="10" maxlength="10" /></label>
		<label>ADRESSE <label class="specifications">*</label> <textarea id="adresse" name="adresse" class="contact_obligatoire" value="" rows="10" cols="20"></textarea></label>
		<label>DESCRIPTION <label class="specifications">*</label> <textarea id="description" name="description" class="contact_obligatoire" value="" rows="10" cols="20"></textarea></label>
		<label>PROPOSITION <label class="specifications">*</label> <textarea id="proposition" name="proposition" class="contact_obligatoire" value="" rows="10" cols="20"></textarea></label>
		<br />
		<div align="center">
		<input type="submit" name="valider" value="valider" style="text-align:center;" />
		</div>
	</form>
	<br />
</div>