<?php $this->layout = 'flash_xml'; ?>
<page>          
	<title>Plateforme artistique / Gestion de book professionnel en ligne</title>
	<body>
		<p><b>| GÉNÉRALE</b></p>
		<p>
		<?php foreach ($this->viewVars['menu_content'] as $link):?> 
			<?php if($link['Content']['categorie'] == "Générales") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Content']['title_menu'], "/".$link['Content']['url'], array('class' => 'home', 'title' => $link['Content']['title'])); ?><br />
			<?php endif; ?>
		<?php endforeach; ?>
		<?php foreach ($this->viewVars['menu_link'] as $link):?> 
	        <?php if($link['Link']['categorie'] == "GENERALE") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Link']['nom'], "/".$link['Link']['url'], array('class' => 'home', 'title' => $link['Link']['title'])); ?><br />
			<?php endif; ?>
		<?php endforeach; ?>
		</p>
		
		<p><b>| PLUS</b></p>
		<p>
		<?php foreach ($this->viewVars['menu_content'] as $link):?> 
			<?php if($link['Content']['categorie'] == "PLUS") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Content']['title_menu'], "/".$link['Content']['url'], array('class' => 'home', 'title' => $link['Content']['title'])); ?><br />
			<?php endif; ?>
		<?php endforeach; ?>
		</p>
		
		<img src="/img/maquette/line.png" width="450" height="5px" border="0" />
		<br /><br />
		
		<p><b>| ARTISTES</b></p>
		<p>
		<?php foreach ($this->viewVars['menu_link'] as $link):?> 
		    <?php if($link['Link']['categorie'] == "MENU ARTISTES") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Link']['nom'], "/".$link['Link']['url'], array('class' => 'home', 'title' => $link['Link']['title'])); ?><br /> 
			<?php endif; ?>
		<?php endforeach; ?>  
		</p>
		
		<img src="/img/maquette/line.png" width="450" height="5px" border="0" />
		<br /><br />
		
		<p><b>| EXPOSANTS</b></p>
		<p>
		<?php foreach ($this->viewVars['menu_link'] as $link):?> 
	    	<?php if($link['Link']['categorie'] == "MENU EXPOSANTS") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Link']['nom'], "/".$link['Link']['url'], array('class' => 'home', 'title' => $link['Link']['title'])); ?><br />
			<?php endif; ?>
		<?php endforeach; ?> 
		</p>
		
		<img src="/img/maquette/line.png" width="450" height="5px" border="0" />
		<br /><br />
		
		<p><b>| PARTENAIRES</b></p>
		<p>
		<?php foreach ($this->viewVars['menu_content'] as $link):?> 
        	<?php if($link['Content']['categorie'] == "Partenaires") :?>
			&nbsp;&nbsp;&nbsp;&gt; <?php echo $html->link($link['Content']['title_menu'], "/".$link['Content']['url'], array('home' => 'bouton-slide-menu', 'title' => $link['Content']['title'])); ?><br /> 
			<?php endif; ?>
		<?php endforeach; ?> 
		</p>
	</body>
</page>