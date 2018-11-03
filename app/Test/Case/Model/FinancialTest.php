<?php
App::uses('Financial', 'Model');

/**
 * Financial Test Case
 */
class FinancialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financial',
		'app.project_actions',
		'app.finances_responsible'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Financial = ClassRegistry::init('Financial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Financial);

		parent::tearDown();
	}

}
