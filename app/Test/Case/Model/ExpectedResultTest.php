<?php
App::uses('ExpectedResult', 'Model');

/**
 * ExpectedResult Test Case
 */
class ExpectedResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expected_result',
		'app.component',
		'app.project_action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExpectedResult = ClassRegistry::init('ExpectedResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExpectedResult);

		parent::tearDown();
	}

}
