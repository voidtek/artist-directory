<!--cachetime:1292282419--><?php
			App::import('Controller', 'Sites');
			$controller =& new SitesController();
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize('a:5:{i:0;s:4:"Html";i:1;s:4:"Form";i:2;s:3:"Xml";i:3;s:10:"Javascript";i:4;s:5:"Cache";}');
				$controller->base = $this->base = '';
				$controller->layout = $this->layout = 'default';
				$controller->webroot = $this->webroot = '/';
				$controller->here = $this->here = '/img';
				$controller->namedArgs  = $this->namedArgs  = '';
				$controller->argSeparator = $this->argSeparator = '';
				$controller->params = $this->params = unserialize(stripslashes('a:11:{s:4:\"pass\";a:1:{i:0;s:3:\"img\";}s:5:\"named\";a:0:{}s:8:\"str_page\";s:3:\"img\";s:12:\"str_souspage\";N;s:16:\"str_soussouspage\";N;s:6:\"plugin\";N;s:10:\"controller\";s:5:\"sites\";s:6:\"action\";s:4:\"view\";s:3:\"url\";a:2:{s:3:\"ext\";s:4:\"html\";s:3:\"url\";s:3:\"img\";}s:4:\"form\";a:0:{}s:6:\"models\";a:9:{i:0;s:4:\"Site\";i:1;s:4:\"User\";i:2;s:7:\"Content\";i:3;s:4:\"Link\";i:4;s:7:\"Artiste\";i:5;s:16:\"ArtisteCategorie\";i:6;s:6:\"Galery\";i:7;s:5:\"Theme\";i:8;s:5:\"Media\";}}'));
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
	
		

<pre class="cake-debug">
<a href='javascript:void(0);' onclick='document.getElementById("CakeStackTrace1").style.display = (document.getElementById("CakeStackTrace1").style.display == "none" ? "" : "none")'><b>Notice</b> (8)</a>: Undefined variable: content_page [<b>APP/views/sites/view.ctp</b>, line <b>60</b>]
</pre>
<div id="CakeStackTrace1" class="cake-stack-trace" style="display: none;"><a href='javascript:void(0);' onclick='document.getElementById("CakeErrorCode1").style.display = (document.getElementById("CakeErrorCode1").style.display == "none" ? "" : "none")'>Code</a> | <a href='javascript:void(0);' onclick='document.getElementById("CakeErrorContext1").style.display = (document.getElementById("CakeErrorContext1").style.display == "none" ? "" : "none")'>Context</a><pre id="CakeErrorContext1" class="cake-context" style="display: none;">$___viewFn	=	"/home/www/site.you-art-here.com/app/views/sites/view.ctp"
$___dataForView	=	array(
	"metaKeywords" => "YOU ART HERE",
	"metaDescription" => "YOU ART HERE",
	"menu_artiste" => array(
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array()
),
	"connected_user" => null,
	"is_admin" => false,
	"item" => array(
	array()
),
	"item_galery" => array(
	array()
),
	"page" => "img",
	"souspage" => "",
	"soussouspage" => ""
)
$loadHelpers	=	true
$cached	=	false
$loadedHelpers	=	array(
	"Html" => HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL,
	"Form" => FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object,
	"Xml" => XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object,
	"Javascript" => JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL,
	"Cache" => CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL,
	"Session" => SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
)
$helper	=	"Session"
$camelBackedHelper	=	"session"
$html	=	HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL
$form	=	FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object
$xml	=	XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object
$javascript	=	JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL
$cache	=	CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL
$session	=	SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
$metaKeywords	=	"YOU ART HERE"
$metaDescription	=	"YOU ART HERE"
$menu_artiste	=	array(
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
)
)
$connected_user	=	null
$is_admin	=	false
$item	=	array(
	array(
	"Site" => array(),
	"Gabarit" => array(),
	"Template" => array(),
	"PageBio" => array(),
	"PageWork" => array(),
	"PageContact" => array(),
	"PageEvenement" => array(),
	"PageGalerie" => array(),
	"Stat" => array(),
	"Artiste" => array()
)
)
$item_galery	=	array(
	array(
	"Theme" => array(),
	"Galery" => array(),
	"Media" => array()
)
)
$page	=	"img"
$souspage	=	""
$soussouspage	=	""
$cat_galery	=	false
$cat_theme	=	false
$page_css	=	""
$cat_menu	=	"&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;"
$CONTENT_PAGE	=	"
&lt;!-- HEADER --&gt;
&lt;div id=&quot;container&quot;&gt; 
	&lt;div id=&quot;content&quot;&gt;
		&lt;div id=&quot;content-header&quot;&gt;
		&lt;!-- LOGO --&gt;
		&lt;h1&gt;%LOGO_PAGE%&lt;/h1&gt;
		&lt;!-- // LOGO --&gt;
		&lt;h3&gt;%SIGNATURE_PAGE%&lt;/h3&gt;
&lt;/div&gt;
&lt;!-- MENU DE NAVIGATION --&gt; 
		&lt;div id=&quot;menu&quot;&gt;%MENU_PAGE%&lt;/div&gt;
		&lt;!-- // MENU DE NAVIGATION --&gt; 
		&lt;!-- SOCIAL --&gt;
		&lt;div id=&quot;content-center&quot;&gt;
%MENU_SOCIAUX%
		&lt;!-- // SOCIAL --&gt;
&lt;!-- // HEADER --&gt;

&lt;!-- HTML PAGE STANDARD --&gt;&lt;h2&gt;%TITLE_PAGE%&lt;/h2&gt;
&lt;p&gt;%CONTENT_PAGE%&lt;/p&gt;
&lt;!-- // HTML PAGE STANDARD --&gt;

&lt;!-- FOOTER --&gt;
	&lt;div style=&quot;clear:both;&quot;&gt;
&lt;/div&gt;	
&lt;/div&gt;
&lt;!-- FOOTER YAH --&gt;
	&lt;div id=&quot;footer_yah&quot;&gt;
		&lt;div id=&quot;footer_yah_sub&quot;&gt;© 2009-2010 &lt;a href=&quot;http://you-art-here.com&quot; title=&quot; You Art Here // conception et développement &quot;&gt;You Art Here&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;!-- // FOOTER YAH --&gt;
