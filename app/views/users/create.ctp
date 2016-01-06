<!--

	<fieldset>
	  <legend><?php __('Utilisateur Details');?></legend>
	  <?php
	  e ($form->input('username'));
	  e ($form->input('email'));
	  ?>
	</fieldset>
-->

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

<div class="slide_create">
	<h1>Inscription</h1>
		
	<h2>BIENVENUE SUR L'ESPACE DE CRÉATION DE SITE WEB.</h2>
		
	<p>Merci de renseigner les informations ci-dessous.</p>
	<label class="specifications">Tous les champs sont obligatoires.</label>
		
	<?php echo $form->create('User', array('action' => 'create')); ?>
		<?php echo $form->input('user.username',array('class' => 'contact_obligatoire', 'label' => 'NOM COMPLET')); ?>
		<label class="exemple">Ex : Jean DUPONT</label>
		<?php echo $form->input('site.title',array('class' => 'contact_obligatoire', 'label' => 'NOM DU SITE')); ?>
		<label class="exemple">Ex : http://www.mywebsite.you-art-here.com/jean-dupont</label>
		<label>MÉTIER
			<select class="text" id="metier" name="metier" tabindex="1">
				<option label="sélectionnez votre métier" value="1">Sélectionnez votre métier</option>
				<option label="photographe" value="2">Photographe</option>
				<option label="illustrateur" value="3">Illustrateur</option>
				<option label="designer" value="4">Designer</option>
				<option label="musicien" value="5">Musicien</option>
				<option label="groupe de musique" value="6">Groupe de musique</option>
				<option label="peintre" value="7">Peintre</option>
				<option label="art du spectacle" value="8">Art du spectacle</option>
				<option label="spectacle vivant" value="9">Spectacle vivant</option>
				<option label="autre" value="10">autre</option>
			</select>
		</label>
		<?php echo $form->input('user.email',array('class' => 'contact_obligatoire', 'label' => 'EMAIL')); ?>
		<label class="exemple">Ex : jeremy-pagot@gmail.com</label>
		<?php echo $form->input('user.password',array('class' => 'contact_obligatoire', 'label' => 'MOT DE PASSE')); ?>
		<label class="exemple">8 caractères max</label>
		<?php echo $form->input('user.password2',array('class' => 'contact_obligatoire', 'label' => 'CONFIRMATION MOT DE PASSE')); ?>
		<label class="exemple">il doit être identique au mot de passe</label>
		<label>PAYS
			<select class="text" id="pays" name="pays" tabindex="1"> 				<option value="">Pays</option>				<option value="DE">Allemagne</option>
				<option value="AS">Autriche</option>
				<option value="AS">Belgique</option>
				<option value="DA">Danemark</option>
				<option value="ES">Espagne</option>
				<option value="FI">Finlande</option>
				<option selected="selected" value="FR">France</option>
				<option value="GR">Grèce</option>
				<option value="IR">Irlande</option>
				<option value="IT">Italie</option>
				<option value="LX">Luxembourg</option>
				<option value="NO">Norvège</option>
				<option value="NL">Pays-Bas</option>
				<option value="PT">Portugal</option>
				<option value="GB">Royaume-Uni</option>
				<option value="SW">Suède</option>
				<option value="SE">Suisse</option>    		</select>
		</label>
		
		<br /><br />
		<p>En cliquant sur le bouton "valider", vous acceptez les <a href="/service/cgu" title=" You Art Here : Conditions générales d'utilisation " target="_blank">CGU</a>.</p>
			
		<br />
		<!-- <input type="submit" name="valider" value="valider" style="text-align:center;" /> -->
		<?php echo $form->end('valider');?>
	<br />
</div>