<?php
App::uses('AppModel', 'Model');
/**
 * MinistriesTraining Model
 *
 * @property Ministry $Ministry
 * @property Training $Training
 */
class MinistriesTraining extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ministry_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'training_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ministry' => array(
			'className' => 'Ministry',
			'foreignKey' => 'ministry_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Training' => array(
			'className' => 'Training',
			'foreignKey' => 'training_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
