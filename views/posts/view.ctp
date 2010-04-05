<div class="posts view">
<h2><?php  __('Post');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($post['User']['ID'], array('controller' => 'users', 'action' => 'view', $post['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Date Gmt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_date_gmt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Excerpt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_excerpt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['comment_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ping Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['ping_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('To Ping'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['to_ping']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pinged'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['pinged']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Modified Gmt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_modified_gmt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Content Filtered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_content_filtered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Parent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($post['PostParent']['ID'], array('controller' => 'posts', 'action' => 'view', $post['PostParent']['ID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Guid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['guid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Menu Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['menu_order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Mime Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['post_mime_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $post['Post']['comment_count']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Post', true), array('action' => 'edit', $post['Post']['ID'])); ?> </li>
		<li><?php echo $html->link(__('Delete Post', true), array('action' => 'delete', $post['Post']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $post['Post']['ID'])); ?> </li>
		<li><?php echo $html->link(__('List Posts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Postmeta');?></h3>
	<?php if (!empty($post['Postmetum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Meta Id'); ?></th>
		<th><?php __('Post Id'); ?></th>
		<th><?php __('Meta Key'); ?></th>
		<th><?php __('Meta Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['Postmetum'] as $postmetum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $postmetum['meta_id'];?></td>
			<td><?php echo $postmetum['post_id'];?></td>
			<td><?php echo $postmetum['meta_key'];?></td>
			<td><?php echo $postmetum['meta_value'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'postmeta', 'action' => 'view', $postmetum['meta_id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'postmeta', 'action' => 'edit', $postmetum['meta_id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'postmeta', 'action' => 'delete', $postmetum['meta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $postmetum['meta_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Postmetum', true), array('controller' => 'postmeta', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Term Relationships');?></h3>
	<?php if (!empty($post['TermRelationship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Object Id'); ?></th>
		<th><?php __('Term Taxonomy Id'); ?></th>
		<th><?php __('Term Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['TermRelationship'] as $termRelationship):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $termRelationship['object_id'];?></td>
			<td><?php echo $termRelationship['term_taxonomy_id'];?></td>
			<td><?php echo $termRelationship['term_order'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'term_relationships', 'action' => 'view', $termRelationship['object_id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'term_relationships', 'action' => 'edit', $termRelationship['object_id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'term_relationships', 'action' => 'delete', $termRelationship['object_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termRelationship['object_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Term Relationship', true), array('controller' => 'term_relationships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Comments');?></h3>
	<?php if (!empty($post['Comments'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Comment ID'); ?></th>
		<th><?php __('Comment Post ID'); ?></th>
		<th><?php __('Comment Author'); ?></th>
		<th><?php __('Comment Author Email'); ?></th>
		<th><?php __('Comment Author Url'); ?></th>
		<th><?php __('Comment Author IP'); ?></th>
		<th><?php __('Comment Date'); ?></th>
		<th><?php __('Comment Date Gmt'); ?></th>
		<th><?php __('Comment Content'); ?></th>
		<th><?php __('Comment Karma'); ?></th>
		<th><?php __('Comment Approved'); ?></th>
		<th><?php __('Comment Agent'); ?></th>
		<th><?php __('Comment Type'); ?></th>
		<th><?php __('Comment Parent'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['Comments'] as $comments):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comments['comment_ID'];?></td>
			<td><?php echo $comments['comment_post_ID'];?></td>
			<td><?php echo $comments['comment_author'];?></td>
			<td><?php echo $comments['comment_author_email'];?></td>
			<td><?php echo $comments['comment_author_url'];?></td>
			<td><?php echo $comments['comment_author_IP'];?></td>
			<td><?php echo $comments['comment_date'];?></td>
			<td><?php echo $comments['comment_date_gmt'];?></td>
			<td><?php echo $comments['comment_content'];?></td>
			<td><?php echo $comments['comment_karma'];?></td>
			<td><?php echo $comments['comment_approved'];?></td>
			<td><?php echo $comments['comment_agent'];?></td>
			<td><?php echo $comments['comment_type'];?></td>
			<td><?php echo $comments['comment_parent'];?></td>
			<td><?php echo $comments['user_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comments['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comments['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comments['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comments['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Comments', true), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
