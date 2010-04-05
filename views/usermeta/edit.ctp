<div class="usermeta form">
<?php echo $form->create('Usermetum');?>
	<fieldset>
 		<legend><?php __('Edit Usermetum');?></legend>
	<?php
		echo $form->input('umeta_id');
		echo $form->input('user_id');
		echo $form->input('meta_key');
		echo $form->input('meta_value');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Usermetum.umeta_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Usermetum.umeta_id'))); ?></li>
		<li><?php echo $html->link(__('List Usermeta', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
