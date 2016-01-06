<?php  
class Artiste extends AppModel 
{ 
    var $name 					= 'Artiste'; 
    var $actsAs 				= array('Containable');
    var $primaryKey     = 'id';
  	var $useTable 			= 'artistes';
  	var $belongsTo 			= array( 'ArtisteCompte' => array('className'    => 'ArtisteCompte',
  																											  'foreignKey'    => 'artistecompte_id'),
  															 'Site' => array('className'    => 'Site',
  																											  'foreignKey'    => 'site_id'),
  															 'User' => array('className'    => 'User',
  																							 'foreignKey'    => 'user_id')); 
  	var $validate = array('blase' => array(	'rule' => array('minLength', 4),
  																					'required' => true,        
  																					'allowEmpty' => false,        
  																					'message' => 'Votre nom doit avoir au moins 4 caractéres'));
  
} 
?>
