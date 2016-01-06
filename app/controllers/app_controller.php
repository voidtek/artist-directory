<?php 
class AppController extends Controller { 
	
    var $helpers = array('Html', 'Form', 'Javascript', 'Cache'); 
 		var $uses = array('User', 'Content', 'Link', 'Artiste','ArtisteCategorie','Site','Galery','Theme','Media'); 
    
    var $cacheAction = 600;
    
    function beforeFilter() { 
    	
		$this->set('metaKeywords', "YOU ART HERE");
		$this->set('metaDescription', "YOU ART HERE");
		$this->set('title', "YOU ART HERE");
		
		$this->Artiste->order = 'Artiste.created DESC';
			
    	// $this->set('menu_content', $this->Content->find('all'));
    	// $this->set('menu_link', $this->Link->find('all'));
		/*
    	$cache_name = "views".DS."artistes-list.php"; 
		$cache_expires = '+24 hours'; 
		$cache_data = cache($cache_name, null, $cache_expires); 
		if (empty($cache_data)){ 
			$list = $this->Artiste->find('all',array('condition' => 'Site.annuaire = 1')); 
			cache($cache_name, serialize($list), $cache_expires); 
		} else { 
			$list = unserialize($cache_data); 
		} 
		$this->set('menu_artiste', $list);
    	*/
    	// $this->set('menu_categorie', $this->ArtisteCategorie->find('all'));
    	// $this->set('menu_site', $this->Site->find('all'));
   
      if($this->Session->check('User') == false) {
      	// $this->set('connected_user', $this->Session->read("User"));
		$this->set('connected_user', array());
      	$this->set('is_admin', false);
      } else{      	
      	$this->set('connected_user', $this->Session->read("User"));
      	$user = $this->Session->read("User");
      	if($this->viewVars['connected_user']['User']['admin'] == 1) $this->set('is_admin', true);
      	else $this->set('is_admin', false);
      }  
    } 
    
