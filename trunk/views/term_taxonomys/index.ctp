<div class="termTaxonomies index">
<h2><?php __('TermTaxonomies');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('term_taxonomy_id');?></th>
	<th><?php echo $paginator->sort('term_id');?></th>
	<th><?php echo $paginator->sort('taxonomy');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('parent');?></th>
	<th><?php echo $paginator->sort('count');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($termTaxonomies as $termTaxonomy):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $termTaxonomy['TermTaxonomy']['term_taxonomy_id']; ?>
		</td>
		<td>
			<?php echo $html->link($termTaxonomy['Term']['name'], array('controller' => 'terms', 'action' => 'view', $termTaxonomy['Term']['term_id'])); ?>
		</td>
		<td>
			<?php echo $termTaxonomy['TermTaxonomy']['taxonomy']; ?>
		</td>
		<td>
			<?php echo $termTaxonomy['TermTaxonomy']['description']; ?>
		</td>
		<td>
			<?php echo $termTaxonomy['TermTaxonomy']['parent']; ?>
		</td>
		<td>
			<?php echo $termTaxonomy['TermTaxonomy']['count']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $termTaxonomy['TermTaxonomy']['term_taxonomy_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $termTaxonomy['TermTaxonomy']['term_taxonomy_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $termTaxonomy['TermTaxonomy']['term_taxonomy_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termTaxonomy['TermTaxonomy']['term_taxonomy_id'])); ?>
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
		<li><?php echo $html->link(__('New TermTaxonomy', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Terms', true), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term', true), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Relationships', true), array('controller' => 'term_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Relationship', true), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
