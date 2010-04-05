<div class="termTaxonomies view">
<h2><?php  __('TermTaxonomy');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term Taxonomy Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termTaxonomy['TermTaxonomy']['term_taxonomy_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($termTaxonomy['Term']['name'], array('controller' => 'terms', 'action' => 'view', $termTaxonomy['Term']['term_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Taxonomy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termTaxonomy['TermTaxonomy']['taxonomy']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termTaxonomy['TermTaxonomy']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termTaxonomy['TermTaxonomy']['parent']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termTaxonomy['TermTaxonomy']['count']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TermTaxonomy', true), array('action' => 'edit', $termTaxonomy['TermTaxonomy']['term_taxonomy_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TermTaxonomy', true), array('action' => 'delete', $termTaxonomy['TermTaxonomy']['term_taxonomy_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termTaxonomy['TermTaxonomy']['term_taxonomy_id'])); ?> </li>
		<li><?php echo $html->link(__('List TermTaxonomies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New TermTaxonomy', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Terms', true), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term', true), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Relationships', true), array('controller' => 'term_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Relationship', true), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Term Relationships');?></h3>
	<?php if (!empty($termTaxonomy['TermRelationship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Object Id'); ?></th>
		<th><?php __('Term Taxonomy Id'); ?></th>
		<th><?php __('Term Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($termTaxonomy['TermRelationship'] as $termRelationship):
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
