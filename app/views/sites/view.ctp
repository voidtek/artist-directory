<?php
$metaImage = "";
		
if($page == "") {
	switch($item[0]['Site']['page_home']){
		case('1'): 	$page = $item[0]['PageBio']['meta_url']; break;
		case('2'): 	$page = $item[0]['PageWork']['meta_url']; break;
		case('3'): 	$page = $item[0]['PageContact']['meta_url']; break;
		case('4'): 	$page = $item[0]['PageEvenement']['meta_url']; break;
		case('5'): 	$page = $item[0]['PageGalerie']['meta_url']; break;
		default: $page = $item[0]['PageGalerie']['meta_url']; break;
	}
}

$cat_galery = false;
$cat_theme = false;
$page_css = "";

if($item[0]['PageBio']['meta_url'] == $page) {  $content_page = $item[0]['PageBio']; $page_css="bio"; }
else if($item[0]['PageWork']['meta_url'] == $page) {  $content_page = $item[0]['PageWork']; $page_css="work"; }
else if($item[0]['PageContact']['meta_url'] == $page) { $content_page = $item[0]['PageContact'];$page_css="contact"; }
else if($item[0]['PageEvenement']['meta_url'] == $page) { $content_page = $item[0]['PageEvenement']; $page_css="evenement"; }
else if($item[0]['PageGalerie']['meta_url'] == $page) { $content_page = $item[0]['PageGalerie']; $cat_galery = true;  $page_css="galerie"; }
else header('Location: /');

if($item[0]['PageGalerie']['meta_url'] != $page){ 
	if($page_css == "contact"){
		// if($content_page["title"] == "") header('Location: /'.$item[0]['PageGalerie']['meta_url']);
		 if($content_page["title"] == "") header('Location: /');
	}else{
		// if($content_page["title"] == "" || $content_page["body"] == "") header('Location: /'.$item[0]['PageGalerie']['meta_url']);
		if($content_page["title"] == "" || $content_page["body"] == "") header('Location: /');
	}
}
?>

<?php 

$cat_menu = "<ul>";
if($item[0]['PageBio']['title'] != "" && $item[0]['PageBio']['body'] != "") $cat_menu .= "<li><a href='/".$item[0]['PageBio']['meta_url']."' title=' ".$item[0]['Site']['title']." : ".$item[0]['PageBio']['title']." '>".$item[0]['PageBio']['title']."</a></li>";
if($item[0]['PageWork']['title'] != "" && $item[0]['PageWork']['body'] != "") $cat_menu .= "<li><a href='/".$item[0]['PageWork']['meta_url']."' title=' ".$item[0]['Site']['title']." : ".$item[0]['PageWork']['title']." '>".$item[0]['PageWork']['title']."</a></li>";
if($item[0]['Artiste'][0]['ArtisteCompte']['statut'] != 'light') {
	if($item[0]['PageContact']['title'] != "") $cat_menu .= "<li><a href='/".$item[0]['PageContact']['meta_url']."' title=' ".$item[0]['Site']['title']." : ".$item[0]['PageContact']['title']." '>".$item[0]['PageContact']['title']."</a></li>";
	if($item[0]['PageEvenement']['title'] != "" && $item[0]['PageEvenement']['body'] != "") $cat_menu .= "<li><a href='/".$item[0]['PageEvenement']['meta_url']."' title=' ".$item[0]['Site']['title']." : ".$item[0]['PageEvenement']['title']." '>".$item[0]['PageEvenement']['title']."</a></li>";
}
$cat_menu .= "<li><a href='/".$item[0]['PageGalerie']['meta_url']."' title=' ".$item[0]['Site']['title']." : ".$item[0]['PageGalerie']['title']." '>".$item[0]['PageGalerie']['title']."</a></li>";
$cat_menu .= "</ul>";

