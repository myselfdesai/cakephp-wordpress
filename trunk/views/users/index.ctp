<div class="users index">
<h2><?php __('Users');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('ID');?></th>
	<th><?php echo $paginator->sort('user_login');?></th>
	<th><?php echo $paginator->sort('user_pass');?></th>
	<th><?php echo $paginator->sort('user_nicename');?></th>
	<th><?php echo $paginator->sort('user_email');?></th>
	<th><?php echo $paginator->sort('user_url');?></th>
	<th><?php echo $paginator->sort('user_registered');?></th>
	<th><?php echo $paginator->sort('user_activation_key');?></th>
	<th><?php echo $paginator->sort('user_status');?></th>
	<th><?php echo $paginator->sort('display_name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($user['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $user['Post']['ID'])); ?>
		</td>
		<td>
			<?php echo $user['User']['user_login']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_pass']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_nicename']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_email']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_url']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_registered']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_activation_key']; ?>
		</td>
		<td>
			<?php echo $user['User']['user_status']; ?>
		</td>
		<td>
			<?php echo $user['User']['display_name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $user['User']['ID'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $user['User']['ID'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $user['User']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['ID'])); ?>
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
		<li><?php echo $html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usermeta', true), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usermetum', true), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
