<div class="posts index">
<h2><?php __('Posts');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('ID');?></th>
	<th><?php echo $paginator->sort('post_author');?></th>
	<th><?php echo $paginator->sort('post_date');?></th>
	<th><?php echo $paginator->sort('post_date_gmt');?></th>
	<th><?php echo $paginator->sort('post_content');?></th>
	<th><?php echo $paginator->sort('post_title');?></th>
	<th><?php echo $paginator->sort('post_excerpt');?></th>
	<th><?php echo $paginator->sort('post_status');?></th>
	<th><?php echo $paginator->sort('comment_status');?></th>
	<th><?php echo $paginator->sort('ping_status');?></th>
	<th><?php echo $paginator->sort('post_password');?></th>
	<th><?php echo $paginator->sort('post_name');?></th>
	<th><?php echo $paginator->sort('to_ping');?></th>
	<th><?php echo $paginator->sort('pinged');?></th>
	<th><?php echo $paginator->sort('post_modified');?></th>
	<th><?php echo $paginator->sort('post_modified_gmt');?></th>
	<th><?php echo $paginator->sort('post_content_filtered');?></th>
	<th><?php echo $paginator->sort('post_parent');?></th>
	<th><?php echo $paginator->sort('guid');?></th>
	<th><?php echo $paginator->sort('menu_order');?></th>
	<th><?php echo $paginator->sort('post_type');?></th>
	<th><?php echo $paginator->sort('post_mime_type');?></th>
	<th><?php echo $paginator->sort('comment_count');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($posts as $post):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $post['Post']['ID']; ?>
		</td>
		<td>
			<?php echo $html->link($post['User']['ID'], array('controller' => 'users', 'action' => 'view', $post['User']['ID'])); ?>
		</td>
		<td>
			<?php echo $post['Post']['post_date']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_date_gmt']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_content']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_title']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_excerpt']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_status']; ?>
		</td>
		<td>
			<?php echo $post['Post']['comment_status']; ?>
		</td>
		<td>
			<?php echo $post['Post']['ping_status']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_password']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_name']; ?>
		</td>
		<td>
			<?php echo $post['Post']['to_ping']; ?>
		</td>
		<td>
			<?php echo $post['Post']['pinged']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_modified']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_modified_gmt']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_content_filtered']; ?>
		</td>
		<td>
			<?php echo $html->link($post['PostParent']['ID'], array('controller' => 'posts', 'action' => 'view', $post['PostParent']['ID'])); ?>
		</td>
		<td>
			<?php echo $post['Post']['guid']; ?>
		</td>
		<td>
			<?php echo $post['Post']['menu_order']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_type']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_mime_type']; ?>
		</td>
		<td>
			<?php echo $post['Post']['comment_count']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $post['Post']['ID'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $post['Post']['ID'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $post['Post']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $post['Post']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Post', true), array('action' => 'add')); ?></li>
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
