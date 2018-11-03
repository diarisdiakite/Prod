<?php
/**
 * Financial Fixture
 */
class FinancialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'project_actions_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'budget' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'finances_responsible_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2018-05-19 18:17:10',
			'project_actions_id' => 1,
			'budget' => 1,
			'finances_responsible_id' => 1,
			'modified' => '2018-05-19 18:17:10'
		),
	);

}