    function title2url($str = ""){
  	$str = strtolower($str);
  	$str = trim($str);
		$vowels = array("’", "!", "#", "$", "%", "&", "'", "-", "(", ")", "*", "+", ",", "\"", ".", "/", ":", ";", "<", "=", ">", "?", "@", "[", "\\", "]", "^", "_", "`", "{", "|", "}", "~", "¡", "¢", "£", "¤", "¥", "¦", "§", "¨", "©", "ª", "«", "¬", "­", "®", "¯", "°", "±", "²", "³", "´", "µ", "¶", "·", "¸", "¹", "º", "»", "¼", "½", "¾", "¿");
		$str = str_replace($vowels, "", $str);
		$str = trim($str);
		$vowels = array(" ");
		$str = str_replace($vowels, "-", $str);
		$vowels = array("------", "-----",  "----", "---", "--");
		$str = str_replace($vowels, "-", $str);
		$str = str_replace($vowels, "-", $str);
		$str = str_replace($vowels, "-", $str);
		$str = str_replace($vowels, "-", $str);
		$vowels = array("é", "è", "ê", "ë", "É", "È", "Ê" ,"Ë");
		$str = str_replace($vowels, "e", $str);
		$vowels = array("à", "â", "ä", "á", "ã", "À", "Á", "Â", "Ã", "Ä", "Å", "Æ");
		$str = str_replace($vowels, "a", $str);
		$vowels = array("ò", "ó", "ô", "ö", "õ", "Ò", "Ó", "Ô", "Õ", "Ö");
		$str = str_replace($vowels, "o", $str);
		$vowels = array("ì", "í", "î", "ï", "Ì", "Í", "Î", "Ï");
		$str = str_replace($vowels, "i", $str);
		$vowels = array("ç");
		$str = str_replace($vowels, "c", $str);
		$str = urlencode ($str);
		// $str = str_replace('+','-',$str); 
		return $str;
  }
   function report_mail($string_title = "REPORT", $string = "nothing", $nom_mail = 'Tech', $adresse_mail = 'vdacosta@voidtek.com'){
  		$boundary = uniqid('np');
			$headers =  "MIME-Version: 1.0\r\n";
			$headers .= "From: YOU-ART-HERE <contact@you-art-here.com>\r\n";
			$headers .= "Subject: ".$string_title."\r\n";
			$headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
			
			$message = "This is a MIME encoded message."; 
			$message .= "\r\n\r\n--" . $boundary . "\r\n";
			$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
			$message .= "Bonjour ".$nom_mail.",\r\n\r\n";
			$message .= "\r\n\r\n";
			$message .= "".$string."\r\n\r\n";
			// $message .= "IP : ".$_SERVER["REMOTE_ADDR"]."\r\n\r\n";
			
			$message .= "\r\n\r\n--" . $boundary . "\r\n";
			$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
			$message .= "<div style='background:#FFF; width:546px; padding:0; font-family:'Trebuchet MS', Arial, Verdana, sans-serif; font-size:10pt; margin:0 auto; border:1px solid #DDD; text-align:left;'> \n";
			$message .= "<div style='background:#2488c1; color:#FFF; margin:0; padding:10px; width:526px; text-align:left; font-family:´'Trebuchet MS', Arial, Verdana, sans-serif; font-size:10pt;'> \n";
			$message .= "<a href='http://you-art-here.com/' title='You-art-here : plate-forme communautaire artistique et culturelle' style='cursor:pointer;'><img src='http://media.you-art-here.com/img/commun/identite-visuelle/logo-pages-pt.png' style='border:0; margin:0; padding:0; width:300px; cursor:pointer;' /></a> \n";
			$message .= "</div> \n";
			$message .= "<div style='margin:0; padding:20px; width:506px; text-align:left;'> \n";
			$message .= "<p style='color:#808080; margin:10px 0 0 0; text-align:left; line-height:1.2em;'>Bonjour <b>$nom_mail</b>, \n";
			$message .= "<br /><br /> \n";
			$message .= "".$string." \n";
			$message .= "<br /><br /> \n";
			$message .= "<img src='http://media.you-art-here.com/img/yah/formulaire-inscription/line.jpg' style='width:100%; border:0;' /> \n";
			$message .= "<br /><br /> \n";
			$message .= "A très vite,<br />L'équipe <a href='http://you-art-here.com/' title='YOU-ART-HERE : plate-forme artistique et culturelle en ligne' style='color:#2488c1; font-weight:bold; text-decoration:none;'>YOU-ART-HERE</a></p> \n";
			$message .= "</div> \n";
			$message .= "</div> \n";
			
			$message .= "\r\n\r\n--" . $boundary . "--";
			
			mail($adresse_mail, $string_title, $message, $headers);
						 
  }
} 


define ("NODE_TYPE_START",0);
define ("NODE_TYPE_ELEMENT",1);
define ("NODE_TYPE_ENDELEMENT",2);
define ("NODE_TYPE_TEXT",3);
define ("NODE_TYPE_COMMENT",4);
define ("NODE_TYPE_DONE",5);
define ("NODE_TYPE_ELEMENT_END",6);

class HtmlParser {
    var $iNodeType;
    var $iNodeName = "";
		var $iNodeValue = "";
		var $iNodeAttributes;
		var $iNodeStart;
    var $iNodeEnd;
    var $iHtmlText;
    var $iHtmlTextLength;
    var $iHtmlTextIndex = 0;
    var $iHtmlCurrentChar;
    var $BOE_ARRAY;
    var $B_ARRAY;
    var $BOS_ARRAY;

    var $no_comment = false;

    var $BalisesSimples = array('hr', 'br', 'input', 'meta', 'link', 'img', 'area', 'param');

    function HtmlParser ($aHtmlText) {
        $this->iHtmlText = $aHtmlText;
        $this->iHtmlTextLength = strlen($aHtmlText);
        $this->iNodeAttributes = array();
        $this->setTextIndex (0);

        $this->BOE_ARRAY = array (" ", "\t", "\r", "\n", "=" );
        $this->B_ARRAY = array (" ", "\t", "\r", "\n" );
        $this->BOS_ARRAY = array (" ", "\t", "\r", "\n", "/" );
    }

