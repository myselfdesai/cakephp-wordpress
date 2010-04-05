<div class="options view">
<h2><?php  __('Option');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Option Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['option_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Blog Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['blog_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Option Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['option_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Option Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['option_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Autoload'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['autoload']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Option', true), array('action' => 'edit', $option['Option']['option_name'])); ?> </li>
		<li><?php echo $html->link(__('Delete Option', true), array('action' => 'delete', $option['Option']['option_name']), null, sprintf(__('Are you sure you want to delete # %s?', true), $option['Option']['option_name'])); ?> </li>
		<li><?php echo $html->link(__('List Options', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Option', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
