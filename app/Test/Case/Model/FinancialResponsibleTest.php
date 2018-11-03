<?php
App::uses('FinancialResponsible', 'Model');

/**
 * FinancialResponsible Test Case
 */
class FinancialResponsibleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financial_responsible',
		'app.user',
		'app.financial_data',
		'app.focal_point'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinancialResponsible = ClassRegistry::init('FinancialResponsible');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinancialResponsible);

		parent::tearDown();
	}

}
