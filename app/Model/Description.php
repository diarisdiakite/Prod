<?php
App::uses('AppModel', 'Model');
/**
 * Description Model
 *
 * @property Name $Name
 */
class Description extends AppModel {
	public $displayField = 'description';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Name' => array(
			'className' => 'Name',
			'foreignKey' => 'description_id',
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
