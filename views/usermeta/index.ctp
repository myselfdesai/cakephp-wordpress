<div class="usermeta index">
<h2><?php __('Usermeta');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('umeta_id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('meta_key');?></th>
	<th><?php echo $paginator->sort('meta_value');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($usermeta as $usermetum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $usermetum['Usermetum']['umeta_id']; ?>
		</td>
		<td>
			<?php echo $html->link($usermetum['User'][''], array('controller' => 'users', 'action' => 'view', $usermetum['User']['id'])); ?>
		</td>
		<td>
			<?php echo $usermetum['Usermetum']['meta_key']; ?>
		</td>
		<td>
			<?php echo $usermetum['Usermetum']['meta_value']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $usermetum['Usermetum']['umeta_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $usermetum['Usermetum']['umeta_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $usermetum['Usermetum']['umeta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usermetum['Usermetum']['umeta_id'])); ?>
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
		<li><?php echo $html->link(__('New Usermetum', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
