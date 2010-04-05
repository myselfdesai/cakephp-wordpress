<div class="commentmeta view">
<h2><?php  __('Commentmetum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentmetum['Commentmetum']['meta_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($commentmetum['Comment']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $commentmetum['Comment']['comment_ID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentmetum['Commentmetum']['meta_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentmetum['Commentmetum']['meta_value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Commentmetum', true), array('action' => 'edit', $commentmetum['Commentmetum']['meta_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Commentmetum', true), array('action' => 'delete', $commentmetum['Commentmetum']['meta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentmetum['Commentmetum']['meta_id'])); ?> </li>
		<li><?php echo $html->link(__('List Commentmeta', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Commentmetum', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
