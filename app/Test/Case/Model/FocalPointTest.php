<?php
App::uses('FocalPoint', 'Model');

/**
 * FocalPoint Test Case
 */
class FocalPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.focal_point',
		'app.user',
		'app.expert',
		'app.ministry',
		'app.financial_responsible',
		'app.financial_data',
		'app.structure'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FocalPoint = ClassRegistry::init('FocalPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FocalPoint);

		parent::tearDown();
	}

}
