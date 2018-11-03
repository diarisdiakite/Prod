<?php
App::uses('JobEmployment', 'Model');

/**
 * JobEmployment Test Case
 */
class JobEmploymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_employment',
		'app.leash',
		'app.training'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobEmployment = ClassRegistry::init('JobEmployment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobEmployment);

		parent::tearDown();
	}

}
