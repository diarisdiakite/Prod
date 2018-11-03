<?php
App::uses('DateYear', 'Model');

/**
 * DateYear Test Case
 */
class DateYearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.date_year'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DateYear = ClassRegistry::init('DateYear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DateYear);

		parent::tearDown();
	}

}
