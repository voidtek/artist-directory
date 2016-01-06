<?php  
class Content extends AppModel 
{ 
    var $name 					= 'Content'; 
    var $primaryKey     = 'id';
  	var $useTable 			= 'contents';
		var $actsAs 				= array('Containable');
		var $hasMany = array('SiteParent' => array('className' => 'Site', 'foreignKey' => 'id_page_bio'));
     
} 
?>