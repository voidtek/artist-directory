<?php 
header('Content-type: text/css');
echo $content_for_layout; 
?>

/* ------------- */
/* MESSAGE SITE ADULTE ONLY */
.is_adult-warning {text-align:center; font-size:9pt; font-family:Arial; color:#FFF; font-weight:normal;}
.modal {padding:20px; background:#000;}
.modal-head {margin-bottom:10px;}
.modal-head img {text-align:center; width:200px; border:0;}
.modal-head h1 {text-align:center;}
.modal_answer {text-align:center;}
.is_adult-answer {text-align:center; margin-top:20px;}
.adult_no {text-decoration:none; color:#0aa6df; margin-left:50px;}
.adult_yes {text-decoration:none; color:#0aa6df;}
.overlay_majeur {background: #000 url(_images/stripebg.png);height: 100%;left: 0px;position: fixed;top: 0px;width: 100%;z-index: 999;}
.overlay_majeur h1 {padding: 0px; margin: 0px;font-size: 20pt;color: white;font-family: Impact;text-transform: uppercase;font-weight: normal;}
.overlay_majeur a { font-size: 10pt;font-family: Arial;}
.fleche-modal {color:#FFF; font-weight:normal;}
.overlay_majeur {
background:transparent url(http://media.you-art-here.com/img/commun/fond-box-alpha/noir-alpha95.png); background-repeat:repeat; background-position:top left; 
/*
opacity : 0.95; 
    -moz-opacity : 0.95; 
    -ms-filter: "alpha(opacity=95)"; /* IE 8 */ 
    filter : alpha(opacity=95); /* IE < 8 */
*/
}