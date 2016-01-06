<?php  
class User extends AppModel 
{ 
    var $name 					= 'User'; 
    var $primaryKey     = 'id';
  	var $useTable 			= 'users';
		var $actsAs 				= array('Containable');
		var $hasMany 				= array('Artiste');
		
  	var $belongsTo 			= array( 'Artiste' => array('className'    => 'Artiste',
  														'foreignKey'    => 'artiste_id')); 
  																							 
    var $validate = array('password' => array('rule' => array('minLength', 8),
    																					'message' => 'Le mot de passe doit comporter au moins 8 caractères'),
    											'email' => array('rule' => 'email',            
    																				'message' => 'Votre email nest pas correctement formaté'));
    
    function validateLogin($data) { 
        $user = $this->find(array('username' => $data['username'], 'password' => md5($data['password'])), array('id', 'username')); 
        if(empty($user) == false) return $user['User']; 
        return false; 
    } 
} 
?>
