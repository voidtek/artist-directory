<?php  
class Template extends AppModel 
{ 
    var $name 					= 'Template'; 
    var $primaryKey     = 'id';
	  var $useTable 			= 'template';
		var $actsAs 				= array('Containable');
    
} 
?>