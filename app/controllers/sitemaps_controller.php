
<?php
class SitemapsController extends AppController{

	var $name = 'Sitemaps';
	var $uses = array('Site');
  	var $helpers = array('Time', 'Xml');
	var $components = array('RequestHandler');

	function index (){	
		Configure::write ('debug', 0);
		$url_parts    = explode('.', env('HTTP_HOST')); 
		$subdomain    = strtolower(trim($url_parts[0])); 
		$str_url = $subdomain; 
		$this->set('item', $this->Site->find('all', array('conditions' => array('Site.url' => $str_url),'recursive' => 2)));
		if (sizeof($this->viewVars['item']) == 0) $this->redirect('http://you-art-here.com/404');
		
		$this->set('item_galery', $this->Theme->find('all', array('conditions' => array('id_galery' => $this->viewVars['item'][0]['PageGalerie']['id']))));
		$this->layout = 'xml';
	}

  
}
?>

