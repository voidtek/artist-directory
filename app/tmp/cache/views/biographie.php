<!--cachetime:1292282435--><?php
			App::import('Controller', 'Sites');
			$controller =& new SitesController();
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize('a:5:{i:0;s:4:"Html";i:1;s:4:"Form";i:2;s:3:"Xml";i:3;s:10:"Javascript";i:4;s:5:"Cache";}');
				$controller->base = $this->base = '';
				$controller->layout = $this->layout = 'default';
				$controller->webroot = $this->webroot = '/';
				$controller->here = $this->here = '/biographie';
				$controller->namedArgs  = $this->namedArgs  = '';
				$controller->argSeparator = $this->argSeparator = '';
				$controller->params = $this->params = unserialize(stripslashes('a:11:{s:4:\"pass\";a:1:{i:0;s:10:\"biographie\";}s:5:\"named\";a:0:{}s:8:\"str_page\";s:10:\"biographie\";s:12:\"str_souspage\";N;s:16:\"str_soussouspage\";N;s:6:\"plugin\";N;s:10:\"controller\";s:5:\"sites\";s:6:\"action\";s:4:\"view\";s:3:\"url\";a:2:{s:3:\"ext\";s:4:\"html\";s:3:\"url\";s:10:\"biographie\";}s:4:\"form\";a:0:{}s:6:\"models\";a:9:{i:0;s:4:\"Site\";i:1;s:4:\"User\";i:2;s:7:\"Content\";i:3;s:4:\"Link\";i:4;s:7:\"Artiste\";i:5;s:16:\"ArtisteCategorie\";i:6;s:6:\"Galery\";i:7;s:5:\"Theme\";i:8;s:5:\"Media\";}}'));
				$controller->action = $this->action = unserialize('s:4:"view";');
				$controller->data = $this->data = unserialize(stripslashes('N;'));
				$controller->themeWeb = $this->themeWeb = '';
				Router::setRequestInfo(array($this->params, array('base' => $this->base, 'webroot' => $this->webroot)));
				$loadedHelpers = array();
				$loadedHelpers = $this->_loadHelpers($loadedHelpers, $this->helpers);
				foreach (array_keys($loadedHelpers) as $helper) {
					$camelBackedHelper = Inflector::variable($helper);
					${$camelBackedHelper} =& $loadedHelpers[$helper];
					$this->loaded[$camelBackedHelper] =& ${$camelBackedHelper};
				}
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>	 
		<title>bayan_left | BAYAN LEFT</title>
						<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta name="copyright" content="© 2010 You Art Here" />
		<meta name="author" content="YOU-ART-HERE" />
		<meta http-equiv="content-language" content="fr" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="expires" content="0" />
		<link href="http://media.you-art-here.com/favicon.ico" type="image/x-icon" rel="icon" /><link href="http://media.you-art-here.com/favicon.ico" type="image/x-icon" rel="shortcut icon" /> 
		
		<!-- Stylesheet -->  
				<link type="text/css" href="/css" media="screen" rel="stylesheet" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="http://media.you-art-here.com/js/jquery.notice.js"></script> 
		<link href="http://media.you-art-here.com/css/commun/jquery.notice.css" type="text/css" media="screen" rel="stylesheet" /> 
		
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
			function refresh_css(css_a_charger){$(function(){$("head").append($(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:css_a_charger}));	});}
			function refresh_all(page_a_charger){ window.location.href=page_a_charger;}
		</script>
		
				
	</head>
	<body>
	
		

<!-- HEADER -->
<div id="container"> 
	<div id="content">
		<div id="content-header">
		<!-- LOGO -->
		<h1><a href="http://bayan_left.you-art-here.com" title=" BAYAN LEFT : La simplicité sans limite... ">BAYAN LEFT</a></h1>
		<!-- // LOGO -->
		<h3>La simplicité sans limite...</h3>
</div>
<!-- MENU DE NAVIGATION --> 
		<div id="menu"><ul><li><a href=/biographie target='_self' title=' BAYAN LEFT : Biographie '>Biographie</a></li><li><a href=/work target='_self' title=' BAYAN LEFT : Work '>Work</a></li><li><a href=/galerie target='_self' title=' BAYAN LEFT : Galerie '>Galerie</a></li></ul></div>
		<!-- // MENU DE NAVIGATION --> 
		<!-- SOCIAL -->
		<div id="content-center">
 <div class='partager'><ul> 
						<li class='facebook' title=' BAYAN LEFT : Devenez Fan sur Facebook '><a href='#' title=' BAYAN LEFT :Devenez Fan sur Facebook ' target='_blank'></a></li> 
						<li class='twitter' title=' BAYAN LEFT : Suivez-moi sur Twitter '><a href='#' title=' BAYAN LEFT : Suivez-moi sur Twitter ' target='_blank'></a></li> 
						<li class='flickr' title=' BAYAN LEFT : Regardez sur flickr '><a href='#' title=' BAYAN LEFT : Regardez sur flickr ' target='_blank'></a></li> 
						<li class='myspace' title=' BAYAN LEFT : Regardez sur myspace '><a href='#' title=' BAYAN LEFT : Regardez sur myspace ' target='_blank'></a></li> 
					</ul> </div>
		<!-- // SOCIAL -->
<!-- // HEADER -->

<!-- HTML PAGE STANDARD --><h2><a href='/biographie' title=' BAYAN LEFT : Biographie '>Biographie</a></h2>
<p>Aliquam a ligula metus. Suspendisse potenti. Donec a velit ut erat ultrices feugiat ac vel nunc. Proin vitae neque vitae massa tristique condimentum. Fusce ut lorem id metus luctus vehicula fringilla et lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
<br /><br />
Integer congue laoreet nibh, in iaculis purus vulputate sit amet. Sed non <a href="" title=" felis et quam eleifend congue "><i>felis et quam eleifend congue</i></a> vel id mauris. Sed et arcu quis erat hendrerit pulvinar. Vivamus cursus aliquet urna, ac ultrices turpis luctus at.
<br /><br />
Proin vitae neque vitae massa tristique condimentum. Fusce ut lorem id metus luctus vehicula fringilla et lectus. Lorem ipsum dolor sit.</p>
<!-- // HTML PAGE STANDARD -->

<!-- FOOTER -->
	<div style="clear:both;">
</div>	
</div>
<!-- FOOTER YAH -->
	<div id="footer_yah">
		<div id="footer_yah_sub">© 2009-2010 <a href="http://you-art-here.com" title=" You Art Here // conception et développement ">You Art Here</a></div>
	</div>
<!-- // FOOTER YAH -->
</div> 
<!-- // FOOTER -->
		
	<script type="text/javascript"> 
	
		$(document).ready(function(){ 
				cat_str = ''; 
				if(cat_str != ""){
					// alert();
					jQuery.noticeAdd({ text: cat_str,stay: false });
				} 
				
				cat_str = ''; 
				if(cat_str != ""){
					// alert("");
					jQuery.noticeAdd({ text: cat_str,stay: false });
				} 
			} 
		);
		Cufon.now(); 
	</script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3198291-15']);
	  _gaq.push(['_setDomainName', '.you-art-here.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	</body>
</html>
