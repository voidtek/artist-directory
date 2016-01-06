<?php  
class Media extends AppModel 
{ 
    var $name 			= 'Media'; 
    var $primaryKey     = 'id';
	var $useTable 		= 'media';
	var $actsAs 		= array('Containable');
	var $belongsTo 		= array( 'Theme' => array('className'    => 'Theme','foreignKey'    => 'id_theme')); 
  	
} 
?>