<div class="termTaxonomies form">
<?php echo $form->create('TermTaxonomy');?>
	<fieldset>
 		<legend><?php __('Add TermTaxonomy');?></legend>
	<?php
		echo $form->input('term_id');
		echo $form->input('taxonomy');
		echo $form->input('description');
		echo $form->input('parent');
		echo $form->input('count');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TermTaxonomies', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Terms', true), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term', true), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Term Relationships', true), array('controller' => 'term_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Term Relationship', true), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
