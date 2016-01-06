<?php  
class Gabarit extends AppModel 
{ 
    var $name 			= 'Gabarit'; 
    var $primaryKey     = 'id';
	var $useTable 		= 'gabarits';
	var $actsAs 		= array('Containable');
} 
?>