&lt;/div&gt; 
&lt;!-- // FOOTER --&gt;
"
$CONTENT_GALERIE	=	"
&lt;!-- GALERIE --&gt;
&lt;div class=&quot;media_galerie&quot;&gt;
	&lt;a href=&quot;%URL_LIEN%&quot; rel=&quot;sexylightbox[mygalery]&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=80&amp;h=80&amp;zc=1&quot; width=&quot;80&quot; height=&quot;80&quot; alt=&quot; %TITRE_MEDIA% &quot; border=&quot;0&quot; /&gt;
		&lt;!-- &lt;p&gt;%TITRE_MEDIA%&lt;/p&gt;--&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- // GALERIE --&gt;
"
$CONTENT_THEMES	=	"
&lt;!-- THEME --&gt;
&lt;div class=&quot;media_theme&quot;&gt;
&lt;a href=&quot;%URL_LIEN%&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;p style=&quot;margin:0 0 7px 0;&quot;&gt;| %TITRE_MEDIA%&lt;/p&gt;
&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=370&amp;h=100&amp;zc=1&quot; width=&quot;370&quot; height=&quot;100&quot; alt=&quot; %TITRE_MEDIA% &quot; /&gt;
	&lt;/a&gt;
&lt;/div&gt;
&lt;div style=&quot;clear:both; height:10px;&quot;&gt;&lt;/div&gt;
&lt;!-- THEME --&gt;
"</pre><div id="CakeErrorCode1" class="cake-code-dump" style="display: none;"><pre><code><span style="color: #000000">$CONTENT_THEMES&nbsp;=&nbsp;"\n\r&lt;!--&nbsp;THEME&nbsp;--&gt;\n\r".$item[0]['Gabarit']['html_theme']."\n\r&lt;!--&nbsp;THEME&nbsp;--&gt;\n\r";</span></code>
<code><span style="color: #000000"></span></code>
<span class="code-highlight"><code><span style="color: #000000">$cat_content_text&nbsp;=&nbsp;$content_page['body'];</span></code></span>
</pre></div><pre>include - APP/views/sites/view.ctp, line 60
View::_render() - CORE/cake/libs/view/view.php, line 666
View::render() - CORE/cake/libs/view/view.php, line 376
Controller::render() - CORE/cake/libs/controller/controller.php, line 803
Dispatcher::_invoke() - CORE/cake/dispatcher.php, line 230
Dispatcher::dispatch() - CORE/cake/dispatcher.php, line 194
[main] - APP/webroot/index.php, line 88</pre></div>
<pre class="cake-debug">
<a href='javascript:void(0);' onclick='document.getElementById("CakeStackTrace2").style.display = (document.getElementById("CakeStackTrace2").style.display == "none" ? "" : "none")'><b>Notice</b> (8)</a>: Undefined variable: content_page [<b>APP/views/sites/view.ctp</b>, line <b>64</b>]
</pre>
<div id="CakeStackTrace2" class="cake-stack-trace" style="display: none;"><a href='javascript:void(0);' onclick='document.getElementById("CakeErrorCode2").style.display = (document.getElementById("CakeErrorCode2").style.display == "none" ? "" : "none")'>Code</a> | <a href='javascript:void(0);' onclick='document.getElementById("CakeErrorContext2").style.display = (document.getElementById("CakeErrorContext2").style.display == "none" ? "" : "none")'>Context</a><pre id="CakeErrorContext2" class="cake-context" style="display: none;">$___viewFn	=	"/home/www/site.you-art-here.com/app/views/sites/view.ctp"
$___dataForView	=	array(
	"metaKeywords" => "YOU ART HERE",
	"metaDescription" => "YOU ART HERE",
	"menu_artiste" => array(
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array()
),
	"connected_user" => null,
	"is_admin" => false,
	"item" => array(
	array()
),
	"item_galery" => array(
	array()
),
	"page" => "img",
	"souspage" => "",
	"soussouspage" => ""
)
$loadHelpers	=	true
$cached	=	false
$loadedHelpers	=	array(
	"Html" => HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL,
	"Form" => FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object,
	"Xml" => XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object,
	"Javascript" => JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL,
	"Cache" => CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL,
	"Session" => SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
)
$helper	=	"Session"
$camelBackedHelper	=	"session"
$html	=	HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL
$form	=	FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object
$xml	=	XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object
$javascript	=	JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL
$cache	=	CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL
$session	=	SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
$metaKeywords	=	"YOU ART HERE"
$metaDescription	=	"YOU ART HERE"
$menu_artiste	=	array(
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
)
)
$connected_user	=	null
$is_admin	=	false
$item	=	array(
	array(
	"Site" => array(),
	"Gabarit" => array(),
	"Template" => array(),
	"PageBio" => array(),
	"PageWork" => array(),
	"PageContact" => array(),
	"PageEvenement" => array(),
	"PageGalerie" => array(),
	"Stat" => array(),
	"Artiste" => array()
)
)
$item_galery	=	array(
	array(
	"Theme" => array(),
	"Galery" => array(),
	"Media" => array()
)
)
$page	=	"img"
$souspage	=	""
$soussouspage	=	""
$cat_galery	=	false
$cat_theme	=	false
$page_css	=	""
$cat_menu	=	"&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;"
$CONTENT_PAGE	=	"
&lt;!-- HEADER --&gt;
&lt;div id=&quot;container&quot;&gt; 
	&lt;div id=&quot;content&quot;&gt;
		&lt;div id=&quot;content-header&quot;&gt;
		&lt;!-- LOGO --&gt;
		&lt;h1&gt;%LOGO_PAGE%&lt;/h1&gt;
		&lt;!-- // LOGO --&gt;
		&lt;h3&gt;%SIGNATURE_PAGE%&lt;/h3&gt;
&lt;/div&gt;
&lt;!-- MENU DE NAVIGATION --&gt; 
		&lt;div id=&quot;menu&quot;&gt;%MENU_PAGE%&lt;/div&gt;
		&lt;!-- // MENU DE NAVIGATION --&gt; 
		&lt;!-- SOCIAL --&gt;
		&lt;div id=&quot;content-center&quot;&gt;
