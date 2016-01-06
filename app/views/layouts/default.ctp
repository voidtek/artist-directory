<?php
header('Content-type: text/html');
header("Cache-Control: no-cache, must-revalidate");
header("Vary: Accept-Encoding");

if( isset($user_connecte['Artiste']) && isset($user_connecte['Artiste']['url'])) $_visitor = $user_connecte['Artiste']['url'];
else $_visitor = "anonymous";

$reqfilename = md5($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$cachefile = "/home/www/media.you-art-here.com/cache/files/site-".$_visitor."-".$reqfilename;
$cachetime = 0 * 60; // 5 minutes
if($is_admin) $cachetime = 0.6 * 60; // 5 minutes
$message_flash = $session->read('Message.flash');
if($message_flash != "") $cachetime = 0;

if (file_exists($cachefile) && ((time() - $cachetime < filemtime($cachefile)))) { 
 include($cachefile);
 echo "<!-- Cached ".date('jS F Y H:i', filemtime($cachefile))."-->";
 exit;
}

ob_start("ob_gzhandler");

$message_ecran = "";
if($_POST){
	if($_POST['id_formulaire'] == "contact"){

		$headers ='From: "MWS - Contact "<contact@you-art-here.com>'."\n"; 
		$headers .='Content-Type: text/html; charset="utf8"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit'; 
		
		$message ='<html><head><title>'.$item[0]['Site']['title'].' - PRISE DE CONTACT</title></head><body>';
		$message .= 'NOM : '.$_POST['nom'].'<BR>';
		$message .= 'MAIL : '.$_POST['mail'].'<BR>';
		$message .= 'Message : '.$_POST['message'].'<BR>';
		$message .= 'IP : '.$_SERVER["REMOTE_ADDR"].'<BR>';
		$message .= '</body></html>'; 
		
		mail('contact@you-art-here.com', $item[0]['Site']['title'].' - CONTACT', $message, $headers);
		$message_ecran = "Merci de votre prise de contact. A très bientôt.";
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
	<head>	 
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title><?php echo $metaTitle; ?></title>
		<?php echo ($html->meta('description', $metaDescription)."\n"); ?>
		<?php // echo ($html->meta('keywords', $metaKeywords)."\n"); ?>
		<meta name="copyright" content="© 2010 You Art Here">
		<meta name="author" content="YOU-ART-HERE">
		<?php if(!$metaIndex) echo'<meta name="robots" content="NOINDEX, NOFOLLOW">'; ?>
		<meta http-equiv="content-language" content="fr">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta property="og:title" content="<?php echo $metaTitle; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo ("http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]); ?>">
		<meta property="og:image" content="<?php echo ($metaImage); ?>">
		<meta property="og:site_name" content="You-Art-Here">
		<meta property="fb:admins" content="you.art.here">
		<meta property="og:description" content="<?php echo ($metaDescription); ?>">
		
		<link href="http://media.you-art-here.com/favicon.ico" type="image/x-icon" rel="icon"><link href="http://media.you-art-here.com/favicon.ico" type="image/x-icon" rel="shortcut icon"> 
		
		<!-- Stylesheet --> 
		<?php // echo $html->css('/css'); ?>
		<link type="text/css" href="/css" media="screen" rel="stylesheet">
		<link href="http://media.you-art-here.com/css/commun/jquery.notice.css" type="text/css" media="screen" rel="stylesheet"> 
		<link href="http://media.you-art-here.com/css/website/jquery.fancybox-1.3.4.css" type="text/css" media="screen" rel="stylesheet"> 
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.3/jquery.tools.min.js"></script>
		<script type="text/javascript" src="http://media.you-art-here.com/js/jquery.notice.js"></script> 
		<script type="text/javascript" src="http://media.you-art-here.com/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
		<script type="text/javascript" src="http://media.you-art-here.com/js/jquery.validate.pack.js"></script> 
		<script type="text/javascript" src="http://media.you-art-here.com/js/jquery.carousel.min.js"></script>
		<script type="text/javascript" src="http://media.you-art-here.com/js/swfobject/swfobject.js"></script> 
		
		<script type="text/javascript" src="http://media.you-art-here.com/js/cufon-yui.js"></script>
		<script src="http://media.you-art-here.com/js/font/Helvetica-Condensed_700.font.js" type="text/javascript"></script>
		<script type="text/javascript">
		  // Cufon.replace('h1');
		  // Cufon.replace('h2');
		</script>
		  
		<script type="text/javascript">
			jQuery(document).ready(function() {
			
				$("a[rel=example_group]").fancybox({
					'transitionIn'		: 'fade',
					'transitionOut'		: 'fade',
					'titlePosition' 	: 'inside',
					'cyclic' : 'true',
					'centerOnScroll' : 'true',
					'titleFormat'    : function(title, currentArray, currentIndex, currentOpts) {
					  return "<span id='fancybox-title-over'>"+ title + "</span>";
					},
				  onComplete	:	function() {
			     // alert(this);
		      // history.pushState({ path: this.path }, '', url_media);
					}
				});
				
				$("a[rel=video]").fancybox({
					'transitionIn'		: 'fade',
					'transitionOut'		: 'fade',
					'titlePosition' 	: 'inside',
					'cyclic' : 'true',
					'centerOnScroll' : 'true',
					'titleFormat'    : function(title, currentArray, currentIndex, currentOpts) {
						return "<span id='fancybox-title-over'>"+ title + "</span>";
					},
	    'autoScale'   	: true,
					'type'				: 'iframe'
				});
				
				$("a[rel=son]").fancybox({
					'transitionIn'		: 'fade',
					'transitionOut'		: 'fade',
					'titlePosition' 	: 'inside',
					'width'			: 680,
					'height'		: 80,
					'cyclic' : 'true',
					'centerOnScroll' : 'true',
					'titleFormat'    : function(title, currentArray, currentIndex, currentOpts) {
					  return "<span id='fancybox-title-over'>"+ title + "</span>";
					},
	    'autoScale'   	: true,
					'type'				: 'iframe'
				});
				
			});
			function refresh_css(css_a_charger){$(function(){$("head").append($(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:css_a_charger}));	});}
			function refresh_all(page_a_charger){ window.location.href=page_a_charger;}

		</script>
		
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
		 {lang: 'fr'}
		</script>
		
		<?php echo($item[0]['Gabarit']['html_head']);?>
		
	</head>
	<body>
	
		<?php 
		$content_for_layout = str_replace(array(" />"), ">" , $content_for_layout);
		$content_for_layout = str_replace(array("/>"), ">" , $content_for_layout);
		$content_for_layout = str_replace(array("  "), " " , $content_for_layout);
		$content_for_layout = str_replace(array('target="_self"'), "" , $content_for_layout);
		$content_for_layout = str_replace(array("target='_self'"), "" , $content_for_layout);
		$content_for_layout = str_replace(array('target="_blank"'), 'onclick="window.open(this.href); return false;"' , $content_for_layout);
		$content_for_layout = str_replace(array("target='_blank'"), "onclick='window.open(this.href); return false;'" , $content_for_layout);
		echo $content_for_layout;
		?>
		
	<script type="text/javascript"> 
	
		$(document).ready(function(){ 
				cat_str = '<?php echo $session->flash(); ?>'; 
				if(cat_str != ""){
					// alert(<?php echo $session->flash(); ?>);
					jQuery.noticeAdd({ text: cat_str,stay: false });
				} 
				
				cat_str = '<?php echo $message_ecran; ?>'; 
				if(cat_str != ""){
					// alert("<?php echo $message_ecran; ?>");
					jQuery.noticeAdd({ text: cat_str,stay: false });
				} 
			} 
		);
		Cufon.now(); 
	</script>
	<script type="text/javascript">
		 var _gaq = _gaq || [];
		 _gaq.push(['_setAccount', 'UA-3198291-25']);
		 _gaq.push(['_trackPageview']);

		 (function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		 })();
	</script>
	</body>
</html>
<?php 
if (!($message_flash != "")) {
	$fp = fopen($cachefile, 'w'); 
	fwrite($fp, ob_get_contents());
	fclose($fp);
}
ob_end_flush(); 
?>
