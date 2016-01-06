<?php $this->pageTitle = 'YOU ART HERE, Devis Pour un site Bold'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>

<div class="slide_devis0">
	<h1>le compte bold</h1>
	<h2>Le compte bold, c'est tout d'abord un site web sur-mesure, en collaboration avec un web-designer et/ou un développeur. Ensuite, ce sont des options de compte très intéressantes pour qui veut faire évoluer son site web et sa communication.</h2>
	<br /><p>Le compte bold en quelques points, c'est :</p>
	<ul style="margin:0; padding:20px 0 10px 0;">
		<li>Un nombre de pages illimité</li>
		<li>Activation des liens sociaux</li>
		<li>Une galerie (illimitée)</li>
		<li>Un agenda dynamique</li>
		<li>Une page d'Exposition (page éditoriale)</li>
		<li>Une page Livre d'or</li>
		<li>Une page de Contacts (formulaire complet)</li>
		<li>La Gestion de vos contacts</li>
		<li>Une expertise référencement</li>
	</ul>
</div>

<div class="slide_devis">
	<h1>Devis personnalisé</h1>
	
	<p>Alors... Créer un site web personnalisé vous intéresse-t-il ?<br />
	<?php 
		if($_POST) {

     $headers ='From: "MWS - Devis Site Bold "<contact@you-art-here.com>'."\n"; 
     $headers .='Reply-To: contact@you-art-here.com'."\n"; 
     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
     $headers .='Content-Transfer-Encoding: 8bit'; 

     $message ='<html><head><title>MWS - DEVIS SITE BOLD</title></head><body>';
     $message .= 'NOM : '.$_POST['nom'].'<BR />';
     $message .= 'MAIL : '.$_POST['mail'].'<BR />';
     $message .= 'TELEPHONE : '.$_POST['telephone'].'<BR />';
     $message .= 'DEMANDE : '.$_POST['demande'].'<BR />';
     $message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR />';
     $message .= '</body></html>'; 

     if(mail('contact@you-art-here.com', 'MWS - DEVIS SITE BOLD', $message, $headers)) 
     { 
          echo "Merci de votre demande, nous vous contacterons dans les plus bref délais afin d'établir ensemble un devis détaillé pour votre projet. !";
     } 
     else 
     { 
          echo 'Désolé, nous avons pas réussit à enregistrer votre demande, veuillez ré-essayer.';
     } 

			
			echo "<br /><br />";
			echo "<a href='/' title='Retour à la home'>Retour à la home</a>";
		} else {
	?>
	Si oui, remplissez le formulaire et nous vous contacterons dans les plus bref délais afin d'établir ensemble un devis détaillé pour votre projet.</p>
	<label class="specifications">Les champs anotés d'une * sont obligatoires.</label>
	<form id="form_devis" name="form_devis" action="" method="POST">
		<label>NOM <label class="specifications">*</label> <input type="text" class="contact_obligatoire required" id="nom" name="nom" value="" /></label>
		<label>MAIL <label class="specifications">*</label> <input type="text" class="contact_obligatoire required email" id="mail" name="mail" value="" /></label>
		<label>TÉLÉPHONE <input type="text" class="contact digits" id="telephone" name="telephone" value="" maxlength="15" /></label>
		<label>DEMANDE <label class="specifications">*</label> <textarea id="demande" name="demande" class="contact_obligatoire required" value="" rows="5" cols="20"></textarea></label>
		<br />
		<div align="center">
		<input type="submit" name="valider" value="valider" style="text-align:center;" />
		</div>
	</form>
	<script type="text/javascript"> 
		$("#form_devis").validate();
	</script> 
<?php } ?>
	<br />
</div>