<!--
<DIV id="login-content">
	<?php 
	if  ($session->check('Message.auth')) $session->flash('auth');    
	echo $form->create('User', array('action' => 'login'));    
	echo $form->input('username');    
	echo $form->input('password');    
	echo $form->end('Login');
	?>
</DIV>
-->
	
<div class="slide_connexion1">
	<h1>Inscription</h1>
		
	<h2>DÉJÀ INSCRIPT ?<br />
	CONNECTEZ-VOUS !</h2>
		
	<form id="form_login" name="login" action="" method="POST">
		<label>UTILISATEUR <input type="text" class="contact_obligatoire" id="utilisateur" name="utilisateur" value="" /></label>
		<label>PASSWORD <input type="text" class="contact_obligatoire" id="password" name="password" value="" /></label>
		<br /><br /><input type="submit" name="valider" value="valider" />
	</form>
	<br />
</div>
	
<div class="slide_connexion2">
	<h1>Inscription</h1>
		
	<h2>PAS ENCORE INSCRIPT ?</h2>
		
	<br />
	<p>Créez un compte gratuitement afin de créer votre site web en quelques secondes.
	<br /><br />Vous aurez ainsi :
	<br />> votre biographie sur internet 
	<br />> une présentation de vos oeuvres</p>
	<div class="vignette_bouton_login"><a href="/service/new" class="sprite bouton_create" title=" You art here : je crée mon site web artistique ">Je m'inscris</a></div>
	<br />
</div>

