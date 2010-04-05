<div class="postmeta form">
<?php echo $form->create('Postmetum');?>
	<fieldset>
 		<legend><?php __('Edit Postmetum');?></legend>
	<?php
		echo $form->input('meta_id');
		echo $form->input('post_id');
		echo $form->input('meta_key');
		echo $form->input('meta_value');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Postmetum.meta_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Postmetum.meta_id'))); ?></li>
		<li><?php echo $html->link(__('List Postmeta', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