// récupération du gabarit et remplissage
$CONTENT_PAGE = "\n\r<!-- HEADER -->\n\r".$item[0]['Gabarit']['html_header']."\n\r<!-- // HEADER -->\n\r";
if (!$cat_galery) $CONTENT_PAGE .= "\n\r<!-- HTML PAGE STANDARD -->".$item[0]['Gabarit']['html_page']."\n\r<!-- // HTML PAGE STANDARD -->\n\r";
else {
	if ($soussouspage == "") $CONTENT_PAGE .= "<!-- HTML PAGE GALERIE -->".$item[0]['Gabarit']['html_page_galerie']."\n\r<!-- // HTML PAGE GALERIE -->\n\r";
	else $CONTENT_PAGE .= "\n\r<!-- HTML PAGE MEDIAS -->".$item[0]['Gabarit']['html_page_media']."\n\r<!-- //HTML PAGE MEDIAS -->\n\r";
}
$CONTENT_PAGE .= "\n\r<!-- FOOTER -->\n\r".$item[0]['Gabarit']['html_footer']."\n\r<!-- // FOOTER -->\n\r";
$CONTENT_GALERIE = "\n\r<!-- GALERIE -->\n\r".$item[0]['Gabarit']['html_galerie']."\n\r<!-- // GALERIE -->\n\r";
$CONTENT_THEMES = "\n\r<!-- THEME -->\n\r".$item[0]['Gabarit']['html_theme']."\n\r<!-- THEME -->\n\r";

$cat_str = '<div style="display:inline; margin-top:1px; float: left; margin-left: 0px;"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Partagez</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>';
$cat_str .= '<div style="display:inline; margin-top:1px; float: left; margin-left: 10px;"><a href="http://twitter.com/share?url='.urlencode('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']).'&amp;via=youarthere&amp;text=&amp;lang=fr&amp;count=horizontal" class="twitter-share-button">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
$cat_str .= '<div style="display:inline; margin-top:1px; float: left; margin-left: 0px;"><g:plusone size="medium"></g:plusone></div>';
$CONTENT_PAGE = str_replace(array("%LIKE_FACEBOOK%"), $cat_str,$CONTENT_PAGE );

$cat_content_text = $content_page['body'];


$cat_content_img = $content_page['img'];

$cat_form_sociaux = "";
// Rajout des boutons sociaux
$cat_form_sociaux .= " <div class='partager'><ul>"; 
$cat_form_sociaux .= " <li class='profilyah' title=' ".$item[0]['Artiste'][0]['blase']." sur You-Art-Here ' onClick='window.open(\"http://you-art-here.com/people/".$item[0]['Artiste'][0]['url']."\")'><a href='http://you-art-here.com/people/".$item[0]['Artiste'][0]['url']."' title=' ".$item[0]['Artiste'][0]['blase']." sur You-Art-Here ' onclick='window.open(this.href); return false;'></a></li> ";
if(($item[0]['Artiste'][0]['social_facebook'] != "") || ($item[0]['Artiste'][0]['social_twitter'] != "") || ($item[0]['Artiste'][0]['social_flickr'] != "") || ($item[0]['Artiste'][0]['social_myspace'] != "") || ($item[0]['Artiste'][0]['social_soundcloud'] != "") || ($item[0]['Artiste'][0]['social_vimeo'] != "")){
	if( $item[0]['Artiste'][0]['social_facebook'] != "") $cat_form_sociaux .= " <li class='facebook' title=' ".$item[0]['Artiste'][0]['blase']." sur Facebook ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_facebook']."\")'><a href='".$item[0]['Artiste'][0]['social_facebook']."' title=' ".$item[0]['Artiste'][0]['blase']." sur Facebook ' onclick='window.open(this.href); return false;'></a></li> ";
	if( $item[0]['Artiste'][0]['social_twitter'] != "") $cat_form_sociaux .= " <li class='twitter' title=' ".$item[0]['Artiste'][0]['blase']." sur Twitter ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_twitter']."\")'><a href='".$item[0]['Artiste'][0]['social_twitter']."' title=' ".$item[0]['Artiste'][0]['blase']." sur Twitter ' onclick='window.open(this.href); return false;'></a></li> ";
	if( $item[0]['Artiste'][0]['social_flickr'] != "") $cat_form_sociaux .= " <li class='flickr' title=' ".$item[0]['Artiste'][0]['blase']." sur flickr ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_flickr']."\")'><a href='".$item[0]['Artiste'][0]['social_flickr']."' title=' ".$item[0]['Artiste'][0]['blase']."  sur flickr ' onclick='window.open(this.href); return false;'></a></li> ";
	if( $item[0]['Artiste'][0]['social_myspace'] != "") $cat_form_sociaux .= " <li class='myspace' title=' ".$item[0]['Artiste'][0]['blase']." sur myspace ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_myspace']."\")'><a href='".$item[0]['Artiste'][0]['social_myspace']."' title=' ".$item[0]['Artiste'][0]['blase']."  sur myspace ' onclick='window.open(this.href); return false;'></a></li>"; 
	if( $item[0]['Artiste'][0]['social_soundcloud'] != "") $cat_form_sociaux .= " <li class='soundcloud' title=' ".$item[0]['Artiste'][0]['blase']." sur soundcloud ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_soundcloud']."\")'><a href='".$item[0]['Artiste'][0]['social_soundcloud']."' title=' ".$item[0]['Artiste'][0]['blase']."  sur soundcloud ' onclick='window.open(this.href); return false;'></a></li>"; 
	if( $item[0]['Artiste'][0]['social_vimeo'] != "") $cat_form_sociaux .= " <li class='vimeo' title=' ".$item[0]['Artiste'][0]['blase']." sur Vimeo ' onClick='window.open(\"".$item[0]['Artiste'][0]['social_vimeo']."\")'><a href='".$item[0]['Artiste'][0]['social_vimeo']."' title=' ".$item[0]['Artiste'][0]['blase']."  sur Vimeo ' onclick='window.open(this.href); return false;'></a></li>"; 
	$cat_form_sociaux .= " </ul> </div>";
}

