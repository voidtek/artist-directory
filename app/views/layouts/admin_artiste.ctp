<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title><?php echo ($item[0]['Site']['url']." | ".$item[0]['Site']['title']); ?></title>
		<?php // echo ($html->meta('description', $metaDescription)."\n"); ?>
		<?php // echo ($html->meta('keywords', $metaKeywords)."\n"); ?>
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
       <meta name="copyright" content="© 2010 You Art Here" />
       <meta name="author" content="YOU-ART-HERE" />
       <meta http-equiv="content-language" content="fr" />
       <meta http-equiv="Pragma" content="no-cache" />
				<meta http-equiv="X-UA-Compatible" content="IE=8" />
       <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
       <meta http-equiv="expires" content="0" />
       
       <!-- javascript Favicon -->
       <?php echo ($html->meta('icon')."\n"); ?>
				
		<style type="text/css" title="currentStyle"> 
			@import "/css/shadowbox.css";
			@import "/css/style_admin.css";
			@import "/css/jquery.notice.css";
		</style> 
		
		<!-- javascript JQuery -->
		<script type="text/javascript" src="/js/jquery/jquery-1.2.3.pack.js"></script> 
		<script type="text/javascript" src="/js/jquery/jquery.ifixpng.js"></script>
		<script type="text/javascript" src="/js/jnotice/jquery.notice.js"></script> 
		<SCRIPT type="text/javascript" language="javascript" src="http://admin.you-art-here.com/js/simpla.jquery.configuration.js"></SCRIPT> 
		<SCRIPT type="text/javascript" language="javascript" src="http://admin.you-art-here.com/js/jQuery/jquery.js"></SCRIPT> 
		<script type="text/javascript" src="/js/swfobject/swfobject.js"></script>
		
	</head>
	<body style='margin:0px; padding:0px;min-height:300px;overflow:hidden'>
		<div style='position:absolute; width:100%;height:100%; margin:0px; padding:0px;' id="site_admin">
			<IFRAME name='site_artiste' id='site_artiste' src="<?php echo('/'.$item[0]['Site']['url'].'/'.$page); ?>" width='100%' height='100%' scrolling=auto style="display:block; width:100%; height:100%; margin:0; padding:0; marginwidth:0; marginheight:0; paddingwidth:0; paddingheight:0; framespacing:0; frameborder:0; border:0;"></IFRAME>
		</div>
		<div style='position:absolute; right:0;  width:316px; height:100%; margin:0px; padding:0px;' id="panel_admin">
			<div>
				<div id='panel_admin_content'>
				<?php  // echo $content_for_layout; 	?>
				</div>
			</div>
		</div>
		<?php 
			echo"
				<script type='text/javascript'>
					var flashvars = {
						'xml': '/assets/www.dancetrippin.tv/media/DJ mixes/480/228.jpg'
					};
					var params = {
						'autoplay': 'true',
						'scale': 'noscale',
						'salign':'TL',
						'wmode':'transparent',
						'allowScriptAccess': 'always',
						'allowFullScreen': 'false'
					};
					swfobject.embedSWF('/swf/admin-panel.swf?t=1010041910', 'panel_admin_content', '100%', '2000px', '9.0.0', '/swf/expressInstall.swf', flashvars, params);
					</script>
				";
			?>
		<script type="text/javascript"> 
		$(document).ready(function()
		{
			cat_str = '<?php echo $session->flash(); ?>';
			cat_str = cat_str.substring(0,cat_str.length-1);
			if(cat_str != ""){
				jQuery.noticeAdd({
						text: cat_str,
						stay: false
					});
			}
		});
		
		$(window).resize(function(){
			// refresh_css();
			$("#site_admin").css("width",$(window).width()-$("#panel_admin").width());
		});
		$(window).load(function(){
			$("#site_admin").css("width",$(window).width()-$("#panel_admin").width());
		});
		
		function refresh_all(url_page){
			document.getElementById("site_artiste").src = <?php echo('/'.$item[0]['Site']['url'].'/'.$page); ?>;
		}
		
		function refresh_css(){
			var site_beta = (document.getElementById("site_artiste")).contentDocument;
			alert("refresh css : " + site_beta.refresh_css);
			site_artiste.refresh_css();
		}
		
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