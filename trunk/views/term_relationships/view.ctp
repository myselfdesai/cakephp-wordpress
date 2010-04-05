<div class="termRelationships view">
<h2><?php  __('TermRelationship');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Object Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termRelationship['TermRelationship']['object_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term Taxonomy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($termRelationship['TermTaxonomy']['term_taxonomy_id'], array('controller' => 'term_taxonomies', 'action' => 'view', $termRelationship['TermTaxonomy']['term_taxonomy_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $termRelationship['TermRelationship']['term_order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TermRelationship', true), array('action' => 'edit', $termRelationship['TermRelationship']['object_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TermRelationship', true), array('action' => 'delete', $termRelationship['TermRelationship']['object_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termRelationship['TermRelationship']['object_id'])); ?> </li>
		<li><?php echo $html->link(__('List TermRelationships', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New TermRelationship', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Taxonomies', true), array('controller' => 'term_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
