<?php
/**
 * Structure Fixture
 */
class StructureFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'responsible' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'focal_point_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ministry_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'responsible' => 'Lorem ipsum dolor sit amet',
			'contact' => 1,
			'focal_point_id' => 1,
			'ministry_id' => 1,
			'created' => '2018-05-19 03:15:38',
			'modified' => '2018-05-19 03:15:38'
		),
	);

}
