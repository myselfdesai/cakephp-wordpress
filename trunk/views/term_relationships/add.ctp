<div class="termRelationships form">
<?php echo $form->create('TermRelationship');?>
	<fieldset>
 		<legend><?php __('Add TermRelationship');?></legend>
	<?php
		echo $form->input('term_taxonomy_id');
		echo $form->input('term_order');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TermRelationships', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Term Taxonomies', true), array('controller' => 'term_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Taxonomy', true), array('controller' => 'term_taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
