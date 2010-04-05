<?php
class Post extends AppModel {

	var $name = 'Post';
	var $primaryKey = 'ID';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'PostParent' => array(
			'className' => 'Post',
			'foreignKey' => 'post_parent',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Postmetum' => array(
			'className' => 'Postmetum',
			'foreignKey' => 'post_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TermRelationship' => array(
			'className' => 'TermRelationship',
			'foreignKey' => 'object_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Comments' => array(
			'className' => 'Comments',
			'foreignKey' => 'comment_post_ID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>