<?php
App::uses('Assistant', 'Model');

/**
 * Assistant Test Case
 */
class AssistantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assistant',
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
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assistant = ClassRegistry::init('Assistant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assistant);

		parent::tearDown();
	}

}
