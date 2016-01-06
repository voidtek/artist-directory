<?php $this->pageTitle = 'YOU ART HERE, Plateforme artistique / Gestion de book professionnel en ligne'; ?>
<?php $this->viewVars['metaKeywords'] = "you art here, you-art-here, youarthere, art, artistes, book en ligne, book professionnel, annuaire artistique, exposants, échanges, post, blog, cms, référencement, création de site, webdesign, plate-forme artistique, seo, administration de site, site web, book artistique"; ?>
<?php $this->viewVars['metaDescription'] = "YOU ART HERE, plate-forme artistique propose la création et la gestion de book professionnel en ligne"; ?>

<!-- SLIDE 5 DERNIERS SITES WEB --> 
<div class="slide_home_hasard">
	<div class="slide-pos" style="height:416px; width:806px; margin:0; background-image:url('/img/fond-slide.png'); background-repeat:repeat; background-position:top left; padding:0;">
	<div id="header">
		<div id="slide-holder"> 
			<div id="slide-runner" style="height:405px; width:790px;"> 
				<?php 
				$var_count = 5;
				$i = 1;
				$var_description = "";
				foreach ($this->viewVars['menu_artiste'] as $link):?> 
					<a href="<?php echo "/".$link['Site']['url']; ?>"title=" <?php echo "".$link['Artiste']['blase']; ?> : <?php echo "".$link['Artiste']['description']; ?> " target="_blank"><img id="slide-img-<?php echo $i; ?>" src="/timthumb.php?src=<?php echo "/".$link['Site']['annuaire_capture']; ?>&w=795&h=400&zc=1" alt=" <?php echo "".$link['Artiste']['blase']; ?> : <?php echo "".$link['Artiste']['description']; ?> " class="slide" alt="" /></a> 
				<?php 
					if($var_description != "") $var_description .=",";
					$var_description .= "{\"id\":\"slide-img-".$i."\",\"client\":\"".$link['Artiste']['blase']."\",\"desc\":\"".$link['Artiste']['category']."\"}";
					$i++;
					$var_count--;
					if($var_count <= 0) break;
				endforeach; 
				?> 
			    <div id="slide-controls" style="width:790px; background-image:url('/img/fond-slide.png'); background-repeat:repeat-x; background-position:top left; height:50px; top:0;"> 
			     <p id="slide-client" class="text"><span></span> |</p> 
			     <p id="slide-desc" class="text" style="color:#14bad8; margin-left:3px;"></p>
			     <p id="slide-nav"></p> 
			    </div> 
			</div> 
		</div>
   		
	   	<script type="text/javascript"> 
	    if(!window.slider) var slider={};slider.data=[];
	   	</script>
	   	<script type="text/javascript"> 
		if(!window.slider) var slider={};slider.data=[<?php echo $var_description;?>];
		</script>
		 
   	</div>
   </div>
</div>
<!-- FIN SLIDE 5 DERNIERS SITES WEB --> 