    function parse() {
        $this->iNodeStart = $this->iHtmlTextIndex;
        $text = $this->skipToElement();
        if ($text != "") {
            $this->iNodeType = NODE_TYPE_TEXT;
            $this->iNodeName = "Text";
            $this->iNodeValue = $text;
            $this->iNodeEnd = $this->iHtmlTextIndex;
            return true;
        }
        return $this->readTag();
    }

    function clearAttributes() {
        $this->iNodeAttributes = array();
    }

    function readTag() {
        if ($this->iCurrentChar != "<") {
            $this->iNodeType = NODE_TYPE_DONE;
            return false;
        }
        $this->clearAttributes();
        $this->skipMaxInTag ("<", 1);
        if ($this->iCurrentChar == '/') {
            $this->moveNext();
            $name = $this->skipToBlanksInTag();
            if (strtolower($name) == 'script') {
                $this->no_comment = false;
            }
            $this->iNodeType = NODE_TYPE_ENDELEMENT;
            $this->iNodeName = $name;
            $this->iNodeValue = "";
            $this->skipEndOfTag();
            $this->iNodeEnd = $this->iHtmlTextIndex;
            return true;
        }
        $name = $this->skipToBlanksOrSlashInTag();
        if (!$this->isValidTagIdentifier ($name)) {
            $comment = false;
            if ((strpos($name, "!--") === 0) && (!$this->no_comment)) {
                $ppos = strpos($name, "--", 3);
                if (strpos($name, "--", 3) === (strlen($name) - 2)) {
                    $this->iNodeType = NODE_TYPE_COMMENT;
                    $this->iNodeName = "Comment";
                    $this->iNodeValue = "<" . $name . ">";
                    $comment = true;
                } else {
                    $rest = $this->skipToStringInTag ("-->");
                    if ($rest != "") {
                        $this->iNodeType = NODE_TYPE_COMMENT;
                        $this->iNodeName = "Comment";
                        $this->iNodeValue = "<" . $name . $rest;
                        $comment = true;
                        // Already skipped end of tag
                        $this->iNodeEnd = $this->iHtmlTextIndex;
                        return true;
                    }
                }
            }
            if (!$comment) {
                $this->iNodeType = NODE_TYPE_TEXT;
                $this->iNodeName = "Text";
                $this->iNodeValue = "<" . $name;
                $this->iNodeEnd = $this->iHtmlTextIndex;
                return true;
            }
        } else {
            if (strtolower($name) == 'script') {
                $this->no_comment = true;
            }
            $this->iNodeType = NODE_TYPE_ELEMENT;
            $this->iNodeValue = "";
            $this->iNodeName = $name;
            while ($this->skipBlanksInTag()) {
                $attrName = $this->skipToBlanksOrEqualsInTag();
                if ($attrName != "" && $attrName != "/") {
                    $this->skipBlanksInTag();
                    if ($this->iCurrentChar == "=") {
                        $this->skipEqualsInTag();
                        $this->skipBlanksInTag();
                        $value = $this->readValueInTag();
                        $this->iNodeAttributes[strtolower($attrName)] = $value;
                    } else {
                        $this->iNodeAttributes[strtolower($attrName)] = "";
                        $this->setTextIndex ($this->iHtmlTextIndex - 1);
                    }
                }
            }
        }
        if (($this->iHtmlText{$this->iHtmlTextIndex - 1} == '/') || (in_array($this->iNodeName, $this->BalisesSimples))) {
            $this->iNodeType = NODE_TYPE_ELEMENT_END;
        }
        $this->skipEndOfTag();
        $this->iNodeEnd = $this->iHtmlTextIndex;
        return true;
    }

    function isValidTagIdentifier ($name) {
        return ereg ("^[A-Za-z0-9_\\-]+$", $name);
    }

    function skipBlanksInTag() {
        return "" != ($this->skipInTag ($this->B_ARRAY));
    }

