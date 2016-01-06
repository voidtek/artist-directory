<DIV id="login-content">
	<?php 
	if  ($session->check('Message.auth')) $session->flash('auth');    
	echo $form->create('User', array('action' => 'login'));    
	echo $form->input('username');    
	echo $form->input('password');    
	echo $form->end('Login');
	?>

<div class="slide_31">
	<h1>Statistiques</h1>
	
	<form id="contacts" name="compte" action="" method="POST">
		<input type="submit" name="upgrader mon compte" value="upgrader mon compte" />
		<br /><br />
		<label>VISITEURS</label>
			<label>VISITEURS<br /><input type="submit" name="visiteurs" value="visiteurs" /></label>
			<label>VISITERS UNIQUES<br /><input type="submit" name="visiteurs uniques" value="visiteurs uniques" /></label>
			<label>TEMPS TOTAL<br /><input type="submit" name="temps total" value="temps total" /></label>
			<label>TEMPS MOYEN<br /><input type="submit" name="temps moyen" value="temps moyen" /></label>
			<label>BOUCE RATE<br /><input type="submit" name="bounce rate" value="bounce rate" /></label>
	</form>
	
	<h3>LIENS <span class="">($nbr_liens)</span></h3>
	<ul>
		<li>...</li>
	</ul>
	<h3>SOURCE DU TRAFFIC <span class="">($nbr_trafic_source)</span></h3>
	<ul>
		<li>...</li>
	</ul>
<div class="slide_31">
</DIV> <!-- End #login-content -->

