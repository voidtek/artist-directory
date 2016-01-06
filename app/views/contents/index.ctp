<h1>La Liste des Pages</h1>
<ul>  
	<?php foreach ($contents as $content): ?>    
		<li>            
				<?php echo $html->link($content['Content']['title'], "/".$content['Content']['url'], array('title' => 'Site officiel de '.$link['Content']['title'])); ?>        
			</li>   
	<?php endforeach; ?> 
</ul>
