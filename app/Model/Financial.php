<?php
App::uses('AppModel', 'Model');
/**
 * Financial Model
 *
 * @property ProjectAction $ProjectAction
 * @property FinancesResponsible $FinancesResponsible
 */
class Financial extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'budget' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'finances_responsible_id' => array(
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
		'ProjectAction' => array(
			'className' => 'ProjectAction',
			'foreignKey' => 'project_action_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinancesResponsible' => array(
			'className' => 'FinancesResponsible',
			'foreignKey' => 'finances_responsible_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