$cat_html_galery = $cat_html_galery_16 = $cat_html_galery_12 = $cat_html_galery_9 = $cat_html_galery_8 = $cat_html_galery_6 = $cat_html_galery_4 = $cat_html_galery_3 = $cat_html_galery_2 = $cat_html_galery_1 = ""; 
$cat_html_theme = $cat_html_theme_16 = $cat_html_theme_12 = $cat_html_theme_9 = $cat_html_theme_8 = $cat_html_theme_6 = $cat_html_theme_4 = $cat_html_theme_3 = $cat_html_theme_2 = $cat_html_theme_1 = ""; 
$cat_title_theme = "";
$cat_title_img = "";
$cat_title = "";
$cat_content_media = "";

if($cat_galery){
	if($souspage == ""){
		$cat_html_theme = "<div id='content_themes'>";
		foreach ($item_galery as $value) {
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
		    // $cat_html_theme .= "<div class='display:block; float:left;'><a href='./$page/theme/' title='TEXTE THEME'>".$cat_media_html."</a></div>";
			// $cat_html_theme .= "<a href='./$page/theme/' title='TEXTE THEME'>".$cat_media_html."</a>";
			$cat_html_theme .= $cat_media_html;

		}
		$cat_html_theme .= "</div>";
		
		$cat_html_theme_16 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_16 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_16 .= $cat_media_html;
	    if ( $cat_num == 15) $cat_html_theme_16 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 16) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_16 .= "</div>";
		
		$cat_html_theme_12 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_12 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_12 .= $cat_media_html;
	    if ( $cat_num == 11) $cat_html_theme_12 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 12) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_12 .= "</div>";
		
		$cat_html_theme_9 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_9 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_9 .= $cat_media_html;
	    if ( $cat_num == 8) $cat_html_theme_9 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 9) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_9 .= "</div>";
		
		$cat_html_theme_8 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_8 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_8 .= $cat_media_html;
	    if ( $cat_num == 7) $cat_html_theme_8 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 8) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_8 .= "</div>";
		
		$cat_html_theme_6 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_6 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_6 .= $cat_media_html;
	    if ( $cat_num == 5) $cat_html_theme_6 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 6) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_6 .= "</div>";
		
		$cat_html_theme_4 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_4 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_4 .= $cat_media_html;
	    if ( $cat_num == 3) $cat_html_theme_4 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 4) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_4 .= "</div>";
		
		$cat_html_theme_3 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			if ( $cat_num == 0) $cat_html_theme_3 .= "<div>";
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
	    $cat_html_theme_3 .= $cat_media_html;
	    if ( $cat_num == 2) $cat_html_theme_3 .= "</div>";
	    $cat_num++;
	    if ( $cat_num == 3) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_3 .= "</div>";
		
		$cat_html_theme_2 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"),htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
		    
			if ( $cat_num == 0) $cat_html_theme_2 .= "<div>";
		    $cat_html_theme_2 .= $cat_media_html;
		    if ( $cat_num == 1) $cat_html_theme_2 .= "</div>";
		    $cat_num++;
		    if ( $cat_num == 2) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_2 .= "</div>";

		$cat_html_theme_1 = "";
		$cat_num = 0;
		foreach ($item_galery as $value) {
			$cat_media_html = $CONTENT_THEMES;
			$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['Theme']['img'], $cat_media_html);
	    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['Theme']['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
	    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['Theme']['description'], $cat_media_html);
	    $cat_media_html = str_replace(array("%URL_LIEN%"), "/$page/".$value['Theme']['url'], $cat_media_html);
		    
			if ( $cat_num == 0) $cat_html_theme_1 .= "<div>";
		    $cat_html_theme_1 .= $cat_media_html;
		    if ( $cat_num == 0) $cat_html_theme_1 .= "</div>";
		    $cat_num++;
		    if ( $cat_num == 1) $cat_num = 0; 
		}
		if($cat_num != 0) $cat_html_theme_1 .= "</div>";

	} else { 
		
		if($soussouspage == ""){
			$cat_theme_in = "";
			$cat_theme_num = 0;
			foreach ($item_galery as $value) {
				// debug ($item_galery[Theme][url]);
				if($souspage == $value['Theme']['url']) $cat_theme_in = $cat_theme_num;
				$cat_theme_num++;
			}
		
			$item_media = $item_galery[$cat_theme_in]['Media'];
			$cat_title_theme = $item_galery[$cat_theme_in]['Theme']['titre'];
			$cat_content_img = $item_galery[$cat_theme_in]['Theme']['img'];
			$cat_html_galery = "<div id='content_galerie'>";
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $js_media = " rel='example_group' ";
		    if(strpos($value['media'], "youtube.com")> 0)
		    	$js_media = "  rel='video'  ";
		    if(strpos($value['media'], "vimeo.com")> 0)
		    	$js_media = "  rel='video'  ";
		    if(strpos($value['media'], "soundcloud.com")> 0)
		    	$js_media = "  rel='son'  ";
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), $js_media, $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
		    $cat_html_galery .= $cat_media_html;
			}
			$cat_html_galery .= "</div>";
			
			$cat_html_galery_16 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_16 .= "<div>";
				$cat_html_galery_16 .= $cat_media_html;
			    if ( $cat_num == 15) $cat_html_galery_16 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 16) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_16 .= "</div>";
			
			$cat_html_galery_12 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_12 .= "<div>";
				$cat_html_galery_12 .= $cat_media_html;
			    if ( $cat_num == 11) $cat_html_galery_12 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 12) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_12 .= "</div>";
			
			$cat_html_galery_9 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_9 .= "<div>";
				$cat_html_galery_9 .= $cat_media_html;
			    if ( $cat_num == 8) $cat_html_galery_9 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 9) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_9 .= "</div>";
			
			$cat_html_galery_8 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_8 .= "<div>";
				$cat_html_galery_8 .= $cat_media_html;
			    if ( $cat_num == 7) $cat_html_galery_8 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 8) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_8 .= "</div>";
			
			$cat_html_galery_6 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_6 .= "<div>";
				$cat_html_galery_6 .= $cat_media_html;
			    if ( $cat_num == 5) $cat_html_galery_6 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 6) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_6 .= "</div>";

			$cat_html_galery_4 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_4 .= "<div>";
				$cat_html_galery_4 .= $cat_media_html;
			    if ( $cat_num == 3) $cat_html_galery_4 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 4) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_4 .= "</div>";
			
			$cat_html_galery_3 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_3 .= "<div>";
				$cat_html_galery_3 .= $cat_media_html;
			    if ( $cat_num == 2) $cat_html_galery_3 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 3) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_3 .= "</div>";
			
			$cat_html_galery_2 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_2 .= "<div>";
				$cat_html_galery_2 .= $cat_media_html;
			    if ( $cat_num == 1) $cat_html_galery_2 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 2) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_2 .= "</div>";
			
			$cat_html_galery_1 = "";
			$cat_num = 0;
			$i = 0;
			foreach ($item_media as $value) {
				$cat_media_html = $CONTENT_GALERIE;
				$cat_media_html = str_replace(array("%URL_MEDIA%"), $value['img'], $cat_media_html);
		    $cat_media_html = str_replace(array("%TITRE_MEDIA%"), htmlentities($value['titre'], ENT_QUOTES, "UTF-8"), $cat_media_html);
		    $cat_media_html = str_replace(array("%TEXT_MEDIA%"), $value['description'], $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_MEDIA_FULL%"), $value['media'], $cat_media_html);
		    $cat_media_html = str_replace(array("%JS_MEDIA%"), " rel='example_group' ", $cat_media_html);
		    $cat_media_html = str_replace(array("%URL_LIEN%"),  "/$page/".$item_galery[$cat_theme_in]['Theme']['url']."/".$value['url'], $cat_media_html);
			    
				if ( $cat_num == 0) $cat_html_galery_1 .= "<div>";
				$cat_html_galery_1 .= $cat_media_html;
			    if ( $cat_num == 0) $cat_html_galery_1 .= "</div>";
			    $cat_num++;
			    $i++;
			    if ( $cat_num == 1) $cat_num = 0; 
			}
			if($cat_num != 0) $cat_html_galery_1 .= "</div>";
			
			
			$cat_content_text = $item_galery[$cat_theme_in]['Theme']['description'];
		} else {
			
			$cat_theme_in = "";
			$cat_theme_num = 0;
			foreach ($item_galery as $value) {
				if($souspage == $value['Theme']['url']) $cat_theme_in = $cat_theme_num;
				$cat_theme_num++;
			}
			
			$cat_title_theme = $item_galery[$cat_theme_in]['Theme']['titre'];
			$item_media = $item_galery[$cat_theme_in]['Media'];
			$cat_merdia_in = "";
			$cat_media_num = 0;
			foreach ($item_media as $value) {
				if($soussouspage == $value['url']) $cat_media_in = $value;
				$cat_media_num++;
			}
			
			$cat_title = $cat_media_in['titre'];
			$cat_content_text = $cat_media_in['description'];
			$cat_title_img  = $cat_media_in['titre'];
			$cat_content_img = $cat_media_in['img'];
			$cat_content_media = $cat_media_in['media'];
			
			// if(strpos($cat_content_media,".flv")) $cat_css_flv_media = "";
			// else $cat_css_img_media = "";
		}
	}
} 