    function skipToBlanksOrEqualsInTag() {
    return $this->skipToInTag ($this->BOE_ARRAY);
    }

    function skipToBlanksInTag() {
        return $this->skipToInTag ($this->B_ARRAY);
    }

    function skipToBlanksOrSlashInTag() {
        return $this->skipToInTag ($this->BOS_ARRAY);
    }

    function skipEqualsInTag() {
        return $this->skipMaxInTag ("=", 1);
    }

    function readValueInTag() {
        $ch = $this->iCurrentChar;
        $value = "";
        if ($ch == "\"") {
            $this->skipMaxInTag ("\"", 1);
            $value = $this->skipToInTag ("\"");
            $this->skipMaxInTag ("\"", 1);
        } elseif ($ch == "'") {
            $this->skipMaxInTag ("'", 1);
            $value = $this->skipToInTag ("'");
            $this->skipMaxInTag ("'", 1);
        } else {
            $value = $this->skipToBlanksInTag();
        }
        return $value;
    }

    function setTextIndex ($index) {
        $this->iHtmlTextIndex = $index;
        if ($index >= $this->iHtmlTextLength) {
            $this->iCurrentChar = -1;
        } else {
            $this->iCurrentChar = $this->iHtmlText{$index};
        }
    }

    function moveNext() {
        if ($this->iHtmlTextIndex < $this->iHtmlTextLength) {
            $this->setTextIndex ($this->iHtmlTextIndex + 1);
            return true;
        } else {
            return false;
        }
    }

    function skipEndOfTag() {
        while (($ch = $this->iCurrentChar) !== -1) {
            if ($ch == ">") {
            $this->moveNext();
            return;
            }
            $this->moveNext();
        }
    }

    function skipInTag ($chars) {
        $sb = "";
        while (($ch = $this->iCurrentChar) !== -1) {
            if ($ch == ">") {
                return $sb;
            } else {
                $match = false;
                for ($idx = 0; $idx < count($chars); $idx++) {
                    if ($ch == $chars[$idx]) {
                    $match = true;
                    break;
                    }
                }
                if (!$match) {
                    return $sb;
                }
                $sb .= $ch;
                $this->moveNext();
            }
        }
        return $sb;
    }

    function skipMaxInTag ($chars, $maxChars) {
        $sb = "";
        $count = 0;
        while (($ch = $this->iCurrentChar) !== -1 && $count++ < $maxChars) {
            if ($ch == ">") {
                return $sb;
            } else {
                $match = false;
                for ($idx = 0; $idx < count($chars); $idx++) {
                    if ($ch == $chars[$idx]) {
                    $match = true;
                    break;
                    }
                }
                if (!$match) {
                    return $sb;
                }
                $sb .= $ch;
                $this->moveNext();
            }
        }
        return $sb;
    }

    function skipToInTag ($chars) {
        $sb = "";
        while (($ch = $this->iCurrentChar) !== -1) {
            $match = $ch == ">";
            if (!$match) {
                for ($idx = 0; $idx < count($chars); $idx++) {
                    if ($ch == $chars[$idx]) {
                        $match = true;
                        break;
                    }
                }
            }
            if ($match) {
                return $sb;
            }
            $sb .= $ch;
            $this->moveNext();
        }
        return $sb;
    }

    function skipToElement() {
        $sb = "";
        while (($ch = $this->iCurrentChar) !== -1) {
            if ($ch == "<") {
                return $sb;
            }
            $sb .= $ch;
            $this->moveNext();
        }
        return $sb;
    }

    function skipToStringInTag ($needle) {
        $pos = strpos ($this->iHtmlText, $needle, $this->iHtmlTextIndex);
        if ($pos === false) {
            return "";
        }
        $top = $pos + strlen($needle);
        $retvalue = substr ($this->iHtmlText, $this->iHtmlTextIndex, $top - 
$this->iHtmlTextIndex);
        $this->setTextIndex ($top);
        return $retvalue;
    }
}

function HtmlParser_ForFile ($fileName) { 
    return HtmlParser_ForURL($fileName);
}

