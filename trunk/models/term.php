<?php
class Term extends AppModel {

	var $name = 'Term';
	var $primaryKey = 'term_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'TermTaxonomy' => array(
			'className' => 'TermTaxonomy',
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