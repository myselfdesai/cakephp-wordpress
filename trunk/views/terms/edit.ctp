<div class="terms form">
<?php echo $form->create('Term');?>
	<fieldset>
 		<legend><?php __('Edit Term');?></legend>
	<?php
		echo $form->input('term_id');
		echo $form->input('name');
		echo $form->input('slug');
		echo $form->input('term_group');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Term.term_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Term.term_id'))); ?></li>
		<li><?php echo $html->link(__('List Terms', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Term Taxonomies', true), array('controller' => 'term_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
