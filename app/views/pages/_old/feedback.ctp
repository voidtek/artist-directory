<?php $this->pageTitle = 'YOU ART HERE, FEEDBACK'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>
<div class="slide_feedback">
	<h1>Feedback /<br />
	Vos commentaires</h1>
	
	<?php 
		if($_POST) {

     $headers ='From: "MWS - Feedback "<contact@you-art-here.com>'."\n"; 
     $headers .='Reply-To: contact@you-art-here.com'."\n"; 
     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
     $headers .='Content-Transfer-Encoding: 8bit'; 

     $message ='<html><head><title>MWS - FEEDBACK</title></head><body>';
     $message .= 'NOM : '.$_POST['nom'].'<BR />';
     $message .= 'MAIL : '.$_POST['mail'].'<BR />';
     $message .= 'TYPE : '.$_POST['type'].'<BR />';
     $message .= 'COMMENTAIRE : '.$_POST['commentaire'].'<BR />';
     $message .= '</body></html>'; 

     if(mail('contact@you-art-here.com', 'MWS - FEEDBACK', $message, $headers)) 
     { 
          echo '<p>Merci de votre feedback !</p>';
     } 
     else 
     { 
          echo '<p>Désolé, nous n\'avons pas réussi à enregistrer votre feedback, veuillez ré-essayer.</p>';
     } 
			echo "<a href='/' title=' Retour à la home '>Retour à la home</a><br />";
		} else {
	?>
	<p>Vous avez rencontré un problème sur le site web ?, vous avez des commentaires à faire ? vous avez des améliorations à prescrire ?<br />
	Merci d'avance de votre participation et de votre intérêt. Merci d'être le plus précis possible (rubrique, page, bouton, action, ...).</p>
	<label class="specifications">Tous les champs sont obligatoires.</label>
	<form id="form_feedback" name="feedback" action="" method="POST">
		<label>NOM <input type="text" class="contact_obligatoire required" id="nom" name="nom" value="" size="10" /></label>
		<label>MAIL <input type="text" class="contact_obligatoire required email" id="mail" name="mail" value="" /></label>
		<label>TYPE 
			<select id="type" name="type" tabindex="1" class="required">
				<option value="">---</option>
				<option value="bug">Bug</option>
				<option value="commentaire">Commentaire</option>
				<option value="amélioration">Amélioration</option>
			</select>
		</label>
		<label>COMMENTAIRE <textarea name="commentaire" id="commentaire" class="contact_obligatoire required" value="" rows="5" cols="20"></textarea></label>
		<br />
		<div align="center">
		<input type="submit" name="valider" value="valider" style="text-align:center;" />
		</div>
	</form>
		<script type="text/javascript"> 
			$("#form_feedback").validate();
		</script> 
	<?php } ?>
	<br />
</div>