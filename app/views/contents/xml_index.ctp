<pages>	
	<?php foreach ($contents as $content): ?>    
	<page>          
		<title><?php echo $content['Content']['title']; ?></title>
		<url><?php echo ("/#/".$content['Content']['url']); ?></url>        
	</page>   
	<?php endforeach; ?> 
</pages>
