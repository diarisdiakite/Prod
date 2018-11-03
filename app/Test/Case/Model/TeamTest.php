<?php
App::uses('Team', 'Model');

/**
 * Team Test Case
 */
class TeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.team',
		'app.ministry',
		'app.name',
		'app.focal_point',
		'app.user',
		'app.group',
		'app.expert',
		'app.financial_responsible',
		'app.financial_data',
		'app.post',
		'app.finances_responsible',
		'app.financial',
		'app.project_actions',
		'app.structure',
		'app.attribute',
		'app.technical',
		'app.planification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Team = ClassRegistry::init('Team');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Team);

		parent::tearDown();
	}

}
