<?php
App::uses('Mode', 'Model');

/**
 * Mode Test Case
 */
class ModeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mode',
		'app.type',
		'app.project_action',
		'app.expected_result',
		'app.composant',
		'app.training',
		'app.ministry',
		'app.name',
		'app.user',
		'app.group',
		'app.expert',
		'app.team',
		'app.focal_point',
		'app.finances_responsible',
		'app.financial',
		'app.structure',
		'app.attribute',
		'app.insert',
		'app.planification',
		'app.date_year',
		'app.realization',
		'app.activation',
		'app.administrator',
		'app.post',
		'app.assistant',
		'app.secretary',
		'app.activations_post',
		'app.activations_insert',
		'app.activations_structure',
		'app.technical',
		'app.description',
		'app.ministries_training',
		'app.sector',
		'app.leash',
		'app.job_employment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mode = ClassRegistry::init('Mode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mode);

		parent::tearDown();
	}

}
