<?php $this->pageTitle = 'YOU ART HERE, FEEDBACK'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>

<div class="slide_feedback1">
	<h1>Feedback / Report de bugs</h1>
	
	<p>Vous avez rencontrer un problème sur le site web ?<br />
	Merci de nous l'indiquer pour que l'on puisse le régler dès que possible. Merci d'avance de votre participation.
	<br />Merci de votre précision quant au report de bug.</p>
	
	<form id="contacts" name="feedback" action="" method="POST">
		<label>IDENTIFICATION</label>
			<label>UTILISATEUR * <input type="text" class="contact_obligatoire" name="utilisateur" value="" /></label>
			<label>MAIL * <input type="text" class="contact_obligatoire" name="mail" value="" /></label>
			<label>NOM DE DOMAINE * <input type="text" class="contact_obligatoire" name="nom_de_domaine" value="" /></label>
</div>

<div class="slide_feedback2">	
		<br /><label>DOMAINE CONCERNÉ</label>
			<label>
				<select name="domaine1">
					<option>Le site MyWebSite.com</option>
					<option>Votre site</option>
				</select>
			</label>
			<br />
			<label>Si le bug concerne votre site :</label>
				<select name="domaine2">
					<option>Page en particulier</option>
					<option>Administration de votre site</option>
					<option>Votre compte</option>
					<option>Facturation</option>
				</select>
		<br /><br />
		<label>DESCRIPTION DU BUG * <textarea name="demande" class="contact_obligatoire" value="" rows="5" cols="30"></textarea></label>
		<br /><br /><input type="submit" name="valider" value="valider" />
	</form>
</div>