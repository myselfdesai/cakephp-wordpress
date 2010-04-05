<?php
class TermTaxonomy extends AppModel {

	var $name = 'TermTaxonomy';
	var $useTable = 'term_taxonomy';
	var $primaryKey = 'term_taxonomy_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Term' => array(
			'className' => 'Term',
			'foreignKey' => 'term_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'TermRelationship' => array(
			'className' => 'TermRelationship',
			'foreignKey' => 'term_taxonomy_id',
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