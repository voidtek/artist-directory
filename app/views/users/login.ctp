<div class="slide_connexion1">
	<h1>Connexion</h1>
		
	<h2>DÉJÀ INSCRIT ?<br />
	CONNECTEZ-VOUS !</h2>
		<?php 
			if  ($session->check('Message.auth')) $session->flash('auth');    
			echo $form->create('User', array('action' => 'login'));    
			echo $form->input('username',array('class' => 'contact_obligatoire', 'label'=>'UTILISATEUR'));    
			echo $form->input('password',array('class' => 'contact_obligatoire', 'label'=>'MOT DE PASSE'));    
			echo '<br />';
			echo $form->end('valider');
		?>
	<br />
</div>
	
<div class="slide_connexion2">
	<h1>Inscription</h1>
		
	<h2>PAS ENCORE INSCRIT ?</h2>
		
	<br />
	<p>Créez un compte gratuitement en quelques secondes afin d'accéder à votre espace de création et de gestion de site internet.
	<br /><br />Vous aurez ainsi :
	<br /><img src="/img/puce1.png" border="0" style="padding:0; margin:0;" />votre biographie ou démarche artistique
	<br /><img src="/img/puce1.png" border="0" style="padding:0; margin:0;" />une présentation de vos oeuvres originales.</p>
	<div class="vignette_bouton_login"><a href="/service/new" class="sprite bouton_create" title=" You art here : créez votre site web artistique ">Je m'inscris</a></div>
	<br />
</div>

