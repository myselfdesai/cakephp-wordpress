<?php
class Postmetum extends AppModel {

	var $name = 'Postmetum';
	var $primaryKey = 'meta_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>