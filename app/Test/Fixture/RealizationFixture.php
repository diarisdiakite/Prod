<?php
/**
 * Realization Fixture
 */
class RealizationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'insert_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'structure_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'focal_point_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'finance_responsible_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'user_id' => 1,
			'insert_id' => 1,
			'structure_id' => 1,
			'focal_point_id' => 1,
			'finance_responsible_id' => 1,
			'quantity' => 1,
			'price' => 1,
			'amount' => 1,
			'created' => '2018-09-08 18:19:17',
			'modified' => '2018-09-08 18:19:17'
		),
	);

}
