<div class="links index">
<h2><?php __('Links');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('link_id');?></th>
	<th><?php echo $paginator->sort('link_url');?></th>
	<th><?php echo $paginator->sort('link_name');?></th>
	<th><?php echo $paginator->sort('link_image');?></th>
	<th><?php echo $paginator->sort('link_target');?></th>
	<th><?php echo $paginator->sort('link_description');?></th>
	<th><?php echo $paginator->sort('link_visible');?></th>
	<th><?php echo $paginator->sort('link_owner');?></th>
	<th><?php echo $paginator->sort('link_rating');?></th>
	<th><?php echo $paginator->sort('link_updated');?></th>
	<th><?php echo $paginator->sort('link_rel');?></th>
	<th><?php echo $paginator->sort('link_notes');?></th>
	<th><?php echo $paginator->sort('link_rss');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($links as $link):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $link['Link']['link_id']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_url']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_name']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_image']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_target']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_description']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_visible']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_owner']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_rating']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_updated']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_rel']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_notes']; ?>
		</td>
		<td>
			<?php echo $link['Link']['link_rss']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $link['Link']['link_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $link['Link']['link_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $link['Link']['link_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $link['Link']['link_id'])); ?>
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
		<li><?php echo $html->link(__('New Link', true), array('action' => 'add')); ?></li>
	</ul>
</div>
