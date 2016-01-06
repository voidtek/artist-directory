<?php $this->pageTitle = 'YOU ART HERE, création d\'un site web d\'artiste professionnel ou d\'un book en ligne pour créatifs indépendants'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, formules proposées et services compris pour la création d'un site web d'artiste professionnel ou d'un book en ligne pour créatifs indépendants"; ?>

<div class="slide_upgrade1">
	<h1>Présentation<br />du compte MEDIUM</h1>
	<h3>Le compte MEDIUM est un moyen abordable de prendre le contrôle total sur la gestion de votre site Web professionnel. En utilisant les fonctionnalités avancées, vos oeuvres originales sont présentées exactement comme vous le souhaitez.</h3>
	<h2>Le compte medium en détail :</h2>
	<ul style="margin:0; padding:10px 0 20px 0;">
		<li>Contenu images ou vidéos : illimité</li>
		<li>Nom de domaine personnalisé</li>
		<li>Choix parmi 10 gabarits avancés</li>
		<li>Choix parmi plus de 20 typographies en sus des polices standard du web</li>
		<li>Nom de domaine personnalisé</li>
		<li>Rubriques contact, agenda, work, biographie</li>
		<li>Formulaires de contact</li>
		<li style="color:#5e6466;">Statistiques avancées (<a href="/service/devis_site_bold" title=" Demandez un devis pour la création d'un compte bold ">réservé aux comptes BOLD</a>)</li>
		<li style="color:#5e6466;">Gestion de vos contacts pour une diffusion par mailing (<a href="/service/devis_site_bold" title=" Demandez un devis pour la création d'un compte bold ">réservé aux comptes BOLD</a>)</li>
	</ul>
</div>

<div class="slide_upgrade2">
	<div class="slide_upgrade21" style="background:transparent url('/img/fond-upgrade21.png') no-repeat scroll left 0;">
		<div style="float:left; width:220px; padding:0; margin:0;">
			<h1 style="text-align:left; padding:0;">UN COMPTE MEDIUM</h1>
			<h2 style="text-align:left; color:#FFF; padding:0;">C'est augmenter vos chances de vous faire connaître, alors laissez-vous tenter !</h2>
		</div>
		<div class="vignette_bouton_forfaits" style="margin:20px 20px 0 0; width:80px; height:80px; padding:40px 40px 0 0; float:right;">
			<a href="javascript:alert('MyWebSite est en Version BETA \nCette fonction n\'est pas encore disponible.')" class="sprite bouton_medium" title=" You art here : upgrader mon compte ">upgradez mon compte</a>
		</div>
	</div>

	<div class="slide_upgrade22" style="background:transparent url('/img/fond-upgrade22.png') no-repeat scroll left 0;">
		<h1>LES DERNIERS<br /> COMPTES MEDIUM</h1>
			<?php 
	$var_count = 4;
	foreach ($this->viewVars['menu_artiste'] as $link):?> 
	<?php 
		if($link['ArtisteCompte']['statut'] == "medium"){ ?>
				<li><img src="/img/flags/<?php echo $link['Artiste']['pays']; ?>.png" alt=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " /> <a href="<?php echo "/".$link['Site']['url']; ?>" title=" <?php echo $link['Artiste']['blase']; ?> . <?php echo $link['Artiste']['category']; ?> . <?php echo $link['Artiste']['pays']; ?> " target="_blank" style="color:#1D1D1D;"><?php echo $link['Artiste']['blase']; ?></a> . <?php echo $link['Artiste']['category']; ?><br /><span class="date_creation1">Créé le : <?php echo $link['Artiste']['created']; ?></span></li>
			<?php 
			$var_count--;
			if($var_count <= 0) break;
		}
	endforeach; 
	if ($var_count == 4) {echo "<p>des sites sont en cours de création, revenez plus tard...</p>";} ?> 

		<h2><a href="/service/annuaire" title=" Découvrez l'annuaire des sites web ">DÉCOUVREZ L'ANNUAIRE DES SITES WEB</a></h2>
	</div>
</div>

<div class="slide_upgrade3">
	<h1>COMPARAISON ENTRE UN COMPTE LIGHT ET UN COMPTE MEDIUM</h1>
	<table cellpadding="5" cellspacing="1" width="100%" border="0">
		<tr>
			<td width="30%" class="td_compare1"></td>
			<td width="35%" class="td_compare22">COMPTE LIGHT</td>
			<td width="35%" class="td_compare33">COMPTE MEDIUM</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Rubriques disponibles</td>
			<td width="35%" class="td_compare2">- Work ou Biographie<br />- Galerie</td>
			<td width="35%" class="td_compare3">- Work<br />- Biographie<br />- Contact (formulaire complet)<br />- Agenda<br />- Evènements<br />- Liens<br />- Livre d'or<br />- Galerie</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Gabarits disponibles</td>
			<td width="35%" class="td_compare2">Choix restreint à 3 gabarits</td>
			<td width="35%" class="td_compare3">Choix parmi plus de 10 gabarits avancés et mis à jour régulièrement</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Typographies</td>
			<td width="35%" class="td_compare2">Choix restreint à 3 typographies en sus des polices standards du web</td>
			<td width="35%" class="td_compare3">Choix parmi plus de 25 typographies en sus des polices standards du web</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Contenu image ou vidéo</td>
			<td width="35%" class="td_compare2">Limité à 35 médias</td>
			<td width="35%" class="td_compare3">300 médias (vidéos ou images)</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Publicité</td>
			<td width="35%" class="td_compare2">Aucune</td>
			<td width="35%" class="td_compare3">Aucune</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Nom de domaine</td>
			<td width="35%" class="td_compare2">générique :<br />http://www.mywebsite.you-art-here.com/jean-dupont</td>
			<td width="35%" class="td_compare3">Personnalisé :<br />
			<label class="exemple">http://www.jean-dupont.com</label></td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Statistiques</td>
			<td width="35%" class="td_compare2">Aucune</td>
			<td width="35%" class="td_compare3">- Trafic du site web<br />- Type de visiteurs<br />- Timing des visites</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Gestion des contacts</td>
			<td width="35%" class="td_compare2">Pas d'accès (<a href="/service/devis_site_bold" title=" Demandez un devis pour la création d'un compte bold ">réservé aux comptes BOLD</a>)</td>
			<td width="35%" class="td_compare3">Pas d'accès (<a href="/service/devis_site_bold" title=" Demandez un devis pour la création d'un compte bold ">réservé aux comptes BOLD</a>)</td>
		</tr>
		<tr>
			<td width="30%" class="td_compare1">Prix</td>
			<td width="35%" class="td_compare2">Gratuit</td>
			<td width="35%" class="td_compare33">150 &euro; / an</td>
		</tr>
	</table>
	<br />
</div>
