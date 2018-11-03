<?php
App::uses('Type', 'Model');

/**
 * Type Test Case
 */
class TypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type',
		'app.project_action',
		'app.expected_result',
		'app.component',
		'app.training',
		'app.job_employment',
		'app.leash',
		'app.sector',
		'app.level'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);

		parent::tearDown();
	}

}
