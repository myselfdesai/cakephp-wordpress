<div class="postmeta view">
<h2><?php  __('Postmetum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postmetum['Postmetum']['meta_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($postmetum['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $postmetum['Post']['ID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postmetum['Postmetum']['meta_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $postmetum['Postmetum']['meta_value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Postmetum', true), array('action' => 'edit', $postmetum['Postmetum']['meta_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Postmetum', true), array('action' => 'delete', $postmetum['Postmetum']['meta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $postmetum['Postmetum']['meta_id'])); ?> </li>
		<li><?php echo $html->link(__('List Postmeta', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Postmetum', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
