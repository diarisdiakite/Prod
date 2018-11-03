<?php
App::uses('MinistriesTraining', 'Model');

/**
 * MinistriesTraining Test Case
 */
class MinistriesTrainingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ministries_training',
		'app.ministry',
		'app.name',
		'app.user',
		'app.group',
		'app.expert',
		'app.team',
		'app.focal_point',
		'app.finances_responsible',
		'app.financial',
		'app.project_action',
		'app.type',
		'app.expected_result',
		'app.composant',
		'app.training',
		'app.sector',
		'app.leash',
		'app.job_employment',
		'app.realization',
		'app.insert',
		'app.structure',
		'app.attribute',
		'app.technical',
		'app.activation',
		'app.administrator',
		'app.post',
		'app.assistant',
		'app.secretary',
		'app.activations_post',
		'app.activations_insert',
		'app.activations_structure',
		'app.planification',
		'app.date_year',
		'app.description'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MinistriesTraining = ClassRegistry::init('MinistriesTraining');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MinistriesTraining);

		parent::tearDown();
	}

}