%MENU_SOCIAUX%
		&lt;!-- // SOCIAL --&gt;
&lt;!-- // HEADER --&gt;

&lt;!-- HTML PAGE STANDARD --&gt;&lt;h2&gt;%TITLE_PAGE%&lt;/h2&gt;
&lt;p&gt;%CONTENT_PAGE%&lt;/p&gt;
&lt;!-- // HTML PAGE STANDARD --&gt;

&lt;!-- FOOTER --&gt;
	&lt;div style=&quot;clear:both;&quot;&gt;
&lt;/div&gt;	
&lt;/div&gt;
&lt;!-- FOOTER YAH --&gt;
	&lt;div id=&quot;footer_yah&quot;&gt;
		&lt;div id=&quot;footer_yah_sub&quot;&gt;© 2009-2010 &lt;a href=&quot;http://you-art-here.com&quot; title=&quot; You Art Here // conception et développement &quot;&gt;You Art Here&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;!-- // FOOTER YAH --&gt;
&lt;/div&gt; 
&lt;!-- // FOOTER --&gt;
"
$CONTENT_GALERIE	=	"
&lt;!-- GALERIE --&gt;
&lt;div class=&quot;media_galerie&quot;&gt;
	&lt;a href=&quot;%URL_LIEN%&quot; rel=&quot;sexylightbox[mygalery]&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=80&amp;h=80&amp;zc=1&quot; width=&quot;80&quot; height=&quot;80&quot; alt=&quot; %TITRE_MEDIA% &quot; border=&quot;0&quot; /&gt;
		&lt;!-- &lt;p&gt;%TITRE_MEDIA%&lt;/p&gt;--&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- // GALERIE --&gt;
"
$CONTENT_THEMES	=	"
&lt;!-- THEME --&gt;
&lt;div class=&quot;media_theme&quot;&gt;
&lt;a href=&quot;%URL_LIEN%&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;p style=&quot;margin:0 0 7px 0;&quot;&gt;| %TITRE_MEDIA%&lt;/p&gt;
&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=370&amp;h=100&amp;zc=1&quot; width=&quot;370&quot; height=&quot;100&quot; alt=&quot; %TITRE_MEDIA% &quot; /&gt;
	&lt;/a&gt;
&lt;/div&gt;
&lt;div style=&quot;clear:both; height:10px;&quot;&gt;&lt;/div&gt;
&lt;!-- THEME --&gt;
"
$cat_content_text	=	null</pre><div id="CakeErrorCode2" class="cake-code-dump" style="display: none;"><pre><code><span style="color: #000000"></span></code>
<code><span style="color: #000000"></span></code>
<span class="code-highlight"><code><span style="color: #000000">$cat_content_img&nbsp;=&nbsp;$content_page['img'];</span></code></span>
</pre></div><pre>include - APP/views/sites/view.ctp, line 64
View::_render() - CORE/cake/libs/view/view.php, line 666
View::render() - CORE/cake/libs/view/view.php, line 376
Controller::render() - CORE/cake/libs/controller/controller.php, line 803
Dispatcher::_invoke() - CORE/cake/dispatcher.php, line 230
Dispatcher::dispatch() - CORE/cake/dispatcher.php, line 194
[main] - APP/webroot/index.php, line 88</pre></div>
<pre class="cake-debug">
<a href='javascript:void(0);' onclick='document.getElementById("CakeStackTrace3").style.display = (document.getElementById("CakeStackTrace3").style.display == "none" ? "" : "none")'><b>Notice</b> (8)</a>: Undefined variable: content_page [<b>APP/views/sites/view.ctp</b>, line <b>510</b>]
</pre>
<div id="CakeStackTrace3" class="cake-stack-trace" style="display: none;"><a href='javascript:void(0);' onclick='document.getElementById("CakeErrorCode3").style.display = (document.getElementById("CakeErrorCode3").style.display == "none" ? "" : "none")'>Code</a> | <a href='javascript:void(0);' onclick='document.getElementById("CakeErrorContext3").style.display = (document.getElementById("CakeErrorContext3").style.display == "none" ? "" : "none")'>Context</a><pre id="CakeErrorContext3" class="cake-context" style="display: none;">$___viewFn	=	"/home/www/site.you-art-here.com/app/views/sites/view.ctp"
$___dataForView	=	array(
	"metaKeywords" => "YOU ART HERE",
	"metaDescription" => "YOU ART HERE",
	"menu_artiste" => array(
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array()
),
	"connected_user" => null,
	"is_admin" => false,
	"item" => array(
	array()
),
	"item_galery" => array(
	array()
),
	"page" => "img",
	"souspage" => "",
	"soussouspage" => ""
)
$loadHelpers	=	true
$cached	=	false
$loadedHelpers	=	array(
	"Html" => HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL,
	"Form" => FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object,
	"Xml" => XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object,
	"Javascript" => JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL,
	"Cache" => CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL,
	"Session" => SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
)
$helper	=	"Session"
$camelBackedHelper	=	"session"
$html	=	HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL
$form	=	FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object
$xml	=	XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object
$javascript	=	JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL
$cache	=	CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL
$session	=	SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
$metaKeywords	=	"YOU ART HERE"
$metaDescription	=	"YOU ART HERE"
$menu_artiste	=	array(
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
)
)
$connected_user	=	null
$is_admin	=	false
$item	=	array(
	array(
	"Site" => array(),
	"Gabarit" => array(),
	"Template" => array(),
	"PageBio" => array(),
	"PageWork" => array(),
	"PageContact" => array(),
	"PageEvenement" => array(),
	"PageGalerie" => array(),
	"Stat" => array(),
	"Artiste" => array()
)
)
$item_galery	=	array(
	array(
	"Theme" => array(),
	"Galery" => array(),
	"Media" => array()
)
)
$page	=	"img"
$souspage	=	""
$soussouspage	=	""
$cat_galery	=	false
$cat_theme	=	false
$page_css	=	""
$cat_menu	=	"&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;"
$CONTENT_PAGE	=	"
&lt;!-- HEADER --&gt;
&lt;div id=&quot;container&quot;&gt; 
	&lt;div id=&quot;content&quot;&gt;
		&lt;div id=&quot;content-header&quot;&gt;
		&lt;!-- LOGO --&gt;
		&lt;h1&gt;%LOGO_PAGE%&lt;/h1&gt;
		&lt;!-- // LOGO --&gt;
		&lt;h3&gt;%SIGNATURE_PAGE%&lt;/h3&gt;
