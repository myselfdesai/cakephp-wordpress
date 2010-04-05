<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($user['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $user['Post']['ID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Login'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Pass'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_pass']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Nicename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_nicename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Registered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_registered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Activation Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_activation_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['user_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Display Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['display_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action' => 'delete', $user['User']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['ID'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usermeta', true), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usermetum', true), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Comments');?></h3>
	<?php if (!empty($user['Comment'])):?>
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
		foreach ($user['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comment['comment_ID'];?></td>
			<td><?php echo $comment['comment_post_ID'];?></td>
			<td><?php echo $comment['comment_author'];?></td>
			<td><?php echo $comment['comment_author_email'];?></td>
			<td><?php echo $comment['comment_author_url'];?></td>
			<td><?php echo $comment['comment_author_IP'];?></td>
			<td><?php echo $comment['comment_date'];?></td>
			<td><?php echo $comment['comment_date_gmt'];?></td>
			<td><?php echo $comment['comment_content'];?></td>
			<td><?php echo $comment['comment_karma'];?></td>
			<td><?php echo $comment['comment_approved'];?></td>
			<td><?php echo $comment['comment_agent'];?></td>
			<td><?php echo $comment['comment_type'];?></td>
			<td><?php echo $comment['comment_parent'];?></td>
			<td><?php echo $comment['user_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Usermeta');?></h3>
	<?php if (!empty($user['Usermetum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Umeta Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Meta Key'); ?></th>
		<th><?php __('Meta Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Usermetum'] as $usermetum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usermetum['umeta_id'];?></td>
			<td><?php echo $usermetum['user_id'];?></td>
			<td><?php echo $usermetum['meta_key'];?></td>
			<td><?php echo $usermetum['meta_value'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'usermeta', 'action' => 'view', $usermetum['umeta_id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'usermeta', 'action' => 'edit', $usermetum['umeta_id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'usermeta', 'action' => 'delete', $usermetum['umeta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usermetum['umeta_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Usermetum', true), array('controller' => 'usermeta', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
