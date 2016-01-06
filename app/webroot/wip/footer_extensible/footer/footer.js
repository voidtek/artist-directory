
/*
* OPTIONS GLOBALES
*/
// Variable externes et internes
// INTERNE
// Setup
// Contexte
pmData.server = "http://www.voidtek.com";
pmData.campaign = pmData.campaign;
pmData.baseUrl = pmData.server + "/wip/footer_extensible/";
pmData.jsFolder = "footer/";
pmData.flashFolder = "footer/";
pmData.flvFolder = "footer/";
pmData.jpgFolder = "footer/";
pmData.localScripts = ["pixiTween.js"];

// Scripts Generiques
pmData.template = "footer";
pmData.libUrl = pmData.server + "/wip/footer_extensible/footer/";
pmData.globalScripts = ["swfobject.js", "lib2.js", "events.js"];

// Tracking Agence
pmData.isPlay = false;
// EXTERNES

pmData.footer = pmData.footer || {
    name: '',
    width: '',
    heightIn: '',
    heightOut: ''
};


pmData.clickUrl = pmData.clickUrl;
pmData.soundMode = pmData.soundMode || "roll";
pmData.c1 = pmData.c1 || "";
pmData.c2 = pmData.c2 || "";
pmData.c3 = pmData.c3 || "";
pmData.startOnLoad = false; // asap ou onload
// FLASH
pmData.flashData = {
    flashvars: {
        baseUrl: pmData.baseUrl,
        jsFolder: pmData.jsFolder,
        flashFolder: pmData.flashFolder,
        flvFolder: pmData.flvFolder,
		flvName : "footer/"+pmData.footer.flv,
		urlMedia : pmData.urlmedia,
		flvPath : pmData.baseUrl,
        jpgFolder: pmData.jpgFolder,
        custom1: pmData.c1,
        custom2: pmData.c2,
        custom3: pmData.c3,
        clickTag: escape(pmData.clickUrl)
    },
    params: {
        loop: "true",
        menu: "false",
        quality: "high",
        salign: "bl",
        allowfullscreen: "true",
        allowscriptaccess: "always",
        wmode: "transparent",
        scale: 'noscale'
    },
    attributes: {
        salign: "bottom",
        wmode: "transparent",
		style: "position:absolute;bottom:0px;left:0px;"
    },
    params2: {
        loop: "true",
        menu: "false",
        quality: "high",
        salign: "bl",
        allowfullscreen: "true",
        allowscriptaccess: "always",
        wmode: "transparent",
        scale: 'noscale'
    },
    attributes2: {
        salign: "bottom",
        wmode: "transparent"
    }

};

pmData.minFlashVersion = "8.0.0";
/*
*  OPTIONS DES CREATIONS
*/
var pmCreativeOptions = {
	
	color :pmData.optionFooter.color,
	opacity : pmData.optionFooter.opacity,
	cta : pmData.callToAction,
    footer: {
        src: pmData.footer.name,
        width: pmData.footer.width,
        heightIn: pmData.footer.heightIn,
        heightOut: pmData.footer.heightOut,
        domId: 'pmExpandBannerContainer', 
        flashId: 'pmExpandBanner',
		isOpen : false 
    },
	btCloseFooter: {
		src: (pmData.optionFooter.btColor == 'black') ? 'bt_fermer_black.png' : 'bt_fermer_white.png',
		isActive : (pmData.optionFooter.bouton == 'fermer') ? true : false
	},
	btOpenFooter: {
		src: (pmData.optionFooter.btColor == 'black') ? 'agrandir_black.png' : 'agrandir_white.png',
		isActive : (pmData.optionFooter.bouton == 'reduire') ? true : false
	},
	ombre: {
		src: 'bg_4.png',
		isActive : pmData.optionFooter.ombre
	},
	overlay: {
		isActive : pmData.optionFooter.overlay || false, 
		opacity : pmData.optionFooter.opacityOverlay || 0,
		tempo : 0
	},
    customCode: {},
    siteCode: {}
}

pmCreativeOptions.siteCode.init = function(){
	
    try {
		pmAddEvent(window,'load',function(){setStage("initFooter")});
    } 
    catch (e) {
        pmWarn(e);
    }
};