&lt;/div&gt;
&lt;!-- MENU DE NAVIGATION --&gt; 
		&lt;div id=&quot;menu&quot;&gt;%MENU_PAGE%&lt;/div&gt;
		&lt;!-- // MENU DE NAVIGATION --&gt; 
		&lt;!-- SOCIAL --&gt;
		&lt;div id=&quot;content-center&quot;&gt;
%MENU_SOCIAUX%
		&lt;!-- // SOCIAL --&gt;
&lt;!-- // HEADER --&gt;

&lt;!-- HTML PAGE STANDARD --&gt;&lt;h2&gt;%TITLE_PAGE%&lt;/h2&gt;
&lt;p&gt;%CONTENT_PAGE%&lt;/p&gt;
&lt;!-- // HTML PAGE STANDARD --&gt;

&lt;!-- FOOTER --&gt;
	&lt;div style=&quot;clear:both;&quot;&gt;
&lt;/div&gt;	
&lt;/div&gt;
&lt;!-- FOOTER YAH --&gt;
	&lt;div id=&quot;footer_yah&quot;&gt;
		&lt;div id=&quot;footer_yah_sub&quot;&gt;© 2009-2010 &lt;a href=&quot;http://you-art-here.com&quot; title=&quot; You Art Here // conception et développement &quot;&gt;You Art Here&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;!-- // FOOTER YAH --&gt;
&lt;/div&gt; 
&lt;!-- // FOOTER --&gt;
"
$CONTENT_GALERIE	=	"
&lt;!-- GALERIE --&gt;
&lt;div class=&quot;media_galerie&quot;&gt;
	&lt;a href=&quot;%URL_LIEN%&quot; rel=&quot;sexylightbox[mygalery]&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=80&amp;h=80&amp;zc=1&quot; width=&quot;80&quot; height=&quot;80&quot; alt=&quot; %TITRE_MEDIA% &quot; border=&quot;0&quot; /&gt;
		&lt;!-- &lt;p&gt;%TITRE_MEDIA%&lt;/p&gt;--&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- // GALERIE --&gt;
"
$CONTENT_THEMES	=	"
&lt;!-- THEME --&gt;
&lt;div class=&quot;media_theme&quot;&gt;
&lt;a href=&quot;%URL_LIEN%&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;p style=&quot;margin:0 0 7px 0;&quot;&gt;| %TITRE_MEDIA%&lt;/p&gt;
&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=370&amp;h=100&amp;zc=1&quot; width=&quot;370&quot; height=&quot;100&quot; alt=&quot; %TITRE_MEDIA% &quot; /&gt;
	&lt;/a&gt;
&lt;/div&gt;
&lt;div style=&quot;clear:both; height:10px;&quot;&gt;&lt;/div&gt;
&lt;!-- THEME --&gt;
"
$cat_content_text	=	null
$cat_content_img	=	null
$cat_form_sociaux	=	" &lt;div class=&#039;partager&#039;&gt;&lt;ul&gt; 
						&lt;li class=&#039;facebook&#039; title=&#039; BAYAN LEFT : Devenez Fan sur Facebook &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT :Devenez Fan sur Facebook &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;twitter&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;flickr&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;myspace&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
					&lt;/ul&gt; &lt;/div&gt;"
