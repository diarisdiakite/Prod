<?php
App::uses('Curriculum', 'Model');

/**
 * Curriculum Test Case
 */
class CurriculumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curriculum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Curriculum = ClassRegistry::init('Curriculum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curriculum);

		parent::tearDown();
	}

}