<div class="slide_home0">
	<!-- BOX COLONNE DE GAUCHE -->
	<div class="slide_home1">
		<!-- BOX PRÉSENTATION -->
		<div class="slide_home11">
			<h1 class="home"><span style="color:#14bad8;">You art here</span> propose <br />la création d'un site web professionnel en ligne, destiné aux Artistes <br />pour exister, partager <br />et diffuser sur le web.</h1>
			<br /><p class="home" style="border:0; padding:0 0 20px 0; margin:0 0 10px 0; border-bottom:1px solid #2d6786;">Ce service offre à l'artiste la possibilité de créer un <a href="/service/new" title=" you art here : créer un site web artistique ">mini-site gratuit</a> ou un <a href="#" title=" You Art Here : je crée mon site web artistique / Bientôt disponible ">site web professionnel payant</a> comprenant des pages standards (biographie, recherche artistique, news, contact) et surtout une galerie complète de vos travaux où vos oeuvres artistiques (images, photos, dessins, vidéos) sont mises en valeur.</p>
			<div class="vignette_bouton_forfaits" style="margin:0 0 0 -12px; padding:0;"><a href="/service/new" class="sprite bouton_create" title=" You art here : je crée mon site web artistique ">Créez votre site web</a></div>
			<div class="vignette_bouton_forfaits" style="margin:0; padding:0;"><a href="/service/upgrade" class="sprite bouton_medium" style="margin:0; padding:0;" title=" You art here : upgrader mon compte ">upgradez votre compte</a></div>
			<div class="vignette_bouton_forfaits" style="margin:0 0 0 0; padding:0;"><a href="/service/devis-site-bold" class="sprite bouton_bold" style="margin:0; padding:0;" title=" You art here : demande de devis personnalisé ">Demande de devis personnalisé</a></div>
		</div>
		<!-- FIN BOX PRÉSENTATION -->
		
		
		<?php
		/*
		<!-- BOX ACTUALITES -->
		<div class="slide_home12">
			<div style="padding:0; margin:0; width:100%;">
				<h2 style="text-align:left; color:#FFF; padding:0;">ACTUALITÉS</h2>
				<br />
				<div style="display:block; padding:0; margin:0;">
					<a href="/service/actualites" title=" ['News']['titre'] " title=" ['News']['titre'] "><img src="/timthumb.php?src=/img/actualites/actualite1.jpg&w=150&h=150&zc=1" width="150" height="150" align="left" style="padding:0; margin:0 10px 10px 0; border:0;" alt=" ['News']['titre'] " /></a><p>Rubrique : <span class="statut_site_light">Forfait LIGHT</span>
					<br /><br /><a href="/service/actualites" title=" ['News']['titre'] " style="text-transform:uppercase;">['News']['titre']</a><br />
					['News']['texte'] => split à 110 caracteres espaces compris => incorporer [...] à la fin
					<br /><br /><img src="/img/puce1.png" border="0" style="padding:0; margin:0;" /><a href="/service/actualites" title=" ['News']['titre'] " style="font-size:80%;">TOUTES LES ACTUALITÉS</a></p>
				</div>
			</div>
		</div>
		<!-- FIN BOX ACTUALITES -->
	*/
	?>
	</div>
	<!-- FIN BOX COLONNE DE GAUCHE -->
	
	<!-- BOX COLONNE DE DROITE -->
	<div class="slide_home2">
		<!-- BOX INSCRIPTION -->
		<div class="slide_home21">
			<div style="float:left; width:220px; padding:0; margin:0;">
				<h2 style="text-align:left; color:#1D1D1D; padding:0;">Pas encore inscrit ?, essayez, vous aimerez
				<br /><br /><p>gratuit et sans engagement, alors n'attendez plus pour ébaucher votre propre<br />site internet.</p>
				</h2>
			</div>
			<div style="margin:30px 10px 10px 10px; width:80px; height:80px; padding:20px; float:right;">
				<div class="vignette_bouton_home"><a href="/service/new" class="sprite bouton_create" title=" You art here : création d'un compte artiste ">création d'un compte artiste</a></div>
			</div>
		</div>
		<!-- FIN BOX INSCRIPTION -->
		
		<!-- BOX MYWBEBSITE EN VIDEO -->
		<div class="slide_home22">
			<div style="float:left; width:390px; height:292px; padding:0; margin:0;">
			<a href="/service/demo" title=" You art here : Vidéo de la plate-forme et de l'utilisation du CMS "><img src="/img/visuel-video1.png" alt=" You art here : Vidéo de la plate-forme et de l'utilisation du CMS " /></a>
			</div>
		</div>
		<!-- FIN BOX MYWBEBSITE EN VIDEO -->
		
		<!-- ANNUAIRE -->
		<div class="slide_home23" style="height:220px;">
			<h2 style="text-align:left; color:#FFF; padding:0;">Annuaire you art here</h2>
			<div style="padding:0; margin:0; overflow:auto; width:100%; height:13 o0px;">
				<ul style="border-bottom:1px solid #2d6786; padding:0 0 20px 0;">
					<?php 
					$var_count = 5;
					foreach ($this->viewVars['menu_artiste'] as $link):?> 
					
					<li style="display:block; padding:0; margin:0 0 5px 0;"><a href="<?php echo "/".$link['Site']['url']; ?>" target="_blank" style="text-transform:uppercase;" title=" <?php echo "".$link['Artiste']['blase']; ?> : voir le site web "><?php echo "".$link['Artiste']['blase']; ?></a> . <?php echo "".$link['Artiste']['category']; ?> . 
					<?php 
					switch($link['ArtisteCompte']['statut']) { 
					case "light" : echo '<span class="statut_site_light">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
					case "medium" : echo '<span class="statut_site_medium">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
					case "bold" : echo '<span class="statut_site_bold">' . $link['ArtisteCompte']['statut'] .'</span>'; break;
					default : break;
					} ?></li>
					<?php 
						$var_count--;
						if($var_count <= 0) break;
						endforeach;
					?> 
				</ul>
			</div>
			<br /><br />
			<div style="width:100%; margin:0 auto; padding:0; text-align:left; text-transform:uppercase;">
				<img src="/img/puce1.png" border="0" style="padding:0; margin:0;" /><a href="/service/annuaire" title=" You art here : annuaire des artistes ">Accédez à l'annuaire complet des artistes</a>
			</div>
		</div>
		<!-- FIN ANNUAIRE -->
	
	</div>
	<!-- FIN BOX COLONNES DE DROITE -->
	
	<br/>
	</div>
</div>
