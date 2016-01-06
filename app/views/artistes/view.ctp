<?php
$statut_compte = $this->data["ArtisteCompte"]["statut"];
?>
<div class="slide_compte1">
	<h1>mon Compte / profil</h1>
	<h2>
	<?php if($statut_compte == "light") { ?>
			Vous avez souscript un compte LIGHT. Certaines des informations ci-dessous ne sont pas modifiables. Pour y avoir accès, il vous faut upgrader votre compte vers la formule MEDIUM.
		<br /><a href="/service/upgrade"># Upgradez votre compte</a>
	<?php } 
	if($statut_compte == "bold") { ?>
		Vous avez souscript un compte MEDIUM. Retrouvez ci-dessous toutes les informations de votre compte.
		<br /><a href="#factures"># Vos factures</a>
	<?php } ?>
	</h2>
	<?php echo $form->create('Artiste', array('url'=>'/service/compte')); ?>
		<?php echo $form->input('Artiste.id'); ?>
		<?php echo $form->input('Site.id'); ?>
		<?php echo $form->input('User.id'); ?>
		<h3 style="border-top:1px solid #2d6786;">1. VOTRE SITE</h3>
		<label>DOMAINE (Bientôt) <input type="text" class="contact_readonly" id="domaine" name="domaine" value="http://www.<?php echo $this->data["Site"]["url"]; ?>.com" readonly /></label>
		<label class="exemple">Pour avoir votre propre nom de domaine personalisé (ex : http://www.jean-dupont.com), il vous faut upgrader votre compte.</label>
		<h2><a href="/service/upgrade"># UPGRADEZ VOTRE COMPTE</a></h2>
		<!-- <div class="vignette_bouton_upgrade_compte"><a href="/service/upgrade" class="sprite bouton_upgrader" title=" You art here : upgrader mon compte ">Upgrader mon compte</a></div> -->
		<br /><br />
		
		<h3 style="border-top:1px solid #2d6786;">2. INFORMATIONS UTILISATEUR</h3>
		<?php echo $form->input('Artiste.blase',array('class' => 'contact_obligatoire', 'label' => 'PRÉNOM NOM')); ?>
		<?php // echo $form->input('User.username',array('class' => 'contact_obligatoire', 'label' => 'UTILISATEUR')); ?>
		<?php echo $form->input('User.email',array('class' => 'contact_obligatoire', 'label' => 'EMAIL')); ?>
		<?php
		$options=array(	''=>'Sélectionnez votre métier',
										'photographe'=>'Photographe',
										'illustrateur'=>'Illustrateur',
										'peintre'=>'Peintre',
										'plasticien'=>'Plasticien',
										'designer'=>'Designer',
										'musicien'=>'Musicien',
										'groupe de musique'=>'Groupe de musique',
										'spectacle vivant'=>'Spectacle vivant',
										'art de la rue'=>'Art de la rue',
										'pluri-disciplinaire'=>'Pluri-disciplinaire',
										'autre'=>'autre');
		echo $form->input('Artiste.category',array('options' => $options,'class' => 'contact_obligatoire', 'label' => 'MÉTIER'))
		?>
		<?php
		$options=array(	''=>'Pays',
										'allemagne'=>'Allemagne',
										'autriche'=>'Autriche',
										'belgique'=>'Belgique',
										'danemark'=>'Danemark',
										'espagne'=>'Espagne',
										'finlande'=>'Finlande',
										'france'=>'France',
										'grece'=>'Grèce',
										'irlande'=>'Irlande',
										'italie'=>'Italie',
										'luxembourg'=>'Luxembourg',
										'norvege'=>'Norvège',
										'pays_bas'=>'Pays-Bas',
										'portugal'=>'Portugal',
										'royaume_uni'=>'Royaume-Uni',
										'suede'=>'Suède',
										'suisse'=>'Suisse');
		echo $form->input('Artiste.pays',array('options' => $options,'class' => 'contact_obligatoire', 'label' => 'PAYS'))
		?><br /><br /><br />
		
		<h3 style="border-top:1px solid #2d6786;">3. INFORMATIONS SITE</h3>
		<?php echo $form->input('Site.slogan',array('class' => 'contact_obligatoire', 'label' => 'SLOGAN')); ?>
		<?php echo $form->input('Artiste.description',array('class' => 'contact_obligatoire', 'label' => 'DESCRIPTION DE VOTRE MÉTIER')); ?>
		<label class="exemple">Spec : Phrase comprenant au maximum 150 caractères expliquant votre travail.</label>
		
		<br />
		<?php echo $form->end('Enregistrer');?>
		<br /><br />
	</form>
</div>

<div class="slide_compte2">
	<h1>mes statistiques</h1>
	<?php if($statut_compte == "light") { ?>
		<h2>Retrouvez ci-dessous toutes les statistiques de votre site web. Pour y accéder, vous devez upgrader votre compte vers la formule MEDIUM.<br/>
		<a href="/service/upgrade"># Upgradez votre compte</a>
		</h2>
	<?php } 
		if($statut_compte == "bold") { 
	?>
		<div class="slide_compte21">
		<h3 style="padding:0; margin:0;">1. VOTRE TRAFFIC</h3>
		<div style="overflow:auto; height:200px; padding:10px 0 10px 0; margin:20px 0 0 0;">
			<img src="http://album.edimage.ca/canada/graphiques/PE/conn_franc_fr.jpg" width="100%" height="190px">
		</div>
		</div>
	<?php } ?>
</div>

<a name="factures"></a>
<div class="slide_compte3">
	<h1>MES FACTURES</h1>
	<?php if($statut_compte == "light") { ?>
		<h2>Retrouvez ci-dessous un historique de vos factures.<br/>
		<a href="/service/upgrade"># Upgradez votre compte</a>
		</h2>
	<?php } 
		if($statut_compte == "bold") { 
	?>
		<h3 style="padding:0; margin:0;">FACTURES PASSEES</h3>
		<li>Facture Avril 2009 - Avril 2010</li>
		<br/><br/>
		<h3 style="padding:0; margin:0;">FACTURES EN COURS</h3>
		<li>Facture Avril 2010 - Avril 2011</li>
	<?php } ?>
</div>
