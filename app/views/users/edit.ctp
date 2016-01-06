<h2>GESTION DES "UTILISATEURS"</h2>
<P id="page-intro"></P>
<DIV class="clear"></DIV>
<DIV class="content-box">
	<DIV class="content-box-header">
		<H3 style="cursor: s-resize; "><?php echo $this->data['User']['username'];?></H3>
		<DIV class="clear"></DIV>
	</DIV>
	<DIV class="content-box-content">
				<DIV class="tab-content default-tab" id="tab1" style="display: block; ">
				<?php echo $form->create('User',array('url'=>array('action'=>'edit')));?>
        	<fieldset>
        		<div class='panel_form'>
                <h3><?php __('Details');?></h3>
                <?php
	                echo $form->input('id');
	                echo $form->input('username');
	                echo $form->input('email');
                ?>
        	</div>
        		
        	</fieldset>
        </div>
        <DIV class="clear"></DIV>
				<P><?php echo $form->submit('Enregistrer',array('class'=>"button" ));?></P>
				<?php echo $form->end();?>
  </div>
</div>

