<?php
App::uses('AppModel', 'Model');
/**
 * Technical Model
 *
 * @property Structure $Structure
 * @property ProjectAction $ProjectAction
 */
class Technical extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'structure_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_action_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'quantity' => array(
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
		'Structure' => array(
			'className' => 'Structure',
			'foreignKey' => 'structure_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProjectAction' => array(
			'className' => 'ProjectAction',
			'foreignKey' => 'project_action_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
