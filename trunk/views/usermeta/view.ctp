<div class="usermeta view">
<h2><?php  __('Usermetum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Umeta Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usermetum['Usermetum']['umeta_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($usermetum['User'][''], array('controller' => 'users', 'action' => 'view', $usermetum['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usermetum['Usermetum']['meta_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usermetum['Usermetum']['meta_value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Usermetum', true), array('action' => 'edit', $usermetum['Usermetum']['umeta_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Usermetum', true), array('action' => 'delete', $usermetum['Usermetum']['umeta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usermetum['Usermetum']['umeta_id'])); ?> </li>
		<li><?php echo $html->link(__('List Usermeta', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usermetum', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