$cat_content_text_65 = "";
$array_content_text = explode ( " " , $cat_content_text );
$count = count($array_content_text);
$cat_num = 0;
$cat_decoup = 100;
for ($i = 0; $i < $count; $i++) {
	if($cat_num == 0) $cat_content_text_65 .= "<div>";
    $cat_content_text_65 .= $array_content_text[$i] . " ";
    if ( $cat_num == $cat_decoup-1) $cat_content_text_65 .= "</div>";
    	$cat_num++;
    if ( $cat_num == $cat_decoup) $cat_num = 0; 
}
if($cat_num != 0) $cat_content_text_65 .= "</div>";


// Rajout du form de contact

if($item[0]['PageContact']['meta_url'] == $page) {
	$cat_form_contact = "<div id='content_contact' class='texte'>
		<form name='contact' id='contact' action='' method='POST'> 
			<div><input type='hidden' name='id_formulaire' value='contact' /></div>
			<div class='nom'>Nom <input type='text' name='nom' class='required' /></div>
			<div class='mail'>Mail <input type='text' name='mail' class='required email'  /></div> 
			<div class='message'>Message <textarea name='message' name='message' class='required'></textarea></div>
			<div class='submit'><input type='submit' id='submit' value='Envoyer' /></div>
		</form> 
		<script type=\"text/javascript\">
			$(\"#contact\").validate();
		</script> 
	</div>";
} else {
	$cat_form_contact = "";
}

if($item[0]['PageContact']['meta_url'] == $page) { $cat_content_text .= $cat_form_contact; $cat_content_text_65 .= $cat_form_contact;} 


$TITLE_PAGE = "<a href='/$page' title=' ".$item[0]['Site']['title']." : ".$content_page['title']." '>".$content_page['title']."</a>";
if($cat_title_theme != "") $TITLE_PAGE .= " <a href='/$page/$souspage' title=' ".$item[0]['Site']['title']." : ".$content_page['title']." | $cat_title_theme '><span class='chemin'>".$cat_title_theme."</span></a>";

$cat_TITRE_MEDIA = "";
if($cat_title_theme != "") {
	if($cat_title_img != "") {
		$cat_TITRE_MEDIA = $cat_title_img;
		$cat_title_img = $item[0]['Site']['title']." : ".$content_page['title'] . " | " .$cat_title_theme ." | ". $cat_title_img;
	} else 
		$cat_title_img = $item[0]['Site']['title']." : ".$content_page['title'] . " | " .$cat_title_theme;
} else 
	$cat_title_img = $item[0]['Site']['title']." : ".$content_page['title'];

if($item[0]['Site']['logo'] != "")
	$cat_logo = "<a href=\"http://".$item[0]['Site']['url'].".you-art-here.com\" title=\" ".$item[0]['Site']['title']." : ".$item[0]['Site']['slogan']." \"><img src=\"http://media.you-art-here.com/timthumb.php?w=600&amp;h=600&amp;src=".$item[0]['Site']['logo']."&amp;f=".substr(strrchr($item[0]['Site']['logo'], '.'), 1 )."\" alt=\" ".$item[0]['Site']['title']."\" class='logo' /></a>";
else 
	$cat_logo = "<a href=\"http://".$item[0]['Site']['url'].".you-art-here.com\" title=\" ".$item[0]['Site']['title']." : ".$item[0]['Site']['slogan']." \">".$item[0]['Site']['title']."</a>";

$CONTENT_PAGE = str_replace(array("%LOGO_PAGE%"), $cat_logo , $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%SIGNATURE_PAGE%"), $item[0]['Site']['slogan'], $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%TITLE_PAGE%"), $TITLE_PAGE, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_PAGE%"), $cat_content_text, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_PAGE_65%"), $cat_content_text_65, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%IMG_PAGE%"), $cat_content_img, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%URL_MEDIA%"), $cat_content_media, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%TITRE_MEDIA%"), $cat_TITRE_MEDIA, $CONTENT_PAGE);

