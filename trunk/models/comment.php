<?php
class Comment extends AppModel {

	var $name = 'Comment';
	var $primaryKey = 'comment_ID';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'comment_post_ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CommentParent' => array(
			'className' => 'Comment',
			'foreignKey' => 'comment_parent',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Commentmetum' => array(
			'className' => 'Commentmetum',
			'foreignKey' => 'comment_id',
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