pmCreativeOptions.siteCode.initFooter = function(){
	
    try {
		var creative = "footer";
		var pmHtml ;

		if(pmCreativeOptions.overlay.isActive){
			pmHtml = "<div id='pmOverlay'></div>";
			pmHtml += "<div id='pmfooterbar'><div id='pmOmbre'></div><div id='pmfooterbartransparent'>";
		}else{
			pmHtml = "<div id='pmfooterbar'><div id='pmOmbre'></div><div id='pmfooterbartransparent'>";
		}
	
		if(pmCreativeOptions.btCloseFooter.isActive)
			pmHtml += "<div id='pmfooterbarBtFermer' onclick='setStage(\"closeFooter\");' style='cursor:pointer;'><img src='"+ pmData.libUrl+"footer/"+ pmCreativeOptions.btCloseFooter.src +"' style='border:none'/></div>";
		else if(pmCreativeOptions.btOpenFooter.isActive)
				pmHtml += "<div id='pmBtReduire'><div id='pmFlashBtReduire'></div></div>";


		pmHtml += "</div><div id='pmFlashBannerContainer'><div id='pmFlashBanner' ><!-- <a href='" + pmData.clickUrl + "'></a> --></div><div id='pmExpandBannerContainer' onmouseout='setStage(\"hide\");' ><div id='pmExpandBanner'></div></div></div></div>";

        //SPECIFIQUE FOOTER GENERIQUE
        $innerInsert('before', $tag('body'), pmHtml);
        
        //CONTENEUR FOOTER
        $dom("pmfooterbar").style.position = "fixed";
        $dom("pmfooterbar").style.width = "100%";
        $dom("pmfooterbar").style.height = (pmCreativeOptions[creative].heightIn + 10) +"px";
        $dom("pmfooterbar").style.bottom = "-36px";
        $dom("pmfooterbar").style.left = "0px";
        $dom("pmfooterbar").style.padding = "0";
        $dom("pmfooterbar").style.margin = "0";
        $dom("pmfooterbar").style.zIndex = "99999999";
            
		if(msie)
		$dom("pmfooterbar").style.visibility = "hidden";
		else
		$dom("pmfooterbar").style.opacity = "0.0001";

	//OVERLAY
	if(pmCreativeOptions.overlay.isActive){
	
	if(msie)
	$dom("pmOverlay").style.filter = "alpha(opacity=0)";
	
	$dom("pmOverlay").style.opacity = "0";						
	$dom("pmOverlay").style.width = "100%";
	$dom("pmOverlay").style.height = screen.availHeight+"px";
	$dom("pmOverlay").style.backgroundColor = "#FFF";
	$dom("pmOverlay").style.overflow = "hidden";
	$dom("pmOverlay").style.left = "0";
	$dom("pmOverlay").style.position = "fixed";
	$dom("pmOverlay").style.bottom = pmCreativeOptions[creative].heightIn+"px";
	$dom("pmOverlay").style.display = "none" ;
	$dom("pmOverlay").style.zIndex = "9999" ;
	}
	
	//OMBRE FOOTER
	if(pmCreativeOptions.ombre.isActive){
	$dom("pmOmbre").style.position = "relative";
	$dom("pmOmbre").style.width = "100%";
	$dom("pmOmbre").style.height = "10px";
	$dom("pmOmbre").style.padding = "0";
	$dom("pmOmbre").style.margin = "0";
	$dom("pmOmbre").style.zIndex = "9999";
	$dom("pmOmbre").style.backgroundImage = "url("+pmData.libUrl+pmCreativeOptions.ombre.src+")";
	$dom("pmOmbre").style.backgroundRepeat = "repeat-x" ;
	}
	
	//BOUTONS
	if(pmCreativeOptions.btCloseFooter.isActive || pmCreativeOptions.btOpenFooter.isActive){
	$dom("pmBtReduire").style.width = "100px";
	$dom("pmBtReduire").style.height = "20px";
	$dom("pmBtReduire").style.position = "relative";
	
	if (msie != 7 )$dom("pmBtReduire").style.left = "100%";
	if (msie != 7 )$dom("pmBtReduire").style.marginLeft = "-100px";
	
	$dom("pmBtReduire").style.top = "10px";
	}
						
	        $dom("pmfooterbartransparent").style.width = "100%";
	        $dom("pmfooterbartransparent").style.height = pmCreativeOptions[creative].heightIn + "px";
	        //$dom("pmfooterbartransparent").style.backgroundColor = pmCreativeOptions.color;
	        $dom("pmfooterbartransparent").style.backgroundImage = "url("+pmData.baseUrl+"footer/bg.png)";
	
	$dom("pmfooterbartransparent").style.position = "relative";
	        $dom("pmfooterbartransparent").style.left = "0";
	        $dom("pmfooterbartransparent").style.top = "0px";
	        $dom("pmfooterbartransparent").style.textAlign = "right";
	        $dom("pmfooterbartransparent").style.zIndex = "9999";
	        
	       
	        $dom("pmFlashBannerContainer").style.position = "relative";
	        $dom("pmFlashBannerContainer").style.width = pmCreativeOptions[creative].width + "px";
	        $dom("pmFlashBannerContainer").style.height = pmCreativeOptions[creative].heightIn + "px";
	        $dom("pmFlashBannerContainer").style.top = "-40px";
	        if(msie != 7 || pmData.c1 == "BELM" || pmData.c1 == "COTEMAISON")$dom("pmFlashBannerContainer").style.left = "50%";
	        if(msie != 7 || pmData.c1 == "BELM" || pmData.c1 == "COTEMAISON")$dom("pmFlashBannerContainer").style.right = "0";
	        if(msie != 7 || pmData.c1 == "BELM" || pmData.c1 == "COTEMAISON")$dom("pmFlashBannerContainer").style.marginLeft = "-"+(pmCreativeOptions[creative].width/2)+"px";
	
	        $dom("pmFlashBannerContainer").style.zIndex = "10000";
	        $dom("pmFlashBannerContainer").style.opacity = "1";
	        
	        $dom("pmExpandBannerContainer").style.position = "relative";
	        $dom("pmExpandBannerContainer").style.top = "0px";
	        $dom("pmExpandBannerContainer").style.left = "0px";
	        $dom("pmExpandBannerContainer").style.zIndex = "100000";
	        $dom("pmExpandBannerContainer").style.width = pmCreativeOptions[creative].width + "px";
	        $dom("pmExpandBannerContainer").style.height = pmCreativeOptions[creative].heightIn + "px";
	        $dom("pmExpandBannerContainer").style.display = "block";
	        $dom("pmExpandBannerContainer").style.overflow = "hidden";
	            
	  
	        var flashvars = pmData.flashData.flashvars;
	        var attributes = pmData.flashData.attributes;
	        var params = pmData.flashData.params;
	//var height = (!msie) ? (pmData[creative].heightOut + 'px' ) : "100%" ;
	var height = pmData[creative].heightOut + 'px' ;
	
	//SPECIALE BELM
	pmData.flashData.params.wmode = pmData.flashData.attributes.wmode = (pmData.c1 == "CONSTRUIRESAMAISON") ? "window" : "transparent" ;
	
	        swfobject.embedSWF(pmData.baseUrl + pmData.flashFolder + pmCreativeOptions[creative].src + ".swf", pmCreativeOptions[creative].flashId, pmData[creative].width + 'px', height, pmData.minFlashVersion, false, flashvars, params, attributes);
	       	
	
	//BOUTON REDUIRE - AGRANDIR EN FLASH
	        var attributes2 = pmData.flashData.attributes2;
	        var params2 = pmData.flashData.params2;
	
			if(pmCreativeOptions.btOpenFooter.isActive)
				swfobject.embedSWF(pmData.libUrl+"btn_footer_black.swf", "pmFlashBtReduire",'100px', '20px', pmData.minFlashVersion, false, flashvars, params2, attributes2);
	    } 
	    catch (e) {
	if(e=="page not ready")
        pmWarn(e);
    }
};        



