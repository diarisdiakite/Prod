<?php
App::uses('Secretary', 'Model');

/**
 * Secretary Test Case
 */
class SecretaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.secretary',
		'app.user',
		'app.group',
		'app.expert',
		'app.team',
		'app.ministry',
		'app.name',
		'app.description',
		'app.focal_point',
		'app.finances_responsible',
		'app.financial',
		'app.project_action',
		'app.type',
		'app.expected_result',
		'app.composant',
		'app.training',
		'app.job_employment',
		'app.leash',
		'app.sector',
		'app.level',
		'app.structure',
		'app.attribute',
		'app.insert',
		'app.planification',
		'app.activation',
		'app.administrator',
		'app.post',
		'app.assistant',
		'app.activations_post',
		'app.activations_insert',
		'app.activations_structure',
		'app.technical'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Secretary = ClassRegistry::init('Secretary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Secretary);

		parent::tearDown();
	}

}