$cat_html_galery_1	=	""
$cat_html_galery_2	=	""
$cat_html_galery_3	=	""
$cat_html_galery_4	=	""
$cat_html_galery_6	=	""
$cat_html_galery_8	=	""
$cat_html_galery_9	=	""
$cat_html_galery_12	=	""
$cat_html_galery_16	=	""
$cat_html_galery	=	""
$cat_html_theme_1	=	""
$cat_html_theme_2	=	""
$cat_html_theme_3	=	""
$cat_html_theme_4	=	""
$cat_html_theme_6	=	""
$cat_html_theme_8	=	""
$cat_html_theme_9	=	""
$cat_html_theme_12	=	""
$cat_html_theme_16	=	""
$cat_html_theme	=	""
$cat_title_theme	=	""
$cat_title_img	=	""
$cat_title	=	""
$cat_content_media	=	""
$cat_content_text_65	=	"&lt;div&gt; &lt;/div&gt;"
$array_content_text	=	array(
	""
)
$count	=	1
$cat_num	=	1
$cat_decoup	=	100
$i	=	1
$cat_form_contact	=	""</pre><div id="CakeErrorCode3" class="cake-code-dump" style="display: none;"><pre><code><span style="color: #000000"></span></code>
<code><span style="color: #000000"></span></code>
<span class="code-highlight"><code><span style="color: #000000">$TITLE_PAGE&nbsp;=&nbsp;"&lt;a&nbsp;href='/$page'&nbsp;title='&nbsp;".$item[0]['Site']['title']."&nbsp;:&nbsp;".$content_page['title']."&nbsp;'&gt;".$content_page['title']."&lt;/a&gt;";</span></code></span>
</pre></div><pre>include - APP/views/sites/view.ctp, line 510
View::_render() - CORE/cake/libs/view/view.php, line 666
View::render() - CORE/cake/libs/view/view.php, line 376
Controller::render() - CORE/cake/libs/controller/controller.php, line 803
Dispatcher::_invoke() - CORE/cake/dispatcher.php, line 230
Dispatcher::dispatch() - CORE/cake/dispatcher.php, line 194
[main] - APP/webroot/index.php, line 88</pre></div>
<pre class="cake-debug">
<a href='javascript:void(0);' onclick='document.getElementById("CakeStackTrace4").style.display = (document.getElementById("CakeStackTrace4").style.display == "none" ? "" : "none")'><b>Notice</b> (8)</a>: Undefined variable: content_page [<b>APP/views/sites/view.ctp</b>, line <b>516</b>]
</pre>
<div id="CakeStackTrace4" class="cake-stack-trace" style="display: none;"><a href='javascript:void(0);' onclick='document.getElementById("CakeErrorCode4").style.display = (document.getElementById("CakeErrorCode4").style.display == "none" ? "" : "none")'>Code</a> | <a href='javascript:void(0);' onclick='document.getElementById("CakeErrorContext4").style.display = (document.getElementById("CakeErrorContext4").style.display == "none" ? "" : "none")'>Context</a><pre id="CakeErrorContext4" class="cake-context" style="display: none;">$___viewFn	=	"/home/www/site.you-art-here.com/app/views/sites/view.ctp"
$___dataForView	=	array(
	"metaKeywords" => "YOU ART HERE",
	"metaDescription" => "YOU ART HERE",
	"menu_artiste" => array(
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array()
),
	"connected_user" => null,
	"is_admin" => false,
	"item" => array(
	array()
),
	"item_galery" => array(
	array()
),
	"page" => "img",
	"souspage" => "",
	"soussouspage" => ""
)
$loadHelpers	=	true
$cached	=	false
$loadedHelpers	=	array(
	"Html" => HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL,
	"Form" => FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object,
	"Xml" => XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object,
	"Javascript" => JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL,
	"Cache" => CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL,
	"Session" => SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
)
$helper	=	"Session"
$camelBackedHelper	=	"session"
$html	=	HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL
$form	=	FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object
$xml	=	XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object
$javascript	=	JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL
$cache	=	CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL
$session	=	SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
$metaKeywords	=	"YOU ART HERE"
$metaDescription	=	"YOU ART HERE"
$menu_artiste	=	array(
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
)
)
$connected_user	=	null
$is_admin	=	false
$item	=	array(
	array(
	"Site" => array(),
	"Gabarit" => array(),
	"Template" => array(),
	"PageBio" => array(),
	"PageWork" => array(),
	"PageContact" => array(),
	"PageEvenement" => array(),
	"PageGalerie" => array(),
	"Stat" => array(),
	"Artiste" => array()
)
)
$item_galery	=	array(
	array(
	"Theme" => array(),
	"Galery" => array(),
	"Media" => array()
)
)
$page	=	"img"
$souspage	=	""
$soussouspage	=	""
$cat_galery	=	false
$cat_theme	=	false
$page_css	=	""
$cat_menu	=	"&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;"
$CONTENT_PAGE	=	"
&lt;!-- HEADER --&gt;
&lt;div id=&quot;container&quot;&gt; 
	&lt;div id=&quot;content&quot;&gt;
		&lt;div id=&quot;content-header&quot;&gt;
		&lt;!-- LOGO --&gt;
		&lt;h1&gt;%LOGO_PAGE%&lt;/h1&gt;
		&lt;!-- // LOGO --&gt;
		&lt;h3&gt;%SIGNATURE_PAGE%&lt;/h3&gt;
&lt;/div&gt;
&lt;!-- MENU DE NAVIGATION --&gt; 
		&lt;div id=&quot;menu&quot;&gt;%MENU_PAGE%&lt;/div&gt;
		&lt;!-- // MENU DE NAVIGATION --&gt; 
		&lt;!-- SOCIAL --&gt;
		&lt;div id=&quot;content-center&quot;&gt;
%MENU_SOCIAUX%
		&lt;!-- // SOCIAL --&gt;
&lt;!-- // HEADER --&gt;

&lt;!-- HTML PAGE STANDARD --&gt;&lt;h2&gt;%TITLE_PAGE%&lt;/h2&gt;
&lt;p&gt;%CONTENT_PAGE%&lt;/p&gt;
&lt;!-- // HTML PAGE STANDARD --&gt;

&lt;!-- FOOTER --&gt;
	&lt;div style=&quot;clear:both;&quot;&gt;
&lt;/div&gt;	
&lt;/div&gt;
&lt;!-- FOOTER YAH --&gt;
	&lt;div id=&quot;footer_yah&quot;&gt;
		&lt;div id=&quot;footer_yah_sub&quot;&gt;© 2009-2010 &lt;a href=&quot;http://you-art-here.com&quot; title=&quot; You Art Here // conception et développement &quot;&gt;You Art Here&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;!-- // FOOTER YAH --&gt;
&lt;/div&gt; 
&lt;!-- // FOOTER --&gt;
"
$CONTENT_GALERIE	=	"
&lt;!-- GALERIE --&gt;
&lt;div class=&quot;media_galerie&quot;&gt;
	&lt;a href=&quot;%URL_LIEN%&quot; rel=&quot;sexylightbox[mygalery]&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=80&amp;h=80&amp;zc=1&quot; width=&quot;80&quot; height=&quot;80&quot; alt=&quot; %TITRE_MEDIA% &quot; border=&quot;0&quot; /&gt;
		&lt;!-- &lt;p&gt;%TITRE_MEDIA%&lt;/p&gt;--&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- // GALERIE --&gt;
"
$CONTENT_THEMES	=	"
&lt;!-- THEME --&gt;
&lt;div class=&quot;media_theme&quot;&gt;
&lt;a href=&quot;%URL_LIEN%&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;p style=&quot;margin:0 0 7px 0;&quot;&gt;| %TITRE_MEDIA%&lt;/p&gt;
&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=370&amp;h=100&amp;zc=1&quot; width=&quot;370&quot; height=&quot;100&quot; alt=&quot; %TITRE_MEDIA% &quot; /&gt;
	&lt;/a&gt;
&lt;/div&gt;
&lt;div style=&quot;clear:both; height:10px;&quot;&gt;&lt;/div&gt;
&lt;!-- THEME --&gt;
"
$cat_content_text	=	null
$cat_content_img	=	null
$cat_form_sociaux	=	" &lt;div class=&#039;partager&#039;&gt;&lt;ul&gt; 
						&lt;li class=&#039;facebook&#039; title=&#039; BAYAN LEFT : Devenez Fan sur Facebook &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT :Devenez Fan sur Facebook &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;twitter&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;flickr&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;myspace&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
					&lt;/ul&gt; &lt;/div&gt;"