// $CONTENT_PAGE = str_replace(array("%CSS_MEDIA_VIDEO%"), $cat_css_flv_media, $CONTENT_PAGE);
// $CONTENT_PAGE = str_replace(array("%CSS_MEDIA_IMG%"), $cat_css_img_media, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%IMG_ALT_PAGE%"), $cat_title_img, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE%"), $cat_html_galery, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_16%"), $cat_html_galery_16, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_12%"), $cat_html_galery_12, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_9%"), $cat_html_galery_9, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_8%"), $cat_html_galery_8, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_6%"), $cat_html_galery_6, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_4%"), $cat_html_galery_4, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_3%"), $cat_html_galery_3, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_2%"), $cat_html_galery_2, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_GALERIE_1%"), $cat_html_galery_1, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES%"), $cat_html_theme, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_16%"), $cat_html_theme_16, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_12%"), $cat_html_theme_12, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_9%"), $cat_html_theme_9, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_8%"), $cat_html_theme_8, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_6%"), $cat_html_theme_6, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_4%"), $cat_html_theme_4, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_3%"), $cat_html_theme_3, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_2%"), $cat_html_theme_2, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%CONTENT_THEMES_1%"), $cat_html_theme_1, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%MENU_SOCIAUX%"), $cat_form_sociaux, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%SLOGAN_PAGE%"), $cat_form_sociaux, $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%MENU_PAGE%"), $cat_menu, $CONTENT_PAGE);


