<div class="comments index">
<h2><?php __('Comments');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('comment_ID');?></th>
	<th><?php echo $paginator->sort('comment_post_ID');?></th>
	<th><?php echo $paginator->sort('comment_author');?></th>
	<th><?php echo $paginator->sort('comment_author_email');?></th>
	<th><?php echo $paginator->sort('comment_author_url');?></th>
	<th><?php echo $paginator->sort('comment_author_IP');?></th>
	<th><?php echo $paginator->sort('comment_date');?></th>
	<th><?php echo $paginator->sort('comment_date_gmt');?></th>
	<th><?php echo $paginator->sort('comment_content');?></th>
	<th><?php echo $paginator->sort('comment_karma');?></th>
	<th><?php echo $paginator->sort('comment_approved');?></th>
	<th><?php echo $paginator->sort('comment_agent');?></th>
	<th><?php echo $paginator->sort('comment_type');?></th>
	<th><?php echo $paginator->sort('comment_parent');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($comments as $comment):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($comment['Comment']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $comment['Comment']['comment_ID'])); ?>
		</td>
		<td>
			<?php echo $html->link($comment['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['ID'])); ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_author']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_author_email']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_author_url']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_author_IP']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_date']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_date_gmt']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_content']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_karma']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_approved']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_agent']; ?>
		</td>
		<td>
			<?php echo $comment['Comment']['comment_type']; ?>
		</td>
		<td>
			<?php echo $html->link($comment['CommentParent']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $comment['CommentParent']['comment_ID'])); ?>
		</td>
		<td>
			<?php echo $html->link($comment['User']['ID'], array('controller' => 'users', 'action' => 'view', $comment['User']['ID'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $comment['Comment']['comment_ID'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $comment['Comment']['comment_ID'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $comment['Comment']['comment_ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['comment_ID'])); ?>
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
		<li><?php echo $html->link(__('New Comment', true), array('action' => 'add')); ?></li>
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
