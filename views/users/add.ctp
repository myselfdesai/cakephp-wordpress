<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php
		echo $form->input('user_login');
		echo $form->input('user_pass');
		echo $form->input('user_nicename');
		echo $form->input('user_email');
		echo $form->input('user_url');
		echo $form->input('user_registered');
		echo $form->input('user_activation_key');
		echo $form->input('user_status');
		echo $form->input('display_name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usermeta', true), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usermetum', true), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