function HtmlParser_ForURL ($url) {
    $fp = fopen ($url, "r");
    $content = "";
    while (true) {
        $data = fread ($fp, 8192);
        if (strlen($data) == 0) {
            break;
        }
        $content .= $data;
    }
    fclose ($fp);
    return new HtmlParser ($content);
}

function TronqueHtml($chaine, $max, $separateur = ' ', $suffix = ' ...') {
    
    $chaine = html_entity_decode($chaine,ENT_QUOTES,'UTF-8');
    $h2t =& new html2text($chaine);
    $chaine = $h2t->get_text();
    
    if (strlen(strip_tags($chaine)) > $max) {
        $tabElements = array();
        $cur_len = 0;
        $parser = new HtmlParser($chaine);
        while ($parser->parse()) {
            if ($parser->iNodeType == NODE_TYPE_ELEMENT) {
                array_push($tabElements, $parser->iNodeName);
            } elseif ($parser->iNodeType == NODE_TYPE_ENDELEMENT) {
                while (array_pop($tabElements) != $parser->iNodeName) {
                    if (count($tabElements) < 1) {
                        echo 'Erreur : pas de balise ouvrante pour ' . $parser->iNodeName;
                    }
                }
            } elseif ($parser->iNodeType == NODE_TYPE_TEXT) {
                $cur_max = $cur_len + $parser->iNodeEnd - $parser->iNodeStart;
                if ($cur_max == $max) {
                    $resultat = substr($chaine, 0, $parser->iNodeEnd) . $suffix;
                    while (($balise = array_pop($tabElements)) !== null) {
                        $resultat .= '</' . $balise . '>';
                    }
                    return $resultat;
                } elseif ($cur_max > $max) {
                    if (($pos = strrpos(substr($parser->iNodeValue, 0, ($max - $cur_len + strlen( $separateur ))), $separateur)) !== false) {
                        $resultat = substr($chaine, 0, $parser->iNodeStart + $pos) . $suffix;
                        while (($balise = array_pop($tabElements)) !== null) {
                            $resultat .= '</' . $balise . '>';
                        }
                        return $resultat;
                    } else {
                        $resultat = substr($chaine, 0, $parser->iNodeEnd) . $suffix;
                        while (($balise = array_pop($tabElements)) !== null) {
                            $resultat .= '</' . $balise . '>';
                        }
                        return $resultat;
                    }
                } else {
                    $cur_len += $parser->iNodeEnd - $parser->iNodeStart;
                }
            }
        }
    }
    $chaine = htmlentities($chaine, ENT_QUOTES, "UTF-8");
    return $chaine;
}

