<?php
class Commentmetum extends AppModel {

	var $name = 'Commentmetum';
	var $primaryKey = 'meta_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'comment_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>