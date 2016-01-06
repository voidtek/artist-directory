<?php  
class Link extends AppModel 
{ 
    var $name 					= 'Link'; 
    var $primaryKey     = 'id';
	  var $useTable 			= 'links';
		var $actsAs 				= array('Containable');
    
} 
?>