class html2text
{
    var $html;
    var $text;
    var $width = 70;
    var $search = array(
        "/\r/",                                  // Non-legal carriage return
        "/[\n\t]+/",                             // Newlines and tabs
        '/[ ]{2,}/',                             // Runs of spaces, pre-handling
        '/<script[^>]*>.*?<\/script>/i',         // <script>s -- which strip_tags supposedly has problems with
        '/<style[^>]*>.*?<\/style>/i',           // <style>s -- which strip_tags supposedly has problems with
        //'/<!-- .* -->/',                         // Comments -- which strip_tags might have problem a with
        '/<h[123][^>]*>(.*?)<\/h[123]>/ie',      // H1 - H3
        '/<h[456][^>]*>(.*?)<\/h[456]>/ie',      // H4 - H6
        '/<p[^>]*>/i',                           // <P>
        '/<br[^>]*>/i',                          // <br>
        '/<b[^>]*>(.*?)<\/b>/ie',                // <b>
        '/<strong[^>]*>(.*?)<\/strong>/ie',      // <strong>
        '/<i[^>]*>(.*?)<\/i>/i',                 // <i>
        '/<em[^>]*>(.*?)<\/em>/i',               // <em>
        '/(<ul[^>]*>|<\/ul>)/i',                 // <ul> and </ul>
        '/(<ol[^>]*>|<\/ol>)/i',                 // <ol> and </ol>
        '/<li[^>]*>(.*?)<\/li>/i',               // <li> and </li>
        '/<li[^>]*>/i',                          // <li>
        '/<a [^>]*href="([^"]+)"[^>]*>(.*?)<\/a>/ie',
                                                 // <a href="">
        '/<hr[^>]*>/i',                          // <hr>
        '/(<table[^>]*>|<\/table>)/i',           // <table> and </table>
        '/(<tr[^>]*>|<\/tr>)/i',                 // <tr> and </tr>
        '/<td[^>]*>(.*?)<\/td>/i',               // <td> and </td>
        '/<th[^>]*>(.*?)<\/th>/ie',              // <th> and </th>
        '/&(nbsp|#160);/i',                      // Non-breaking space
        '/&(quot|rdquo|ldquo|#8220|#8221|#147|#148);/i',
		                                         // Double quotes
        '/&(apos|rsquo|lsquo|#8216|#8217);/i',   // Single quotes
        '/&gt;/i',                               // Greater-than
        '/&lt;/i',                               // Less-than
        '/&(amp|#38);/i',                        // Ampersand
        '/&(copy|#169);/i',                      // Copyright
        '/&(trade|#8482|#153);/i',               // Trademark
        '/&(reg|#174);/i',                       // Registered
        '/&(mdash|#151|#8212);/i',               // mdash
        '/&(ndash|minus|#8211|#8722);/i',        // ndash
        '/&(bull|#149|#8226);/i',                // Bullet
        '/&(pound|#163);/i',                     // Pound sign
        '/&(euro|#8364);/i',                     // Euro sign
        '/&[^&;]+;/i',                           // Unknown/unhandled entities
        '/[ ]{2,}/'                              // Runs of spaces, post-handling
    );

     var $replace = array(
        '',                                     // Non-legal carriage return
        ' ',                                    // Newlines and tabs
        ' ',                                    // Runs of spaces, pre-handling
        '',                                     // <script>s -- which strip_tags supposedly has problems with
        '',                                     // <style>s -- which strip_tags supposedly has problems with
        //'',                                     // Comments -- which strip_tags might have problem a with
        "strtoupper(\"\n\n\\1\n\n\")",          // H1 - H3
        "ucwords(\"\n\n\\1\n\n\")",             // H4 - H6
        "\n\n\t",                               // <P>
        "\n",                                   // <br>
        'strtoupper("\\1")',                    // <b>
        'strtoupper("\\1")',                    // <strong>
        '_\\1_',                                // <i>
        '_\\1_',                                // <em>
        "\n\n",                                 // <ul> and </ul>
        "\n\n",                                 // <ol> and </ol>
        "\t* \\1\n",                            // <li> and </li>
        "\n\t* ",                               // <li>
        '$this->_build_link_list("\\1", "\\2")',
                                                // <a href="">
        "\n-------------------------\n",        // <hr>
        "\n\n",                                 // <table> and </table>
        "\n",                                   // <tr> and </tr>
        "\t\t\\1\n",                            // <td> and </td>
        "strtoupper(\"\t\t\\1\n\")",            // <th> and </th>
        ' ',                                    // Non-breaking space
        '"',                                    // Double quotes
        "'",                                    // Single quotes
        '>',
        '<',
        '&',
        '(c)',
        '(tm)',
        '(R)',
        '--',
        '-',
        '*',
        '£',
        'EUR',                                  // Euro sign.  ?
        '',                                     // Unknown/unhandled entities
        ' '                                     // Runs of spaces, post-handling
    );

    var $allowed_tags = '';
    var $url;
	  var $_converted = false;
    var $_link_list = '';
    var $_link_count = 0;
    function html2text( $source = '', $from_file = false )
    {
        if ( !empty($source) ) {
            $this->set_html($source, $from_file);
        }
        $this->set_base_url();
    }
    function set_html( $source, $from_file = false )
    {
        $this->html = $source;

        if ( $from_file && file_exists($source) ) {
            $fp = fopen($source, 'r');
            $this->html = fread($fp, filesize($source));
            fclose($fp);
        }

        $this->_converted = false;
    }

