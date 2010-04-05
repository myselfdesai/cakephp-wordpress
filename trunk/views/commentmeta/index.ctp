<div class="commentmeta index">
<h2><?php __('Commentmeta');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('meta_id');?></th>
	<th><?php echo $paginator->sort('comment_id');?></th>
	<th><?php echo $paginator->sort('meta_key');?></th>
	<th><?php echo $paginator->sort('meta_value');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($commentmeta as $commentmetum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $commentmetum['Commentmetum']['meta_id']; ?>
		</td>
		<td>
			<?php echo $html->link($commentmetum['Comment']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $commentmetum['Comment']['comment_ID'])); ?>
		</td>
		<td>
			<?php echo $commentmetum['Commentmetum']['meta_key']; ?>
		</td>
		<td>
			<?php echo $commentmetum['Commentmetum']['meta_value']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $commentmetum['Commentmetum']['meta_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $commentmetum['Commentmetum']['meta_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $commentmetum['Commentmetum']['meta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentmetum['Commentmetum']['meta_id'])); ?>
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
		<li><?php echo $html->link(__('New Commentmetum', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
