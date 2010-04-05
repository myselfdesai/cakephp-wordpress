<div class="links form">
<?php echo $form->create('Link');?>
	<fieldset>
 		<legend><?php __('Edit Link');?></legend>
	<?php
		echo $form->input('link_id');
		echo $form->input('link_url');
		echo $form->input('link_name');
		echo $form->input('link_image');
		echo $form->input('link_target');
		echo $form->input('link_description');
		echo $form->input('link_visible');
		echo $form->input('link_owner');
		echo $form->input('link_rating');
		echo $form->input('link_updated');
		echo $form->input('link_rel');
		echo $form->input('link_notes');
		echo $form->input('link_rss');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Link.link_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Link.link_id'))); ?></li>
		<li><?php echo $html->link(__('List Links', true), array('action' => 'index'));?></li>
	</ul>
</div>
