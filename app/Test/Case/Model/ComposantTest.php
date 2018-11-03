<?php
App::uses('Composant', 'Model');

/**
 * Composant Test Case
 */
class ComposantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.composant',
		'app.expected_result',
		'app.component',
		'app.project_action',
		'app.type',
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
		$this->Composant = ClassRegistry::init('Composant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Composant);

		parent::tearDown();
	}

}
