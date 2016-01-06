<?php echo $form->create('User',array('url'=>array('action'=>'view')));?>
	<fieldset>
	  <legend><?php __('Utilisateur Details');?></legend>
	  <?php
	  e ($form->input('id'));
	  e ($form->input('username'));
	  e ($form->input('email'));
  	e ($form->select('usergroup_id', $user_groups, null, null, false));
	  ?>
	</fieldset>
<?php echo $form->end(); ?> 