$cat_html_galery_1	=	""
$cat_html_galery_2	=	""
$cat_html_galery_3	=	""
$cat_html_galery_4	=	""
$cat_html_galery_6	=	""
$cat_html_galery_8	=	""
$cat_html_galery_9	=	""
$cat_html_galery_12	=	""
$cat_html_galery_16	=	""
$cat_html_galery	=	""
$cat_html_theme_1	=	""
$cat_html_theme_2	=	""
$cat_html_theme_3	=	""
$cat_html_theme_4	=	""
$cat_html_theme_6	=	""
$cat_html_theme_8	=	""
$cat_html_theme_9	=	""
$cat_html_theme_12	=	""
$cat_html_theme_16	=	""
$cat_html_theme	=	""
$cat_title_theme	=	""
$cat_title_img	=	""
$cat_title	=	""
$cat_content_media	=	""
$cat_content_text_65	=	"&lt;div&gt; &lt;/div&gt;"
$array_content_text	=	array(
	""
)
$count	=	1
$cat_num	=	1
$cat_decoup	=	100
$i	=	1
$cat_form_contact	=	""
$TITLE_PAGE	=	"&lt;a href=&#039;/img&#039; title=&#039; BAYAN LEFT :  &#039;&gt;&lt;/a&gt;"</pre><div id="CakeErrorCode4" class="cake-code-dump" style="display: none;"><pre><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;if($cat_title_img&nbsp;!=&nbsp;"")&nbsp;$cat_title_img&nbsp;=&nbsp;$item[0]['Site']['title']."&nbsp;:&nbsp;".$content_page['title']&nbsp;.&nbsp;"&nbsp;|&nbsp;"&nbsp;.$cat_title_theme&nbsp;."&nbsp;|&nbsp;".&nbsp;$cat_title_img;</span></code>
<code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;$cat_title_img&nbsp;=&nbsp;$item[0]['Site']['title']."&nbsp;:&nbsp;".$content_page['title']&nbsp;.&nbsp;"&nbsp;|&nbsp;"&nbsp;.$cat_title_theme;</span></code>
<span class="code-highlight"><code><span style="color: #000000">}&nbsp;else&nbsp;$cat_title_img&nbsp;=&nbsp;$item[0]['Site']['title']."&nbsp;:&nbsp;".$content_page['title'];</span></code></span>
</pre></div><pre>include - APP/views/sites/view.ctp, line 516
View::_render() - CORE/cake/libs/view/view.php, line 666
View::render() - CORE/cake/libs/view/view.php, line 376
Controller::render() - CORE/cake/libs/controller/controller.php, line 803
Dispatcher::_invoke() - CORE/cake/dispatcher.php, line 230
Dispatcher::dispatch() - CORE/cake/dispatcher.php, line 194
[main] - APP/webroot/index.php, line 88</pre></div>
<pre class="cake-debug">
<a href='javascript:void(0);' onclick='document.getElementById("CakeStackTrace5").style.display = (document.getElementById("CakeStackTrace5").style.display == "none" ? "" : "none")'><b>Notice</b> (8)</a>: Undefined variable: content_page [<b>APP/views/sites/view.ctp</b>, line <b>565</b>]
</pre>
<div id="CakeStackTrace5" class="cake-stack-trace" style="display: none;"><a href='javascript:void(0);' onclick='document.getElementById("CakeErrorCode5").style.display = (document.getElementById("CakeErrorCode5").style.display == "none" ? "" : "none")'>Code</a> | <a href='javascript:void(0);' onclick='document.getElementById("CakeErrorContext5").style.display = (document.getElementById("CakeErrorContext5").style.display == "none" ? "" : "none")'>Context</a><pre id="CakeErrorContext5" class="cake-context" style="display: none;">$___viewFn	=	"/home/www/site.you-art-here.com/app/views/sites/view.ctp"
$___dataForView	=	array(
	"metaKeywords" => "YOU ART HERE",
	"metaDescription" => "YOU ART HERE",
	"menu_artiste" => array(
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array(),
	array()
),
	"connected_user" => null,
	"is_admin" => false,
	"item" => array(
	array()
),
	"item_galery" => array(
	array()
),
	"page" => "img",
	"souspage" => "",
	"soussouspage" => ""
)
$loadHelpers	=	true
$cached	=	false
$loadedHelpers	=	array(
	"Html" => HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL,
	"Form" => FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object,
	"Xml" => XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object,
	"Javascript" => JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL,
	"Cache" => CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL,
	"Session" => SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
)
$helper	=	"Session"
$camelBackedHelper	=	"session"
$html	=	HtmlHelper
HtmlHelper::$tags = array
HtmlHelper::$base = ""
HtmlHelper::$here = "/img"
HtmlHelper::$params = array
HtmlHelper::$action = "view"
HtmlHelper::$data = NULL
HtmlHelper::$_crumbs = array
HtmlHelper::$__docTypes = array
HtmlHelper::$helpers = NULL
HtmlHelper::$webroot = "/"
HtmlHelper::$themeWeb = NULL
HtmlHelper::$plugin = NULL
HtmlHelper::$namedArgs = NULL
HtmlHelper::$argSeparator = NULL
HtmlHelper::$validationErrors = NULL
HtmlHelper::$__tainted = NULL
HtmlHelper::$__cleaned = NULL
HtmlHelper::$_log = NULL
$form	=	FormHelper
FormHelper::$helpers = array
FormHelper::$fieldset = array
FormHelper::$__options = array
FormHelper::$fields = array
FormHelper::$requestType = NULL
FormHelper::$base = ""
FormHelper::$webroot = "/"
FormHelper::$themeWeb = NULL
FormHelper::$here = "/img"
FormHelper::$params = array
FormHelper::$action = "view"
FormHelper::$plugin = NULL
FormHelper::$data = NULL
FormHelper::$namedArgs = NULL
FormHelper::$argSeparator = NULL
FormHelper::$validationErrors = NULL
FormHelper::$tags = array
FormHelper::$__tainted = NULL
FormHelper::$__cleaned = NULL
FormHelper::$_log = NULL
FormHelper::$Html = HtmlHelper object
$xml	=	XmlHelper
XmlHelper::$encoding = "UTF-8"
XmlHelper::$helpers = NULL
XmlHelper::$base = ""
XmlHelper::$webroot = "/"
XmlHelper::$themeWeb = NULL
XmlHelper::$here = "/img"
XmlHelper::$params = array
XmlHelper::$action = "view"
XmlHelper::$plugin = NULL
XmlHelper::$data = NULL
XmlHelper::$namedArgs = NULL
XmlHelper::$argSeparator = NULL
XmlHelper::$validationErrors = NULL
XmlHelper::$tags = array
XmlHelper::$__tainted = NULL
XmlHelper::$__cleaned = NULL
XmlHelper::$_log = NULL
XmlHelper::$Xml = Xml object
$javascript	=	JavascriptHelper
JavascriptHelper::$useNative = true
JavascriptHelper::$enabled = true
JavascriptHelper::$safe = false
JavascriptHelper::$tags = array
JavascriptHelper::$_blockOptions = array
JavascriptHelper::$_cachedEvents = array
JavascriptHelper::$_cacheEvents = false
JavascriptHelper::$_cacheToFile = false
JavascriptHelper::$_cacheAll = false
JavascriptHelper::$_rules = array
JavascriptHelper::$__scriptBuffer = NULL
JavascriptHelper::$helpers = NULL
JavascriptHelper::$base = ""
JavascriptHelper::$webroot = "/"
JavascriptHelper::$themeWeb = NULL
JavascriptHelper::$here = "/img"
JavascriptHelper::$params = array
JavascriptHelper::$action = "view"
JavascriptHelper::$plugin = NULL
JavascriptHelper::$data = NULL
JavascriptHelper::$namedArgs = NULL
JavascriptHelper::$argSeparator = NULL
JavascriptHelper::$validationErrors = NULL
JavascriptHelper::$__tainted = NULL
JavascriptHelper::$__cleaned = NULL
JavascriptHelper::$_log = NULL
$cache	=	CacheHelper
CacheHelper::$__replace = array
CacheHelper::$__match = array
CacheHelper::$view = NULL
CacheHelper::$cacheAction = NULL
CacheHelper::$helpers = NULL
CacheHelper::$base = ""
CacheHelper::$webroot = "/"
CacheHelper::$themeWeb = NULL
CacheHelper::$here = "/img"
CacheHelper::$params = array
CacheHelper::$action = "view"
CacheHelper::$plugin = NULL
CacheHelper::$data = NULL
CacheHelper::$namedArgs = NULL
CacheHelper::$argSeparator = NULL
CacheHelper::$validationErrors = NULL
CacheHelper::$tags = array
CacheHelper::$__tainted = NULL
CacheHelper::$__cleaned = NULL
CacheHelper::$_log = NULL
$session	=	SessionHelper
SessionHelper::$helpers = NULL
SessionHelper::$__active = true
SessionHelper::$valid = false
SessionHelper::$error = false
SessionHelper::$_userAgent = "53e4901005ec6a75f56bf2bf59959da3"
SessionHelper::$path = "/"
SessionHelper::$lastError = NULL
SessionHelper::$security = NULL
SessionHelper::$time = 1292281819
SessionHelper::$sessionTime = false
SessionHelper::$watchKeys = array
SessionHelper::$id = NULL
SessionHelper::$_log = NULL
SessionHelper::$base = ""
SessionHelper::$webroot = "/"
SessionHelper::$here = "/img"
SessionHelper::$params = array
SessionHelper::$action = "view"
SessionHelper::$data = NULL
SessionHelper::$themeWeb = NULL
SessionHelper::$plugin = NULL
$metaKeywords	=	"YOU ART HERE"
$metaDescription	=	"YOU ART HERE"
$menu_artiste	=	array(
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
),
	array(
	"Artiste" => array(),
	"ArtisteCompte" => array(),
	"Site" => array(),
	"User" => array()
)
)
$connected_user	=	null
$is_admin	=	false
$item	=	array(
	array(
	"Site" => array(),
	"Gabarit" => array(),
	"Template" => array(),
	"PageBio" => array(),
	"PageWork" => array(),
	"PageContact" => array(),
	"PageEvenement" => array(),
	"PageGalerie" => array(),
	"Stat" => array(),
	"Artiste" => array()
)
)
$item_galery	=	array(
	array(
	"Theme" => array(),
	"Galery" => array(),
	"Media" => array()
)
)
$page	=	"img"
$souspage	=	""
$soussouspage	=	""
$cat_galery	=	false
$cat_theme	=	false
$page_css	=	""
$cat_menu	=	"&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;"
$CONTENT_PAGE	=	"
&lt;!-- HEADER --&gt;
&lt;div id=&quot;container&quot;&gt; 
	&lt;div id=&quot;content&quot;&gt;
		&lt;div id=&quot;content-header&quot;&gt;
		&lt;!-- LOGO --&gt;
		&lt;h1&gt;&lt;a href=&quot;http://bayan_left.you-art-here.com&quot; title=&quot; BAYAN LEFT : La simplicité sans limite... &quot;&gt;BAYAN LEFT&lt;/a&gt;&lt;/h1&gt;
		&lt;!-- // LOGO --&gt;
		&lt;h3&gt;La simplicité sans limite...&lt;/h3&gt;
