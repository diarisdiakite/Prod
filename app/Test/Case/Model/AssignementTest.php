<?php
App::uses('Assignement', 'Model');

/**
 * Assignement Test Case
 */
class AssignementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assignement',
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
		'app.date_year',
		'app.activation',
		'app.administrator',
		'app.post',
		'app.assistant',
		'app.secretary',
		'app.activations_post',
		'app.activations_insert',
		'app.activations_structure',
		'app.technical',
		'app.operation',
		'app.assignment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assignement = ClassRegistry::init('Assignement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assignement);

		parent::tearDown();
	}

}
