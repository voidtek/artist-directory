<?php  
class Galery extends AppModel 
{ 
    var $name 			= 'Galery'; 
    var $primaryKey     = 'id';
	var $useTable 		= 'galery';
	var $actsAs 		= array('Containable');
	var $hasMany 		= array('Theme' => array('className' => 'Theme', 'foreignKey' => 'id_galery'));
    
} 
?>