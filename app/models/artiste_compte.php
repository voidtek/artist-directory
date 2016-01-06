<?php  
class ArtisteCompte extends AppModel 
{ 
    var $name 					= 'ArtisteCompte'; 
    var $primaryKey     = 'id';
  	var $useTable 			= 'artiste_comptes';
		var $actsAs 				= array('Containable');
} 
?>