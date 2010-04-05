<div class="options index">
<h2><?php __('Options');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('option_id');?></th>
	<th><?php echo $paginator->sort('blog_id');?></th>
	<th><?php echo $paginator->sort('option_name');?></th>
	<th><?php echo $paginator->sort('option_value');?></th>
	<th><?php echo $paginator->sort('autoload');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($options as $option):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $option['Option']['option_id']; ?>
		</td>
		<td>
			<?php echo $option['Option']['blog_id']; ?>
		</td>
		<td>
			<?php echo $option['Option']['option_name']; ?>
		</td>
		<td>
			<?php echo $option['Option']['option_value']; ?>
		</td>
		<td>
			<?php echo $option['Option']['autoload']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $option['Option']['option_name'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $option['Option']['option_name'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $option['Option']['option_name']), null, sprintf(__('Are you sure you want to delete # %s?', true), $option['Option']['option_name'])); ?>
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
		<li><?php echo $html->link(__('New Option', true), array('action' => 'add')); ?></li>
	</ul>
</div>
