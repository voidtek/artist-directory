<div class="enregistrement"> 
	<div class="slide_31">
		<h1>Enregistrement</h1>     
		    <?php echo $form->create('User', array('action' => 'register'));?> 
		        <?php echo $form->input('username');?> 
		        <?php echo $form->input('password');?> 
		        <?php echo $form->submit('creation');?> 
		    <?php echo $form->end(); ?>
		    
		<form id="contacts" name="register" action="" method="POST">
			<label>UTILISATEUR <input type="text" class="contact_obligatoire" name="utilisateur" value="" /></label>
			<label>PASSWORD <input type="text" class="contact_obligatoire" name="password" value="" /></label>
			<br /><input type="submit" name="créer mon compte" value="créer mon compte" />
		</form>
	</div>
</div> 