<div class="options form">
<?php echo $form->create('Option');?>
	<fieldset>
 		<legend><?php __('Edit Option');?></legend>
	<?php
		echo $form->input('option_id');
		echo $form->input('blog_id');
		echo $form->input('option_name');
		echo $form->input('option_value');
		echo $form->input('autoload');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Option.option_name')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Option.option_name'))); ?></li>
		<li><?php echo $html->link(__('List Options', true), array('action' => 'index'));?></li>
	</ul>
</div>
