<?php
App::uses('ProjectAction', 'Model');

/**
 * ProjectAction Test Case
 */
class ProjectActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_action',
		'app.type',
		'app.expected_result',
		'app.component',
		'app.training'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectAction = ClassRegistry::init('ProjectAction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectAction);

		parent::tearDown();
	}

}
