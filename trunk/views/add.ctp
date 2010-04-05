<div class="posts form">
<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php __('Add Post');?></legend>
	<?php
		echo $form->input('post_author');
		echo $form->input('post_date');
		echo $form->input('post_date_gmt');
		echo $form->input('post_content');
		echo $form->input('post_title');
		echo $form->input('post_excerpt');
		echo $form->input('post_status');
		echo $form->input('comment_status');
		echo $form->input('ping_status');
		echo $form->input('post_password');
		echo $form->input('post_name');
		echo $form->input('to_ping');
		echo $form->input('pinged');
		echo $form->input('post_modified');
		echo $form->input('post_modified_gmt');
		echo $form->input('post_content_filtered');
		echo $form->input('post_parent');
		echo $form->input('guid');
		echo $form->input('menu_order');
		echo $form->input('post_type');
		echo $form->input('post_mime_type');
		echo $form->input('comment_count');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Posts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post Parent', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Postmeta', true), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Postmetum', true), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Relationships', true), array('controller' => 'term_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Relationship', true), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comments', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