pmCreativeOptions.customCode.doShow = function(){
	try{
	$dom("pmExpandBannerContainer").style.height = pmCreativeOptions.footer.heightOut + "px";
	$dom("pmExpandBannerContainer").style.top = "-" + (pmCreativeOptions.footer.heightOut - 40) + "px";
	
	var time = (msie) ? 0 : 1500 ;
	//pmCreativeOptions.overlay.tempo = setTimeout("setStage('doOverlay','open')",time);
	
	}catch(e){
	pmWarn(e);
	}
}

pmCreativeOptions.customCode.doHide = function(){
	
try{
$dom("pmExpandBannerContainer").style.height = pmCreativeOptions.footer.heightIn + "px";
$dom("pmExpandBannerContainer").style.top = "0px";

//setStage("doOverlay","close");

}catch(e){
pmWarn(e);	
}
}

pmCreativeOptions.customCode.doOverlay = function(mode){
	
pmLog("Overlay mode: "+mode);
clearTimeout(pmCreativeOptions.overlay.tempo);

switch(mode){

case "open" :
try{
if(pmCreativeOptions.overlay.isActive && $dom("pmOverlay").style.opacity < (pmCreativeOptions.overlay.opacity/100)){

$dom("pmOverlay").style.display = "block";
var elementValue = ($dom("pmOverlay").style.opacity);

if(msie && pmCreativeOptions.footer.isOpen)
$dom("pmOverlay").style.filter = "alpha(opacity="+pmCreativeOptions.overlay.opacity+")" ;
else if(pmCreativeOptions.footer.isOpen)
pmTransition('pmOverlay','opacity','',0,(pmCreativeOptions.overlay.opacity/100),500,10);
}
}catch(e){
pmWarn(e);	
}
break;

case "close" :
try{
if((pmCreativeOptions.overlay.isActive == true) && ( ($dom("pmOverlay").style.opacity != "0")  || ($dom("pmOverlay").style.filter != "alpha(opacity=0)") ) ){
if(!msie)
$dom("pmOverlay").style.opacity = 0 ;
else
$dom("pmOverlay").style.filter = "alpha(opacity=0)" ;


$dom("pmOverlay").style.display = "none" ;
}
}catch(e){
pmWarn(e);
}
break;

}
}

