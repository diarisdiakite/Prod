<?php
/**
 * MinistriesTraining Fixture
 */
class MinistriesTrainingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ministry_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'training_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ministry_id' => 1,
			'training_id' => 1,
			'created' => '2018-10-21 02:02:05',
			'modified' => '2018-10-21 02:02:05'
		),
	);

}
