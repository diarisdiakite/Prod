<?php
App::uses('ActivationsPost', 'Model');

/**
 * ActivationsPost Test Case
 */
class ActivationsPostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activations_post',
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
		'app.administrator',
		'app.insert',
		'app.activations_insert',
		'app.activations_structure'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActivationsPost = ClassRegistry::init('ActivationsPost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivationsPost);

		parent::tearDown();
	}

}
