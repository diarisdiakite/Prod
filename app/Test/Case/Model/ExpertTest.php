<?php
App::uses('Expert', 'Model');

/**
 * Expert Test Case
 */
class ExpertTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expert',
		'app.user',
		'app.focal_point'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Expert = ClassRegistry::init('Expert');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Expert);

		parent::tearDown();
	}

}
