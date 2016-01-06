<?php  
class Site extends AppModel 
{ 
    var $name 				= 'Site'; 
	var $actsAs 			= array('Containable');
    var $primaryKey     	= 'id';
	var $useTable 			= 'sites';
    																					 
    var $belongsTo 			= array('Gabarit' => array('className'    => 'Gabarit',
  																									'foreignKey'    => 'id_gabarit'),
  															 'Template' => array('className'    => 'Template',
  																									'foreignKey'    => 'id_template'),
  															 'PageBio' => array('className'    => 'Content',
  																									'foreignKey'    => 'id_page_bio'),
  															 'PageWork' => array('className'    => 'Content',
  																									'foreignKey'    => 'id_page_work'),
  															 'PageContact' => array('className'    => 'Content',
  																									'foreignKey'    => 'id_page_contact'),
  															 'PageEvenement' => array('className'    => 'Content',
  																									'foreignKey'    => 'id_page_evenements'),
  															 'PageGalerie' => array('className'    => 'Galery',
  																							 'foreignKey'    => 'id_page_galerie'));  
    
  	var $validate = array( 'title' => array('rule' => array('minLength', 4), 'message' => 'Le titre doit avoir au moins 4 caractères'),
  						   'url' => array('rule' => array('minLength', 4), 'message' => 'Votre URL doit etre composé d\'au moins 4 caractères'));
  	
  	var $hasMany 		= array('Stat' => array('className' => 'Stat', 'foreignKey' => 'id_site'),
  								'Artiste' => array('className' => 'Artiste', 'foreignKey' => 'site_id'));  
} 
?>