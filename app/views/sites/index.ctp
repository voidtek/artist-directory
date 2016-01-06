<h2>GESTION DES "SITES"</h2>
<p class='header-table'><?php echo $html->link("Ajouter un site", "/sites/edit/"); ?></p>

<P id="page-intro"></P>
<DIV class="clear"></DIV>
<DIV>
	<table id="tabledata">
		<THEAD>
			<tr>  
				<th>ID</th> 
				<th>url</th> 
				<th>Gabarit</th> 
				<th>Template</th>        
				<th>Page Home</th>     
				<th>Page</th>        
				<th>Date de création</th>
				<th>Date de modication</th>
				<th></th>  
			</tr>
		</THEAD> 
		<?php foreach ($sites as $item): ?>    
			<tr>               
				<td><?php echo $item['Site']['id']; ?></td>    
				<td><?php echo $item['Site']['url']; ?></td>     
				<td><?php echo $item['Site']['id_gabarit']; ?></td>  
				<td><?php echo $item['Site']['id_template']; ?></td> 
				<td><?php echo $item['Site']['page_home']; ?></td>  
				<td><?php echo $item['Site']['id_page_bio']; ?> | 
						<?php echo $item['Site']['id_page_work']; ?> | 
						<?php echo $item['Site']['id_page_contact']; ?> | 
						<?php echo $item['Site']['id_page_galerie']; ?> | 
						<?php echo $item['Site']['id_page_evenements']; ?> | </td>   
				<td><?php echo $item['Site']['created']; ?></td> 
				<td><?php echo $item['Site']['modified']; ?></td> 
				<td><?php echo $html->link("modifier", "/sites/edit/".$item['Site']['id']); ?></td>  
			</tr>    
		<?php endforeach; ?> 
	</table>
</div>
<?php // debug($this); ?>