// FAKE
$CONTENT_PAGE = str_replace(array("%ADMIN_PAGE%"), "", $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%BT_PAGINATION_PREV%"), '<a href="#"><div class="pagination_prev">prev</div></a>', $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%PAGINATION_NUMBER%"), '<div class="pagination_number"><ul><li><a href="#">1</a></li><li><a href="#">2</a></li></ul></div>', $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%PAGINATION_RATIO%"),'<div class="pagination_ratio">1 / 2</div>', $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("%BT_PAGINATION_NEXT%"), '<a href="#"><div class="pagination_next">next</div></a>', $CONTENT_PAGE);


if ($content_page['body'] == "") $CONTENT_PAGE = str_replace(array("id=\"content_text\""), "id=\"content_text\" style=\"display:none;visible:hidden;\"", $CONTENT_PAGE);
if ($cat_html_galery == "") $CONTENT_PAGE = str_replace(array("id=\"content_medias\""), "id=\"content_medias\" style=\"display:none;visible:hidden;\"", $CONTENT_PAGE);
if ($cat_html_theme == "") $CONTENT_PAGE = str_replace(array("id=\"content_themes\""), "id=\"content_themes\" style=\"display:none;visible:hidden;\"", $CONTENT_PAGE);
if ($cat_html_theme == "") $CONTENT_PAGE = str_replace(array("id=\"carrousel-vignettes\""), "id=\"carrousel-vignettes\" style=\"display:none;visible:hidden;\"", $CONTENT_PAGE);
if (true) $CONTENT_PAGE = str_replace(array("id=\"logo\""), "id=\"logo\" style=\"display:none;visible:hidden;\"", $CONTENT_PAGE);

$CONTENT_PAGE = str_replace(array("id=\"content_text\""), "id=\"content_text\" class=\"content_text_".$page_css."\"", $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("id=\"content_medias\""), "id=\"content_medias\" class=\"content_medias_".$page_css."\"", $CONTENT_PAGE);
$CONTENT_PAGE = str_replace(array("id=\"content_themes\""), "id=\"content_themes\" class=\"content_themes_".$page_css."\"", $CONTENT_PAGE);

if($cat_galery){
	
}

if(($item[0]['Site']['authorized'] == 1) AND ($authorized == 0)){
	$_message_site = '	<div id="overlay_majeur" class="overlay_majeur" style="display: block;">';
	$_message_site .= '	<div class="modal" style="width: 500px; margin-top: 100px; margin-right: auto; margin-bottom: 100px; margin-left: auto; display: block; ">';
	$_message_site .= '    	<div class="modal-head">';
	$_message_site .= '       <h1>AVERTISSEMENT</h1>';
	$_message_site .= '     </div>';
	$_message_site .= '     <div class="body"><div class="is_adult-warning">';
	$_message_site .= '	Ce site internet présente des images, photos ou vidéos qui peuvent choquer un public jeune mais qui n\'en demeure pas moins de l\'art. Il est donc réservé de ce fait à un public majeur et averti et est conforme à toutes les réglementations françaises en vigueur.';
	$_message_site .= '    <br><br>';
	$_message_site .= '    <div class="question">Au vu des informations dictées ci-dessus, que voulez-vous faire ?</div>';
	$_message_site .= '</div>';
	$_message_site .= '';
	$_message_site .= '<div class="is_adult-answer">';
	$_message_site .= '    <a href="?a" class="adult_yes"><strong>ENTRER <span class="fleche-modal">→</span></strong></a>';
	$_message_site .= '			<a href="http://you-art-here.com/" class="adult_no"><strong>SORTIR <span class="fleche-modal">→</span></strong></a>';
	$_message_site .= '    <br class="clr">';
	$_message_site .= '</div></div>';
	$_message_site .= '    		<center><br /><img src="http://media.you-art-here.com/img/website/logo-youarthere-sitemajeur.png" title="YOU-ART-HERE" alt="YOU-ART-HERE"></center><br />';
	$_message_site .= '</div>';
	$_message_site .= '</div>';
	$_message_site .= '';
$CONTENT_PAGE .= $_message_site;
}

// Affichage de la page
echo $CONTENT_PAGE;


?>
