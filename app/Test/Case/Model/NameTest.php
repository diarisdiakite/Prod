<?php
App::uses('Name', 'Model');

/**
 * Name Test Case
 */
class NameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.name',
		'app.ministry',
		'app.focal_point',
		'app.user',
		'app.expert',
		'app.financial_responsible',
		'app.financial_data',
		'app.structure',
		'app.planification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Name = ClassRegistry::init('Name');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Name);

		parent::tearDown();
	}

}
