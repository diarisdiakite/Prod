<?php
App::uses('Technical', 'Model');

/**
 * Technical Test Case
 */
class TechnicalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.technical',
		'app.structure',
		'app.focal_point',
		'app.user',
		'app.group',
		'app.expert',
		'app.financial_responsible',
		'app.financial_data',
		'app.post',
		'app.ministry',
		'app.name',
		'app.planification',
		'app.attribute',
		'app.project_actions'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Technical = ClassRegistry::init('Technical');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Technical);

		parent::tearDown();
	}

}