pmCreativeOptions.customCode.hide = function(){

    //$flash('pmExpandBanner','hide');
	setStage('tracking','HIDE');
	setStage('doHide');
}

pmCreativeOptions.customCode.show = function(){
	setStage('tracking','SHOW'); 
	setStage('doShow');
}

pmCreativeOptions.customCode.fermer = function(){
	setStage('doHide');
	setStage('tracking','FERMER');
}

pmCreativeOptions.customCode.closeFooter = function(){
	$dom("pmfooterbar").style.display = "none" ;
	setStage('tracking','CLOSEFOOTER');
}

pmCreativeOptions.customCode.hideFooter = function(){
	
	var elementValue1 = parseInt($dom("pmfooterbar").style.bottom) ;
	var elementValue2 = $dom("pmFlashBannerContainer").offsetHeight;
	
	pmCreativeOptions.footer.isOpen = false;
	pmTransition('pmfooterbar','bottom','px',elementValue1,-20,1500,80,ease={type:'out'},onComplete={fct:"pmCreativeOptions.footer.isOpen = true;$dom(\"pmExpandBanner\").style.display = \"none\";"});
	
	$dom("pmFlashBannerContainer").style.color = (pmData.optionFooter.btColor == 'black') ? '#000000' : '#ffffff';
	$dom("pmFlashBannerContainer").align = "center";
	$dom("pmFlashBannerContainer").style.fontFamily = "Arial";
	
	$dom("pmBtReduire").style.top = "0px";
	
	if(!pHtml){
	var pHtml = "<div id='cta' onclick='setStage(\"openFooter\");' style='cursor:pointer;'>"+pmCreativeOptions.cta+"</div>" ;
	$innerInsert("before",$dom("pmExpandBannerContainer"),pHtml);
	}else{
	$dom("cta").style.display = "block";
	}
}


pmCreativeOptions.customCode.openFooter = function(){
	try{
		var elStyle = $dom("pmfooterbar").style ;
		
		if(parseInt(elStyle.bottom) <= -20){
		elStyle.bottom = (elStyle.bottom == "-36px") ? "-50px" : "-20px" ;
		
		var time = (elStyle.bottom == "-36px") ? 2000 : 1500 ; //2000 -> Arrivé du footer à l'écran en Ms     1500 -> Ouverture du footer lors du click sur agrandir   				
		
		pmCreativeOptions.footer.isOpen = false;
		
		pmTransition('pmfooterbar','bottom','px',parseInt(elStyle.bottom),0,time,80,ease={type:'out'},onComplete={fct:"pmCreativeOptions.footer.isOpen = true;"});
		//             ID       /     PROP / EXT   /      DEPART   /   ARRIVE/TEMPS/IPS/EASE OUT-IN / ONCOMPLETE fct:'yoyo' - fct:'bounce' - autres fonction
	}

if(msie)
	$dom("pmfooterbar").style.visibility = "visible";
	else
	$dom("pmfooterbar").style.opacity = "1";
	
	$dom("pmExpandBanner").style.display = "block";
	
	if($dom("cta"))
	$dom("cta").style.display = "none";
	
	$dom("pmBtReduire").style.top = "10px";
	
	if(msie)
	$dom("pmExpandBanner").style.filter = "alpha(opacity=100)";
	
	}catch(e){
	pmWarn(e);
	}
}

function loadAllScript(){
    for (i = 0; i < pmData.globalScripts.length; i++) {
        document.write("<script src='" + pmData.libUrl + pmData.globalScripts[i] + "' ></script>");
    }
    for (i = 0; i < pmData.localScripts.length; i++) 
        document.write("<script src='" + pmData.baseUrl + pmData.jsFolder + pmData.localScripts[i] + "' ></script>");
}

loadAllScript();

var msie = getInternetExplorerVersion();
  
function getInternetExplorerVersion(){
    var rv = false; // Return value assumes failure.
    if (navigator.appName == 'Microsoft Internet Explorer') {
        var ua = navigator.userAgent;
        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null) 
            rv = parseFloat(RegExp.$1);
    }
    return rv;
}

