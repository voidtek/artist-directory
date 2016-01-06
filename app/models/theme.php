<?php  
class theme extends AppModel 
{ 
    var $name 			= 'Theme'; 
    var $primaryKey     = 'id';
	var $useTable 		= 'theme';
	var $actsAs 		= array('Containable');
	var $belongsTo 		= array( 'Galery' => array('className'    => 'Galery','foreignKey'    => 'id_galery')); 
  	var $hasMany 		= array('Media' => array('className' => 'Media', 'foreignKey' => 'id_theme'));  
} 
?>