&lt;/div&gt;
&lt;!-- MENU DE NAVIGATION --&gt; 
		&lt;div id=&quot;menu&quot;&gt;&lt;ul&gt;&lt;li&gt;&lt;a href=/biographie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Biographie &#039;&gt;Biographie&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/work target=&#039;_self&#039; title=&#039; BAYAN LEFT : Work &#039;&gt;Work&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=/galerie target=&#039;_self&#039; title=&#039; BAYAN LEFT : Galerie &#039;&gt;Galerie&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;
		&lt;!-- // MENU DE NAVIGATION --&gt; 
		&lt;!-- SOCIAL --&gt;
		&lt;div id=&quot;content-center&quot;&gt;
 &lt;div class=&#039;partager&#039;&gt;&lt;ul&gt; 
						&lt;li class=&#039;facebook&#039; title=&#039; BAYAN LEFT : Devenez Fan sur Facebook &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT :Devenez Fan sur Facebook &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;twitter&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;flickr&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;myspace&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
					&lt;/ul&gt; &lt;/div&gt;
		&lt;!-- // SOCIAL --&gt;
&lt;!-- // HEADER --&gt;

&lt;!-- HTML PAGE STANDARD --&gt;&lt;h2&gt;&lt;a href=&#039;/img&#039; title=&#039; BAYAN LEFT :  &#039;&gt;&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;/p&gt;
&lt;!-- // HTML PAGE STANDARD --&gt;

