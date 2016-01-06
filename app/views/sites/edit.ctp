<?php
$cat_font = array('Arial, Arial, Helvetica, sans-serif'=>'Arial',
				  'Arial Black, Arial Black, Gadget, sans-serif'=>'Arial black',
				  'Comic Sans MS, Comic Sans MS, cursive'=>'Comic Sans MS',
				  'Courier New, Courier New, Courier, monospace'=>'Courier New',
				  'Georgia, Georgia, serif'=>'Georgia',
				  'Impact, Impact, Charcoal, sans-serif'=>'Impact',
				  'Lucida Console, Monaco, monospace'=>'Lucida Console',
				  'Lucida Sans Unicode, Lucida Grande, sans-serif'=>'Lucida Sans Unicode',
				  'Palatino Linotype, Book Antiqua, Palatino, serif'=>'Palatino Linotype',
				  'Tahoma, Geneva, sans-serif'=>'Tahoma',
				  'Times New Roman, Times, serif'=>'Times New Roman',
				  'Trebuchet MS, Helvetica, sans-serif'=>'Trebuchet MS',
				  'Verdana, Verdana, Geneva, sans-serif'=>'Verdana',
				  'Symbol, Symbol'=>'Symbol',
				  'MS Sans Serif, Geneva, sans-serif'=>'MS Sans Serif',
				  'MS Serif, New York, serif'=>'MS Serif'); 
$cat_color = array(''=>'aucune',
				 '000000'=>'noir',
				 '414144'=>'gris foncé',
				 'b7b7ba'=>'gris clair',
				 'FFFFFF'=>'blanc',
				 '1a476a'=>'bleu nuit',
				 '2badd8'=>'bleu flash',
				 '39a98b'=>'turquoise',
				 'abd30c'=>'vert flash',
				 'c6b228'=>'terre',
				 'e5c90c'=>'jaune vif',
				 '76490e'=>'marron',
				 'e28a17'=>'orange flash',
				 '940d0d'=>'bordeaux',
				 'da1818'=>'rouge flash',
				 'a672b9'=>'violet',
				 'e50ca0'=>'rose flash'); 
				 
$cat_backgroundposition = array('left top'=>'left top',
																'left center'=>'left center',
																'left bottom'=>'left bottom',
																'right top'=>'right top',
																'right center'=>'right center',
																'right bottom'=>'right bottom',
																'center top'=>'center top',
																'center center'=>'center center',
																'center bottom'=>'center bottom');
$cat_p_fontsize = array ('8pt'=>'8pt',
												 '9pt'=>'9pt',
												 '10pt'=>'10pt',
												 '11pt'=>'11pt',
												 '12pt'=>'12pt',
												 '13pt'=>'13pt',
												 '14pt'=>'14pt');

$cat_h1_fontsize = array ('12pt'=>'12pt',
												 '14pt'=>'14pt',
												 '16pt'=>'16pt',
												 '18pt'=>'18pt',
												 '20pt'=>'20pt',
												 '22pt'=>'22pt',
												 '24pt'=>'24pt',
												 '26pt'=>'26pt',
												 '28pt'=>'28pt',
												 '30pt'=>'30pt');
												 
/*
$cat_texttransform = array('none'=>'none',
													 'capitalize'=>'capitalize',
													 'uppercase'=>'uppercase',
													 'lowercase'=>'lowercase',
													 'inherit'=>'inherit');
*/
$cat_texttransform = array('none'=>'none',
													 'uppercase'=>'uppercase',
													 'lowercase'=>'lowercase');
/*
$cat_backgroundrepeat = array('no-repeat'=>'no-repeat',
															'repeat'=>'repeat',
															'repeat-x'=>'repeat-x',
															'repeat-y'=>'repeat-y',
															'inherit'=>'inherit');
*/
$cat_backgroundrepeat = array('no-repeat'=>'no-repeat',
															'repeat'=>'repeat',
															'repeat-x'=>'repeat-x',
															'repeat-y'=>'repeat-y');
$cat_backgroundattachment = array('fixed'=>'fixed',
															'scroll'=>'scroll');
