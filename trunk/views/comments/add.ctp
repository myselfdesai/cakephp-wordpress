<div class="comments form">
<?php echo $form->create('Comment');?>
	<fieldset>
 		<legend><?php __('Add Comment');?></legend>
	<?php
		echo $form->input('comment_post_ID');
		echo $form->input('comment_author');
		echo $form->input('comment_author_email');
		echo $form->input('comment_author_url');
		echo $form->input('comment_author_IP');
		echo $form->input('comment_date');
		echo $form->input('comment_date_gmt');
		echo $form->input('comment_content');
		echo $form->input('comment_karma');
		echo $form->input('comment_approved');
		echo $form->input('comment_agent');
		echo $form->input('comment_type');
		echo $form->input('comment_parent');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Commentmeta', true), array('controller' => 'commentmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Commentmetum', true), array('controller' => 'commentmeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
