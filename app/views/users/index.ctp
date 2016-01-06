<h2>GESTION DES "UTILISATEURS"</h2>
<p class='header-table'><?php echo $html->link("Ajouter un utilisateur", "/users/edit/"); ?></p>
<P id="page-intro"></P>
<DIV class="clear"></DIV>
<DIV>
	<table id="tabledata">
		<THEAD>
			<tr>
				<th>Id</th>             
				<th>Login</th>          
				<th>email</th>          
				<th>créer</th>  
				<th></th>  
			</tr>
		</THEAD> 
		<?php foreach ($users as $user): ?>      
			<tr>               
				<td><?php echo $user['User']['id']; ?></td>  
				<td nowrap><?php echo $html->link($user['User']['username'], "/users/edit/".$user['User']['id']); ?>  </td> 
				<td><?php echo $user['User']['email']; ?></td>   
				<td><?php echo $user['User']['created']; ?></td>   
				<td nowrap><?php echo $html->link("modifier", "/users/edit/".$user['User']['id']); ?></td> 
			</tr>    
		<?php endforeach; ?> 
	</table>
</div>
