<?php
App::uses('Administrator', 'Model');

/**
 * Administrator Test Case
 */
class AdministratorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.administrator',
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
		'app.technical',
		'app.planification',
		'app.post',
		'app.activation',
		'app.insert',
		'app.activations_insert',
		'app.activations_post',
		'app.activations_structure'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Administrator = ClassRegistry::init('Administrator');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Administrator);

		parent::tearDown();
	}

}