$cat_textalign = array('left'=>'left',
												'right'=>'right',
												'center'=>'center',
												'justify'=>'justify');

?>
<P id="page-intro"></P>
<DIV class="clear"></DIV>
<DIV class="content-box">
		<H3><?php echo $this->data['Site']['url'];?></H3>
	<UL id="main-nav">  <!-- Accordion Menu --> 
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Général');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
                	echo $form->input('id');
	                echo $form->input('title');
	                echo $form->input('logo');
	                echo $form->input('slogan');
	                echo $form->input('page_home');
	                echo $form->input('url');
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	              ?>
	           </li>
					</UL> 
				</LI> 
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Structure');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
                	// echo $form->input('id_gabarit');  
                	echo ($form->select('id_gabarit', $select_gabarit, $this->data['Site']['id_gabarit'], null, false));
	                echo $form->input('id');
	                echo $form->input('url');
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Design');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
	                echo $form->input('Template.id');
	                echo $form->input('Template.css_body_backgroundimage'); 
	                // echo $form->input('Template.css_body_backgroundattachment');
	                echo ($form->select('Template.css_body_backgroundattachment', $cat_backgroundattachment, $this->data['Template']['css_body_backgroundattachment'], null, false)); 
	                echo ($form->select('Template.css_body_backgroundrepeat', $cat_backgroundrepeat, $this->data['Template']['css_body_backgroundrepeat'], null, false));
	                echo ($form->select('Template.css_body_backgroundposition', $cat_backgroundposition, $this->data['Template']['css_body_backgroundposition'], null, false));
	                echo ($form->select('Template.css_body_backgroundcolor', $cat_color, $this->data['Template']['css_body_backgroundcolor'], null, false));
	                echo "<hr>"; 
	                echo "<p>MENU BACKGROUND-COLOR :</p>";
	                // echo $form->input('Template.css_menu_backgroundimage'); 
	                // echo ($form->select('Template.css_menu_backgroundrepeat', $cat_backgroundrepeat, $this->data['Template']['css_menu_backgroundrepeat'], null, false));
	                // echo ($form->select('Template.css_menu_backgroundposition', $cat_backgroundposition, $this->data['Template']['css_menu_backgroundposition'], null, false));
	                echo ($form->select('Template.css_menu_backgroundcolor', $cat_color, $this->data['Template']['css_menu_backgroundcolor'], null, false));
	                echo "<hr>"; 
	                echo "<p>HEADER :</p>";
	                // echo $form->input('Template.css_header_backgroundimage'); 
	                // echo ($form->select('Template.css_header_backgroundrepeat', $cat_backgroundrepeat, $this->data['Template']['css_header_backgroundrepeat'], null, false));
	                // echo ($form->select('Template.css_header_backgroundposition', $cat_backgroundposition, $this->data['Template']['css_header_backgroundposition'], null, false));
	                echo ($form->select('Template.css_header_backgroundcolor', $cat_color, $this->data['Template']['css_header_backgroundcolor'], null, false));
	                echo "<hr>"; 
	                echo "<p>CONTENU BACKGROUND-COLOR :</p>";
	                // echo $form->input('Template.css_content_backgroundimage'); 
	                // echo ($form->select('Template.css_content_backgroundrepeat', $cat_backgroundrepeat, $this->data['Template']['css_content_backgroundrepeat'], null, false));
	                // echo ($form->select('Template.css_content_backgroundposition', $cat_backgroundposition, $this->data['Template']['css_content_backgroundposition'], null, false));
	                echo ($form->select('Template.css_content_backgroundcolor', $cat_color, $this->data['Template']['css_content_backgroundcolor'], null, false));
	                echo "<hr>"; 
	                echo "<p>FOOTER BACKGROUND-COLOR :</p>";
	                // echo $form->input('Template.css_footer_backgroundimage'); 
	                // echo ($form->select('Template.css_footer_backgroundrepeat', $cat_backgroundrepeat, $this->data['Template']['css_footer_backgroundrepeat'], null, false));
	                // echo ($form->select('Template.css_footer_backgroundposition', $cat_backgroundposition, $this->data['Template']['css_footer_backgroundposition'], null, false));
	                echo ($form->select('Template.css_footer_backgroundcolor', $cat_color, $this->data['Template']['css_footer_backgroundcolor'], null, false));
	                echo "<hr>"; 
	                echo "<p>TEXTE COURANT :</p>";
	                echo ($form->select('Template.css_body_fontfamily', $cat_font, $this->data['Template']['css_body_fontfamily'], null, false));
	                echo ($form->select('Template.css_p_fontsize', $cat_p_fontsize, $this->data['Template']['css_p_fontsize'], null, false));
	                echo ($form->select('Template.css_p_color', $cat_color, $this->data['Template']['css_p_color'], null, false));
	                echo ($form->select('Template.css_p_align', $cat_textalign, $this->data['Template']['css_p_align'], null, false));
	                echo "<hr>"; 
	                echo "<p>LIEN COURANT :</p>";
	                echo "OFF :"; 
	                echo ($form->select('Template.css_a_color', $cat_color, $this->data['Template']['css_a_color'], null, false));
	                echo "ON :";
	                echo ($form->select('Template.css_ahover_color', $cat_color, $this->data['Template']['css_ahover_color'], null, false));
	                echo "<hr>";
	                echo "<p>LIEN MENU :</p>";
	                echo ($form->select('Template.css_menu_a_fontfamily', $cat_font, $this->data['Template']['css_menu_a_fontfamily'], null, false));
	                echo ($form->select('Template.css_menu_a_fontsize', $cat_p_fontsize, $this->data['Template']['css_menu_a_fontsize'], null, false));
	                echo ($form->select('Template.css_menu_a_texttransform', $cat_texttransform, $this->data['Template']['css_menu_a_texttransform'], null, false));
	                echo "OFF :";
	                echo ($form->select('Template.css_menu_a_color', $cat_color, $this->data['Template']['css_menu_a_color'], null, false));
	                echo "ON :";
	                echo ($form->select('Template.css_menu_ahover_color', $cat_color, $this->data['Template']['css_menu_ahover_color'], null, false));
	                echo "<hr>";
	                echo "<p>H1 :</p>";
	                echo ($form->select('Template.css_h1_fontfamily', $cat_font, $this->data['Template']['css_h1_fontfamily'], null, false));
	                echo ($form->select('Template.css_h1_fontsize', $cat_h1_fontsize, $this->data['Template']['css_h1_fontsize'], null, false));
	                echo ($form->select('Template.css_h1_color', $cat_color, $this->data['Template']['css_h1_color'], null, false));
	                echo ($form->select('Template.css_h1_texttransform', $cat_texttransform, $this->data['Template']['css_h1_texttransform'], null, false));
	                echo "<hr>";
	                echo "<p>H2 :</p>";
	                echo ($form->select('Template.css_h2_fontfamily', $cat_font, $this->data['Template']['css_h2_fontfamily'], null, false));
	                echo ($form->select('Template.css_h2_fontsize', $cat_h1_fontsize, $this->data['Template']['css_h2_fontsize'], null, false));
	                echo ($form->select('Template.css_h2_color', $cat_color, $this->data['Template']['css_h2_color'], null, false));
	                echo ($form->select('Template.css_h2_texttransform', $cat_texttransform, $this->data['Template']['css_h2_texttransform'], null, false));
	                echo "<hr>";
	                echo "<p>H3 :</p>";
	                // echo ($form->select('Template.css_h3_fontfamily', $cat_font, $this->data['Template']['css_h3_fontfamily'], null, false));
	                echo ($form->select('Template.css_h3_fontsize', $cat_p_fontsize, $this->data['Template']['css_h3_fontsize'], null, false));
	                echo ($form->select('Template.css_h3_color', $cat_color, $this->data['Template']['css_h3_color'], null, false));
	                echo ($form->select('Template.css_h3_texttransform', $cat_texttransform, $this->data['Template']['css_h3_texttransform'], null, false));
	                echo "<hr>";
	                echo $form->input('Template.bonus');  
	                echo $form->input('id');
	                echo $form->input('url');
	                
	                // echo $form->input('Template.css_p_lineheight'); 
	                // echo $form->input('Template.css_h3_lineheight'); 
	                // echo $form->input('Template.css_menu_a_lineheight'); 
	                // echo $form->input('Template.css_h1_lineheight'); 
	                // echo $form->input('Template.css_h2_lineheight'); 
	                
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Work');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
                	echo $form->input('PageWork.id');
	                echo $form->input('PageWork.title');
	                echo $form->input('PageWork.img');
	                echo $form->input('PageWork.body');
	                echo $form->input('PageWork.meta_url');
	                echo $html->link("> Voir page", "/".$this->data['Site']['url']."/".$this->data['PageWork']['meta_url'],array("target" => "site_artiste"));
	                echo $form->input('id');
	                echo $form->input('url');
	                echo $form->input('pageto',array('value'=>$this->data['PageWork']['meta_url']));
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				<LI> 
					<A href='#' class="nav-top-item "><?php __('Biographie');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
                	echo $form->input('PageBio.id');
	                echo $form->input('PageBio.title');
	                echo $form->input('PageBio.img');
	                echo $form->input('PageBio.body');
	                echo $form->input('PageBio.meta_url');
	                echo $html->link("> Voir page", "/".$this->data['Site']['url']."/".$this->data['PageBio']['meta_url'],array("target" => "site_artiste"));
	                echo $form->input('id');
	                echo $form->input('url');
                	echo $form->input('pageto',array('value'=>$this->data['PageBio']['meta_url']));
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end(); 
	                ?>
	          </li>
					</UL> 
				</LI> 
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Galerie');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
	                echo $form->input('PageGalerie.id');
	                echo $form->input('PageGalerie.title');
	                echo $form->input('PageGalerie.img');
	                echo $form->input('PageGalerie.body'); 
	                echo $form->input('PageGalerie.meta_url');
	                echo $html->link("> Voir page", "/".$this->data['Site']['url']."/".$this->data['PageGalerie']['meta_url'],array("target" => "site_artiste"));
	                echo $form->input('id');
	                echo $form->input('url');
	                echo $form->input('pageto',array('value'=>$this->data['PageGalerie']['meta_url']));
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Evenements');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
	                echo $form->input('PageEvenement.id');
	                echo $form->input('PageEvenement.title');
	                echo $form->input('PageEvenement.img');
	                echo $form->input('PageEvenement.body');
	                echo $form->input('PageEvenement.meta_url');
                	echo $html->link("> Voir Page", "/".$this->data['Site']['url']."/".$this->data['PageEvenement']['meta_url'],array("target" => "site_artiste"));
	                echo $form->input('id');
	                echo $form->input('url');
	                echo $form->input('pageto',array('value'=>$this->data['PageEvenement']['meta_url']));
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Liens');?></A> 
					<UL style="display: block; "> 
						<li>
                Bientôt
	          </li>
					</UL> 
				</LI> 
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('Contacts');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
	                echo $form->input('PageContact.id');
	                echo $form->input('PageContact.title');
	                echo $form->input('PageContact.img');
	                echo $form->input('PageContact.body');
	                echo $form->input('PageContact.meta_url');
	                echo $html->link("> Voir page", "/".$this->data['Site']['url']."/".$this->data['PageContact']['meta_url'],array("target" => "site_artiste"));
	                echo $form->input('id');
	                echo $form->input('url');
	                echo $form->input('pageto',array('value'=>$this->data['PageContact']['meta_url']));
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
				<LI> 
					<A href="#" class=""><?php __('Account');?></A>
				</LI> 
				<LI> 
					<A href="#" class=""><?php __('Gestion et statistique');?></A>
				</LI> 
				
				<LI> 
					<A href="#" class="nav-top-item "><?php __('System');?></A> 
					<UL style="display: block; "> 
						<li>
                <?php 
                	echo $form->create('Site',array('url'=>array('action'=>'save')));
                	echo $form->input('id');
	                echo $form->input('url');
	                echo $form->input('modified');
	                echo $form->submit('Enregistrer',array('class'=>"button" ));
									echo $form->end();
	                ?>
	          </li>
					</UL> 
				</LI> 
			</UL> <!-- End #main-nav --> 
</div>
<?php // debug($this->data); ?>
