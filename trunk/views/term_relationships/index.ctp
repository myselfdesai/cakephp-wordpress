<div class="termRelationships index">
<h2><?php __('TermRelationships');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('object_id');?></th>
	<th><?php echo $paginator->sort('term_taxonomy_id');?></th>
	<th><?php echo $paginator->sort('term_order');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($termRelationships as $termRelationship):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $termRelationship['TermRelationship']['object_id']; ?>
		</td>
		<td>
			<?php echo $html->link($termRelationship['TermTaxonomy']['term_taxonomy_id'], array('controller' => 'term_taxonomies', 'action' => 'view', $termRelationship['TermTaxonomy']['term_taxonomy_id'])); ?>
		</td>
		<td>
			<?php echo $termRelationship['TermRelationship']['term_order']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $termRelationship['TermRelationship']['object_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $termRelationship['TermRelationship']['object_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $termRelationship['TermRelationship']['object_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termRelationship['TermRelationship']['object_id'])); ?>
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
		<li><?php echo $html->link(__('New TermRelationship', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Term Taxonomies', true), array('controller' => 'term_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
