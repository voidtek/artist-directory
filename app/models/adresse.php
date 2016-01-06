<?php  
class Adresse extends AppModel 
{ 
    var $name 					= 'Adresse'; 
    var $primaryKey     = 'id';
	  var $useTable 			= 'adresses';
	  var $hasMany 				= 'ArtisteProfil';
		var $actsAs 				= array('Containable');
} 
?>