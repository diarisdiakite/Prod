<?php
App::uses('Planification', 'Model');

/**
 * Planification Test Case
 */
class PlanificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.planification',
		'app.ministry',
		'app.name',
		'app.focal_point',
		'app.user',
		'app.expert',
		'app.financial_responsible',
		'app.financial_data',
		'app.structure'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Planification = ClassRegistry::init('Planification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planification);

		parent::tearDown();
	}

}
