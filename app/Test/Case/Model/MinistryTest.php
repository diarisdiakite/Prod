<?php
App::uses('Ministry', 'Model');

/**
 * Ministry Test Case
 */
class MinistryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ministry',
		'app.name',
		'app.focal_point',
		'app.user',
		'app.expert',
		'app.financial_responsible',
		'app.financial_data',
		'app.structure',
		'app.planification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ministry = ClassRegistry::init('Ministry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ministry);

		parent::tearDown();
	}

}
