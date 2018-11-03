<?php
App::uses('Leash', 'Model');

/**
 * Leash Test Case
 */
class LeashTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.leash',
		'app.sector',
		'app.job_employment',
		'app.training'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Leash = ClassRegistry::init('Leash');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Leash);

		parent::tearDown();
	}

}