    function get_text()
    {
        if ( !$this->_converted ) {
            $this->_convert();
        }

        return $this->text;
    }

    function print_text()
    {
        print $this->get_text();
    }

    function p()
    {
        print $this->get_text();
    }

    function set_allowed_tags( $allowed_tags = '' )
    {
        if ( !empty($allowed_tags) ) {
            $this->allowed_tags = $allowed_tags;
        }
    }

    function set_base_url( $url = '' )
    {
        if ( empty($url) ) {
        	if ( !empty($_SERVER['HTTP_HOST']) ) {
	            $this->url = 'http://' . $_SERVER['HTTP_HOST'];
        	} else {
	            $this->url = '';
	        }
        } else {
            if ( substr($url, -1) == '/' ) {
                $url = substr($url, 0, -1);
            }
            $this->url = $url;
        }
    }
 
   function _convert()
    {
        $this->_link_count = 0;
        $this->_link_list = '';
				$text = trim(stripslashes($this->html));
				$text = preg_replace($this->search, $this->replace, $text);
				$text = strip_tags($text, $this->allowed_tags);
				$text = preg_replace("/\n\s+\n/", "\n\n", $text);
        $text = preg_replace("/[\n]{3,}/", "\n\n", $text);
				if ( !empty($this->_link_list) ) {
            $text .= "\n\nLinks:\n------\n" . $this->_link_list;
        }

        if ( $this->width > 0 ) {
        	$text = wordwrap($text, $this->width);
        }

        $this->text = $text;

        $this->_converted = true;
    }

    function _build_link_list( $link, $display )
    {
		if ( substr($link, 0, 7) == 'http://' || substr($link, 0, 8) == 'https://' ||
             substr($link, 0, 7) == 'mailto:' ) {
            $this->_link_count++;
            $this->_link_list .= "[" . $this->_link_count . "] $link\n";
            $additional = ' [' . $this->_link_count . ']';
		} elseif ( substr($link, 0, 11) == 'javascript:' ) {
			$additional = '';
		    } else {
            $this->_link_count++;
            $this->_link_list .= "[" . $this->_link_count . "] " . $this->url;
            if ( substr($link, 0, 1) != '/' ) {
                $this->_link_list .= '/';
            }
            $this->_link_list .= "$link\n";
            $additional = ' [' . $this->_link_count . ']';
        }

        return $display . $additional;
    }

}



function dateHTML($datetime='2010-11-11 20:45:08') {
	list($date, $time) = explode(' ', $datetime);
	list($date_a, $date_m, $date_j) = explode('-', $date);
	list($time_h, $time_m, $time_s) = explode(':', $time);
	$tab_mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
	$cat_dt = mktime($time_h,$time_m,$time_s,$date_m,$date_j,$date_a);
	$cat_now = mktime();
	
	$cat_dif = $cat_now - $cat_dt;
	if($cat_dif == 1) { $cat_str = "il y a ".$cat_dif." seconde"; return $cat_str; }
	if($cat_dif < 60) { $cat_str = "il y a ".$cat_dif." secondes"; return $cat_str; }
	$cat_dif = intval($cat_dif /= 60);
	if($cat_dif == 1) { $cat_str = "il y a ".$cat_dif." minute"; return $cat_str; }
	if($cat_dif < 60) { $cat_str = "il y a ".$cat_dif." minutes"; return $cat_str; }
	$cat_dif = intval($cat_dif /= 60);
	if($cat_dif == 1) { $cat_str = "il y a ".$cat_dif." heure"; return $cat_str; }
	if($cat_dif < 24) { $cat_str = "il y a ".$cat_dif." heures"; return $cat_str; }
	$cat_dif = intval($cat_dif /= 24);
	if($cat_dif == 1) { $cat_str = "il y a ".$cat_dif." jour"; return $cat_str; }
	if($cat_dif < 7) { $cat_str = "il y a ".$cat_dif." jours"; return $cat_str; }
	
	$cat_str = "le $date_j ".$tab_mois[$date_m];
	return $cat_str;
}


?>