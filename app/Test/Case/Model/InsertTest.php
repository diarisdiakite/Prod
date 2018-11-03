<?php
App::uses('Insert', 'Model');

/**
 * Insert Test Case
 */
class InsertTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.insert',
		'app.structure',
		'app.focal_point',
		'app.user',
		'app.group',
		'app.expert',
		'app.team',
		'app.ministry',
		'app.name',
		'app.planification',
		'app.financial_responsible',
		'app.financial_data',
		'app.post',
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
		'app.attribute',
		'app.technical'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Insert = ClassRegistry::init('Insert');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Insert);

		parent::tearDown();
	}

}
