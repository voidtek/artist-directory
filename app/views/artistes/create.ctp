<div style="float:left; width:380px; margin:0 80px 20px 20px; padding:0;">
	<div class="slide_create_beta" style="background-color:#FFF;">
		<h2>MyWEBSITE : VERSION BETA</h2>
		<p style="color:#1D1D1D;">MyWebSite est en phase beta. De ce fait, votre inscription sera définitive une fois traitée par l'équipe YOU ART HERE. Nous faisons tout notre possible pour la traitée rapidement.
			<br /><br />Vous pouvez cependant vous inscrire à la <a href="/service/contact" title=" Inscrivez-vous à la newsletter pour être tenu(e) informé des évolutions du site. " class="inverse">newsletter <strong>YOU-ART-HERE</strong></a> pour rester informé(e) des mises à jour du site MyWebSite.</p>
	</div>

	<div class="slide_create0">
		<h1>le compte light</h1>
		<h2>C'est un site web simple avec des options de personnalisation.</h2>
		<br /><p>Le compte light en quelques points, c'est :</p>
		<ul style="margin:0; padding:20px 0 10px 0;">
			<li>1 page Biographie</li>
			<li>1 page Work</li>
			<li>1 page Galerie (3 thèmes et 15 visuels)</li>
			<li>Choix de la page d'accueil</li>
			<li>Choix parmi <a href="/service/collection-templates" title=" Consultez nore galerie de templates accessibles en mode LIGHT, MEDIUM et BOLD " class="lien_forfaits">4 templates</a> simples</li>
			<li>Choix parmi une bibliothèque de typographies (limitées)</li>
			<li>Activation des liens sociaux</li>
		</ul>
	</div>
</div>

<?php 
	if($this->data['creation_compte']){
?>
	<div class="slide_create">
		<h1>Inscription</h1>
			
		<h2>BIENVENUE <?php echo $this->data['Artiste']['blase'] ?>.</h2>
		<p>Merci pour votre confiance et votre intérêt.</p>
			
		<p>La création de votre compte ainsi que de votre site web est en cours de validation.</p>
		
		<p>Verifiez votre boîte mail "<?php echo $this->data['User']['email'] ?>", afin de récupérer votre login/mot de passe, ainsi que les chemins d'accès. Conservez-le soigneusement. Attention, ce mail peut se trouver dans vos indésirables.</p>
		
		<p>A tout moment, vous pouvez nous faire des retours par le biais du bouton <a href="/service/feedback" title=" You art here : feedback et commentaires ">"feedback"</a>
	
	</div>

	<?php } else { ?>
	
	<div class="slide_create">
		<h1>Inscription</h1>
			
		<h2>BIENVENUE SUR L'ESPACE <br />DE CRÉATION DE SITE WEB.</h2>
			
		<p>Merci de renseigner les informations ci-dessous.</p>
		<label class="specifications">Tous les champs sont obligatoires.</label>
			
		<?php echo $form->create('Artiste', array('action' => 'create')); ?>
			<?php echo $form->input('Artiste.blase',array('class' => 'contact_obligatoire required', 'label' => 'NOM COMPLET', 'minlength'=>'3')); ?>
			<label class="exemple">Ex : Jean DUPONT</label>
			<?php echo $form->input('Site.slogan',array('class' => 'contact_obligatoire required', 'label' => 'SLOGAN')); ?>
			<label class="exemple">Ex : Photographe urbain</label>
			<?php echo $form->input('User.email',array('class' => 'contact_obligatoire required email', 'label' => 'EMAIL')); ?>
			<label class="exemple">Ex : jeremy-pagot@gmail.com</label>
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
			echo $form->input('Artiste.category',array('options' => $options,'class' => 'contact_obligatoire required', 'label' => 'MÉTIER'))
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
			echo $form->input('Artiste.pays',array('options' => $options,'class' => 'contact_obligatoire required', 'label' => 'PAYS'))
			?>
			<br /><br />
			<p>En cliquant sur le bouton "valider",
			<br />vous acceptez les <a href="/service/cgu" title=" You Art Here : Conditions générales d'utilisation " target="_blank">Conditions générales d'utilisation</a>.</p>
				
			<br />
			<div align="center">
			<?php echo $form->end('valider');?>
			
			<script type="text/javascript"> 
				$("#ArtisteCreateForm").validate();
			</script> 
			</div>
		<br />
	</div>
<?php } ?>

