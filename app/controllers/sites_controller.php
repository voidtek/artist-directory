<?php  
class SitesController extends AppController 
{ 
    var $name = "Sites"; 
    var $helpers = array('Html', 'Form', 'Xml'); 
    
    function index() {
    	$this->set('sites', $this->Site->find('all'));  
    }
    
    function edit($str_url = "",$str_page = "",$str_souspage = "") {  
    	
    	$user_connecte = $this->Session->read('User'); 
    	if($user_connecte){
			if($user_connecte["Site"]["url"] != $str_url) $this->redirect("$str_page/$str_souspage");
		}else{
			$this->redirect("$str_page/$str_souspage");
		}
    	$this->layout = 'admin_artiste'; 
    	// edition site
    	$this->set('page',$str_page);
    	$this->data = $this->Site->find('all', array('conditions' => array('Site.url' => $str_url)));
    	$this->set('item', $this->data);
    	$this->data = $this->data[0];
    	$this->set('select_gabarit', $this->Site->Gabarit->find('list', array('order' => array('Gabarit.title ASC'))));
    	
    }
    
    function save($id = ""){
    	   	
      // creation site
      if(!empty($this->data['PageBio'])){
	      if(($this->data['PageBio']['id'] == "0") || ($this->data['PageBio']['id'] == "")){
	  			$this->Site->PageBio->create();
	  			$this->Site->PageBio->save($this->data['PageBio']);
	  			$this->data['Site']['id_page_bio'] = $this->Site->PageBio->id;
	    	}else{
	    		if($this->data['PageBio']['meta_url'] == "")
	    			$this->data['PageBio']['meta_url'] = $this->title2url($this->data['PageBio']['title'],"bio");
	    	}
	    }
      if(!empty($this->data['PageWork'])){
	    	if(($this->data['PageWork']['id'] == "0") || ($this->data['PageWork']['id'] == "")){
	  			$this->Site->PageWork->create();
	  			$this->Site->PageWork->save($this->data['PageWork']);
	  			$this->data['Site']['id_page_work'] = $this->Site->PageWork->id;
	    	}else{
	    		if($this->data['PageWork']['meta_url'] == "")
	    			$this->data['PageWork']['meta_url'] = $this->title2url($this->data['PageWork']['title'],"work");
	    	}
	    }
      if(!empty($this->data['PageContact'])){
	    	if(($this->data['PageContact']['id'] == "0") || ($this->data['PageContact']['id'] == "")){
	  			$this->Site->PageContact->create();
	  			$this->Site->PageContact->save($this->data['PageContact']);
	  			$this->data['Site']['id_page_contact'] = $this->Site->PageContact->id;
	    	}else{
	    		if($this->data['PageContact']['meta_url'] == "")
	    			$this->data['PageContact']['meta_url'] = $this->title2url($this->data['PageContact']['title'],"contact");
	    	}
	    }
      if(!empty($this->data['PageEvenement'])){
	    	if(($this->data['PageEvenement']['id'] == "0") || ($this->data['PageEvenement']['id'] == "")){
	  			$this->Site->PageEvenement->create();
	  			$this->Site->PageEvenement->save($this->data['PageEvenement']);
	  			$this->data['Site']['id_page_evenements'] = $this->Site->PageEvenement->id;
	    	}else{
	    		if($this->data['PageEvenement']['meta_url'] == "")
	    			$this->data['PageEvenement']['meta_url'] = $this->title2url($this->data['PageEvenement']['title'],"evenements");
	    	}
	    }
      if(!empty($this->data['PageGalerie'])){
	    	if(($this->data['PageGalerie']['id'] == "0") || ($this->data['PageGalerie']['id'] == "")){
	  			$this->Site->PageGalerie->create();
	  			$this->Site->PageGalerie->save($this->data['PageGalerie']);
	  			$this->data['Site']['id_page_galerie'] = $this->Site->PageGalerie->id;
	    	}else{
	    		if($this->data['PageGalerie']['meta_url'] == "")
	    			$this->data['PageGalerie']['meta_url'] = $this->title2url($this->data['PageGalerie']['title'],"galerie");
	    	}
	    }
      if(!empty($this->data['Template'])){
	    	if(($this->data['Template']['id'] == "0") || ($this->data['Template']['id'] == "")){
	  			$this->Site->Template->create();
	  			$this->Site->Template->save($this->data['Template']);
	  			$this->data['Site']['id_template'] = $this->Site->Template->id;
	    	}
	    }
    	
      // $this->Site->create();
      if ($this->Site->saveAll($this->data)) {
      	$this->Session->setFlash('<DIV class="notification information png_bg"><a href="#" class="close"><IMG src="/img/cross_grey_small.png" title="Fermer" alt="fermer"></A><DIV>L\'enregistrement du lien est un succés.</DIV></DIV>'); 
      }
      else {
      	$this->Session->setFlash('<DIV class="notification error png_bg"><a href="#" class="close"><IMG src="/img/cross_grey_small.png" title="Fermer" alt="fermer"></A><DIV>L\'enregistrement du lien a échoué.</DIV></DIV>'); 
      }
      if (!empty($this->data['Site']['pageto'])) $this->redirect('/'.$this->data['Site']['url'].'/admin/'.$this->data['Site']['pageto']);
      else $this->redirect('/'.$this->data['Site']['url'].'/admin/');
    }
    
    
   function view($str_page = "",$str_souspage = "",$str_soussouspage = "") { 
   		
		// $url_parts    = explode('.', env('HTTP_HOST')); 
		$url_parts    = explode('.', $_SERVER['SERVER_NAME']); 
		$subdomain    = strtolower(trim($url_parts[0])); 
		$str_url = $subdomain;  
		
		$this->set('item', $this->Site->find('all', array('conditions' => array('Site.url' => $str_url),'recursive' => 2)));
		
		//test de la page
		if (sizeof($this->viewVars['item']) == 0) $this->redirect('http://website.you-art-here.com/annuaire');
		
		$this->set('metaImage', ""); 
		$this->set('metaDescription', ""); 
		$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category'])); 
		 
		if($this->viewVars['item'][0]['Site']['publishing'] == 1) $this->set('metaIndex', true); 
		else $this->set('metaIndex', false); 
		
		// test de la page en version light
		if ($this->viewVars['item'][0]['Artiste'][0]['ArtisteCompte']['statut'] == 'light'){
			if($str_page == $this->viewVars['item'][0]['PageContact']['meta_url']) $this->redirect('http://'.$str_url.'.you-art-here.com/');
			if($str_page == $this->viewVars['item'][0]['PageEvenement']['meta_url']) $this->redirect('http://'.$str_url.'.you-art-here.com/');
		}
		$this->set('item_galery', $this->Theme->find('all', array('conditions' => array('id_galery' => $this->viewVars['item'][0]['PageGalerie']['id']))));
		
		// test de la souspage
		if($str_souspage != ""){
			$cat_test = true;
			foreach($this->viewVars['item_galery'] as $itemtest){
				if($str_souspage == $itemtest['Theme']['url']) { 
					$cat_test = false;
					// test de la soussouspage
					if($str_soussouspage != ""){
						$cat_test2 = true;
						foreach($itemtest['Media'] as $itemtest2){
							if($str_soussouspage == $itemtest2['url']) { $cat_test2 = false; break; }
						}
						if($cat_test2) { $this->redirect('http://'.$str_url.'.you-art-here.com/'); return; }
					}
					break;
				}
			}
			if($cat_test) { $this->redirect('http://'.$str_url.'.you-art-here.com/'); return; }
		}
		
		$this->set('page',$str_page);
		$this->set('souspage',$str_souspage);
		$this->set('soussouspage',$str_soussouspage);
		
		$stat["id_site"] = $this->viewVars['item'][0]['Site']['id'];
		// debug($this->viewVars['connected_user']['Site'][id]);
		switch($this->viewVars['item'][0]['Site']['page_home']){
		case('1'): 	$page = $this->viewVars['item'][0]['PageBio']['id']; break;
		case('2'): 	$page = $this->viewVars['item'][0]['PageWork']['id']; break;
		case('3'): 	$page = $this->viewVars['item'][0]['PageContact']['id']; break;
		case('4'): 	$page = $this->viewVars['item'][0]['PageEvenement']['id']; break;
		case('5'): 	$page = $this->viewVars['item'][0]['PageGalerie']['id']; break;
		default: $page = $this->viewVars['item'][0]['PageBio']['id']; break;
		}
		if($this->viewVars['item'][0]['PageBio']['meta_url'] == $str_page) { $stat["id_content"] = $this->viewVars['item'][0]['PageBio']['id']; }
		else if($this->viewVars['item'][0]['PageWork']['meta_url'] == $str_page) { $stat["id_content"] = $this->viewVars['item'][0]['PageWork']['id']; }
		else if($this->viewVars['item'][0]['PageContact']['meta_url'] == $str_page) { $stat["id_content"] = $this->viewVars['item'][0]['PageContact']['id'];}
		else if($this->viewVars['item'][0]['PageEvenement']['meta_url'] == $str_page) { $stat["id_content"] = $this->viewVars['item'][0]['PageEvenement']['id']; }
		else if($this->viewVars['item'][0]['PageGalerie']['meta_url'] == $str_page) { $stat["id_content"] = $this->viewVars['item'][0]['PageGalerie']['id']; }
		else if("" == $str_page) { $stat["id_content"] = $page; }
		else { $stat["id_content"] = '0'; }
		
		// les stats
		
		if(isset($_SERVER["REMOTE_ADDR"])) $stat["ip"] = $_SERVER["REMOTE_ADDR"];
		if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) $stat["language"] = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
		if(isset($_SERVER["HTTP_REFERER"])) $stat["referer"] = $_SERVER["HTTP_REFERER"];
		if(isset($_SERVER["HTTP_USER_AGENT"])) $stat["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
		// $stat["debug"] = '/'.$str_url.'/'.$str_page.'/'.$str_souspage.'/'.$str_soussouspage;
		$stat["debug"] = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
	
		if(isset($this->viewVars['connected_user']['Artiste'])){
			$stat["id_connected"] = $this->viewVars['connected_user']['Artiste']['id'];
			if($this->viewVars['connected_user']['Site']['id'] != $stat["id_site"]){
				$this->Site->Stat->create();
				if($stat["id_content"] != "") $this->Site->Stat->save($stat);
			}
		}else{
			$stat["id_connected"] = 0;
			$this->Site->Stat->create();
			if($stat["id_content"] != "") $this->Site->Stat->save($stat);
		}
		
		if($this->viewVars['item'][0]['PageBio']['meta_url'] == $str_page) { 
			$this->set('metaImage', $this->viewVars['item'][0]['PageBio']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageBio']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageBio']['title'])); }
		else if($this->viewVars['item'][0]['PageWork']['meta_url'] == $str_page) { 
			$this->set('metaImage', $this->viewVars['item'][0]['PageWork']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageWork']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageWork']['title']));  }
		else if($this->viewVars['item'][0]['PageContact']['meta_url'] == $str_page) { 
			$this->set('metaImage', $this->viewVars['item'][0]['PageContact']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageContact']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageContact']['title']));  }
		else if($this->viewVars['item'][0]['PageEvenement']['meta_url'] == $str_page) { 
			$this->set('metaImage', $this->viewVars['item'][0]['PageEvenement']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageEvenement']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageEvenement']['title']));  }
		else if($this->viewVars['item'][0]['PageGalerie']['meta_url'] == $str_page) { 
			$this->set('metaImage', $this->viewVars['item'][0]['PageGalerie']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageGalerie']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageGalerie']['title']));  }
		else if("" == $str_page) { 
			$this->set('metaImage',$this->viewVars['item'][0]['PageBio']['img']); 
			$this->set('metaDescription',  htmlspecialchars($this->viewVars['item'][0]['PageBio']['body']));
			$this->set('metaTitle', ($this->viewVars['item'][0]['Site']['title'].", ".$this->viewVars['item'][0]['Artiste'][0]['category']." - ".$this->viewVars['item'][0]['PageBio']['title']));  }
		
		if($this->Session->check('authorized')){
			$this->set('authorized',1); 
		}else{
			if(isset($_GET['a'])) {
			  $this->Session->write('authorized', 1); 
				$this->set('authorized',1); 
			}else {
				$this->set('authorized',0); 
			}
		}
	}
    
    function view_css() { 
   	  $this->layout = 'css'; 
    	$url_parts    = explode('.', $_SERVER['SERVER_NAME']); 
		$subdomain    = strtolower(trim($url_parts[0])); 
		$str_url = $subdomain;
		
		$str_url = str_replace(array(".css"),"", $str_url);
    	$this->set('item', $this->Site->find('all', array('conditions' => array('Site.url' => $str_url))));
    }
    
     
    function delete($id = null) 
    { 
        
    } 
            
     
} 

?>