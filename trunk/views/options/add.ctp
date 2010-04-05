<div class="options form">
<?php echo $form->create('Option');?>
	<fieldset>
 		<legend><?php __('Add Option');?></legend>
	<?php
		echo $form->input('option_id');
		echo $form->input('blog_id');
		echo $form->input('option_value');
		echo $form->input('autoload');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Options', true), array('action' => 'index'));?></li>
	</ul>
</div>
