<div class="terms view">
<h2><?php  __('Term');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['term_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['term_group']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Term', true), array('action' => 'edit', $term['Term']['term_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Term', true), array('action' => 'delete', $term['Term']['term_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $term['Term']['term_id'])); ?> </li>
		<li><?php echo $html->link(__('List Terms', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Taxonomies', true), array('controller' => 'term_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Term Taxonomies');?></h3>
	<?php if (!empty($term['TermTaxonomy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Term Taxonomy Id'); ?></th>
		<th><?php __('Term Id'); ?></th>
		<th><?php __('Taxonomy'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Parent'); ?></th>
		<th><?php __('Count'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($term['TermTaxonomy'] as $termTaxonomy):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $termTaxonomy['term_taxonomy_id'];?></td>
			<td><?php echo $termTaxonomy['term_id'];?></td>
			<td><?php echo $termTaxonomy['taxonomy'];?></td>
			<td><?php echo $termTaxonomy['description'];?></td>
			<td><?php echo $termTaxonomy['parent'];?></td>
			<td><?php echo $termTaxonomy['count'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'term_taxonomies', 'action' => 'view', $termTaxonomy['term_taxonomy_id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'term_taxonomies', 'action' => 'edit', $termTaxonomy['term_taxonomy_id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'term_taxonomies', 'action' => 'delete', $termTaxonomy['term_taxonomy_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $termTaxonomy['term_taxonomy_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
