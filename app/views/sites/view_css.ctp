<?php 
// récupération du gabarit et remplissage
$CONTENT_CSS = $item[0]['Gabarit']['css'];
$CONTENT_CSS = str_replace(array("%css_body_fontfamily%"), $item[0]['Template']['css_body_fontfamily'], $CONTENT_CSS);
if ($item[0]['Template']['css_body_backgroundimage'] != "") $item[0]['Template']['css_body_backgroundimage'] = "http://media.you-art-here.com/timthumb.php?w=1900&h=1200&q=95&src=".$item[0]['Template']['css_body_backgroundimage']."&f=".substr(strrchr($item[0]['Template']['css_body_backgroundimage'], '.'), 1 );
$CONTENT_CSS = str_replace(array("%css_body_backgroundimage%"), $item[0]['Template']['css_body_backgroundimage'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_body_backgroundrepeat%"), $item[0]['Template']['css_body_backgroundrepeat'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_body_backgroundposition%"), $item[0]['Template']['css_body_backgroundposition'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_body_backgroundattachment%"), $item[0]['Template']['css_body_backgroundattachment'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_body_backgroundcolor%"), "#".$item[0]['Template']['css_body_backgroundcolor'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_backgroundimage%"), $item[0]['Template']['css_menu_backgroundimage'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_backgroundrepeat%"), $item[0]['Template']['css_menu_backgroundrepeat'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_backgroundposition%"), $item[0]['Template']['css_menu_backgroundposition'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_backgroundcolor%"), "#".$item[0]['Template']['css_menu_backgroundcolor'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_header_backgroundimage%"), $item[0]['Template']['css_header_backgroundimage'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_header_backgroundrepeat%"), $item[0]['Template']['css_header_backgroundrepeat'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_header_backgroundposition%"), $item[0]['Template']['css_header_backgroundposition'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_header_backgroundcolor%"), "#".$item[0]['Template']['css_header_backgroundcolor'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_content_backgroundimage%"), $item[0]['Template']['css_content_backgroundimage'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_content_backgroundrepeat%"), $item[0]['Template']['css_content_backgroundrepeat'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_content_backgroundposition%"), $item[0]['Template']['css_content_backgroundposition'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_content_backgroundcolor%"), "#".$item[0]['Template']['css_content_backgroundcolor'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_backgroundimage%"), $item[0]['Template']['css_footer_backgroundimage'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_backgroundrepeat%"), $item[0]['Template']['css_footer_backgroundrepeat'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_backgroundposition%"), $item[0]['Template']['css_footer_backgroundposition'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_backgroundcolor%"), "#".$item[0]['Template']['css_footer_backgroundcolor'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_a_fontfamily%"), $item[0]['Template']['css_menu_a_fontfamily'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_a_fontsize%"), $item[0]['Template']['css_menu_a_fontsize'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_a_color%"), "#".$item[0]['Template']['css_menu_a_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_a_texttransform%"), $item[0]['Template']['css_menu_a_texttransform'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_ahover_color%"), "#".$item[0]['Template']['css_menu_ahover_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h1_fontfamily%"), $item[0]['Template']['css_h1_fontfamily'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h1_fontsize%"), $item[0]['Template']['css_h1_fontsize'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h1_color%"), "#".$item[0]['Template']['css_h1_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h1_texttransform%"), $item[0]['Template']['css_h1_texttransform'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h2_fontfamily%"), $item[0]['Template']['css_h2_fontfamily'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h2_fontsize%"), $item[0]['Template']['css_h2_fontsize'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h2_color%"), "#".$item[0]['Template']['css_h2_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h2_texttransform%"), $item[0]['Template']['css_h2_texttransform'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h3_fontfamily%"), $item[0]['Template']['css_h3_fontfamily'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h3_fontsize%"), $item[0]['Template']['css_h3_fontsize'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h3_color%"), "#".$item[0]['Template']['css_h3_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h3_texttransform%"), $item[0]['Template']['css_h3_texttransform'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_p_fontfamily%"), $item[0]['Template']['css_body_fontfamily'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_p_fontsize%"), $item[0]['Template']['css_p_fontsize'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_p_color%"), "#".$item[0]['Template']['css_p_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_p_align%"), $item[0]['Template']['css_p_align'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_a_color%"), "#".$item[0]['Template']['css_a_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_ahover_color%"), "#".$item[0]['Template']['css_ahover_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_a_color%"), "#".$item[0]['Template']['css_footer_a_color'], $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_footer_ahover_color%"), "#".$item[0]['Template']['css_footer_ahover_color'], $CONTENT_CSS);


// $CONTENT_CSS = str_replace(array("%css_footervisible%"), $item[0]['Template']['css_footervisible'], $CONTENT_CSS);
// $CONTENT_CSS = str_replace(array("%css_p_lineheight%"), $item[0]['Template']['css_p_lineheight'], $CONTENT_CSS);
// $CONTENT_CSS = str_replace(array("%css_h3_lineheight%"), $item[0]['Template']['css_h3_lineheight'], $CONTENT_CSS);
// $CONTENT_CSS = str_replace(array("%css_h2_lineheight%"), $item[0]['Template']['css_h2_lineheight'], $CONTENT_CSS);
// $CONTENT_CSS = str_replace(array("%css_h1_lineheight%"), $item[0]['Template']['css_h1_lineheight'], $CONTENT_CSS);
// $CONTENT_CSS = str_replace(array("%css_menu_a_lineheight%"), $item[0]['Template']['css_menu_a_lineheight'], $CONTENT_CSS);

$CONTENT_CSS = str_replace(array("%css_p_lineheight%"), "130%", $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h3_lineheight%"), "130%", $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h2_lineheight%"), "130%", $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_h1_lineheight%"), "130%", $CONTENT_CSS);
$CONTENT_CSS = str_replace(array("%css_menu_a_lineheight%"), "130%", $CONTENT_CSS);


// Affichage de la page
echo $CONTENT_CSS;
echo $item[0]['Template']['bonus'];
?>