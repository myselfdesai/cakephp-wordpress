<div class="commentmeta form">
<?php echo $form->create('Commentmetum');?>
	<fieldset>
 		<legend><?php __('Add Commentmetum');?></legend>
	<?php
		echo $form->input('comment_id');
		echo $form->input('meta_key');
		echo $form->input('meta_value');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Commentmeta', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