&lt;!-- FOOTER --&gt;
	&lt;div style=&quot;clear:both;&quot;&gt;
&lt;/div&gt;	
&lt;/div&gt;
&lt;!-- FOOTER YAH --&gt;
	&lt;div id=&quot;footer_yah&quot;&gt;
		&lt;div id=&quot;footer_yah_sub&quot;&gt;© 2009-2010 &lt;a href=&quot;http://you-art-here.com&quot; title=&quot; You Art Here // conception et développement &quot;&gt;You Art Here&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;!-- // FOOTER YAH --&gt;
&lt;/div&gt; 
&lt;!-- // FOOTER --&gt;
"
$CONTENT_GALERIE	=	"
&lt;!-- GALERIE --&gt;
&lt;div class=&quot;media_galerie&quot;&gt;
	&lt;a href=&quot;%URL_LIEN%&quot; rel=&quot;sexylightbox[mygalery]&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=80&amp;h=80&amp;zc=1&quot; width=&quot;80&quot; height=&quot;80&quot; alt=&quot; %TITRE_MEDIA% &quot; border=&quot;0&quot; /&gt;
		&lt;!-- &lt;p&gt;%TITRE_MEDIA%&lt;/p&gt;--&gt;
	&lt;/a&gt;
&lt;/div&gt;

&lt;!-- // GALERIE --&gt;
"
$CONTENT_THEMES	=	"
&lt;!-- THEME --&gt;
&lt;div class=&quot;media_theme&quot;&gt;
&lt;a href=&quot;%URL_LIEN%&quot; title=&quot; %TITRE_MEDIA% &quot;&gt;
		&lt;p style=&quot;margin:0 0 7px 0;&quot;&gt;| %TITRE_MEDIA%&lt;/p&gt;
&lt;img src=&quot;http://media.you-art-here.com/timthumb.php?src=%URL_MEDIA%&amp;w=370&amp;h=100&amp;zc=1&quot; width=&quot;370&quot; height=&quot;100&quot; alt=&quot; %TITRE_MEDIA% &quot; /&gt;
	&lt;/a&gt;
&lt;/div&gt;
&lt;div style=&quot;clear:both; height:10px;&quot;&gt;&lt;/div&gt;
&lt;!-- THEME --&gt;
"
$cat_content_text	=	null
$cat_content_img	=	null
$cat_form_sociaux	=	" &lt;div class=&#039;partager&#039;&gt;&lt;ul&gt; 
						&lt;li class=&#039;facebook&#039; title=&#039; BAYAN LEFT : Devenez Fan sur Facebook &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT :Devenez Fan sur Facebook &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;twitter&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Suivez-moi sur Twitter &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;flickr&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur flickr &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
						&lt;li class=&#039;myspace&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039;&gt;&lt;a href=&#039;#&#039; title=&#039; BAYAN LEFT : Regardez sur myspace &#039; target=&#039;_blank&#039;&gt;&lt;/a&gt;&lt;/li&gt; 
					&lt;/ul&gt; &lt;/div&gt;"
$cat_html_galery_1	=	""
$cat_html_galery_2	=	""
$cat_html_galery_3	=	""
$cat_html_galery_4	=	""
$cat_html_galery_6	=	""
$cat_html_galery_8	=	""
$cat_html_galery_9	=	""
$cat_html_galery_12	=	""
$cat_html_galery_16	=	""
$cat_html_galery	=	""
$cat_html_theme_1	=	""
$cat_html_theme_2	=	""
$cat_html_theme_3	=	""
$cat_html_theme_4	=	""
$cat_html_theme_6	=	""
$cat_html_theme_8	=	""
$cat_html_theme_9	=	""
$cat_html_theme_12	=	""
$cat_html_theme_16	=	""
$cat_html_theme	=	""
$cat_title_theme	=	""
$cat_title_img	=	"BAYAN LEFT : "
$cat_title	=	""
$cat_content_media	=	""
$cat_content_text_65	=	"&lt;div&gt; &lt;/div&gt;"
$array_content_text	=	array(
	""
)
$count	=	1
$cat_num	=	1
$cat_decoup	=	100
$i	=	1
$cat_form_contact	=	""
$TITLE_PAGE	=	"&lt;a href=&#039;/img&#039; title=&#039; BAYAN LEFT :  &#039;&gt;&lt;/a&gt;"
$cat_logo	=	"&lt;a href=&quot;http://bayan_left.you-art-here.com&quot; title=&quot; BAYAN LEFT : La simplicité sans limite... &quot;&gt;BAYAN LEFT&lt;/a&gt;"</pre><div id="CakeErrorCode5" class="cake-code-dump" style="display: none;"><pre><code><span style="color: #000000"></span></code>
<code><span style="color: #000000"></span></code>
<span class="code-highlight"><code><span style="color: #000000">if&nbsp;($content_page['body']&nbsp;==&nbsp;"")&nbsp;$CONTENT_PAGE&nbsp;=&nbsp;str_replace(array("id=\"content_text\""),&nbsp;"id=\"content_text\"&nbsp;style=\"display:none;visible:hidden;\"",&nbsp;$CONTENT_PAGE);</span></code></span>
</pre></div><pre>include - APP/views/sites/view.ctp, line 565
View::_render() - CORE/cake/libs/view/view.php, line 666
View::render() - CORE/cake/libs/view/view.php, line 376
Controller::render() - CORE/cake/libs/controller/controller.php, line 803
Dispatcher::_invoke() - CORE/cake/dispatcher.php, line 230
Dispatcher::dispatch() - CORE/cake/dispatcher.php, line 194
[main] - APP/webroot/index.php, line 88</pre></div>
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

<!-- HTML PAGE STANDARD --><h2><a href='/img' title=' BAYAN LEFT :  '></a></h2>
<p></p>
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
