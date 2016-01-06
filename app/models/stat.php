<?php  
class Stat extends AppModel 
{ 
    var $name 			= 'Stat'; 
    var $primaryKey     = 'id';
	var $useTable 		= 'stats';
	var $actsAs 		= array('Containable');
	var $belongsTo 		= array( 'Site' => array('className'    => 'Theme','foreignKey'    => 'id_site')); 
  	
} 
?>