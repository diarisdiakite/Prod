<?php
App::uses('Description', 'Model');

/**
 * Description Test Case
 */
class DescriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.description',
		'app.name',
		'app.ministry',
		'app.team',
		'app.expert',
		'app.user',
		'app.group',
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
		'app.focal_point',
		'app.structure',
		'app.attribute',
		'app.technical',
		'app.post',
		'app.planification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Description = ClassRegistry::init('Description');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Description);

		parent::tearDown();
	}

}
