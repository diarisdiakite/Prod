<?php
App::uses('Structure', 'Model');

/**
 * Structure Test Case
 */
class StructureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.structure',
		'app.focal_point',
		'app.user',
		'app.expert',
		'app.ministry',
		'app.name',
		'app.planification',
		'app.financial_responsible',
		'app.financial_data',
		'app.attribute',
		'app.technical_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Structure = ClassRegistry::init('Structure');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Structure);

		parent::tearDown();
	}

}
