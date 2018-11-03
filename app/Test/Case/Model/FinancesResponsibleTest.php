<?php
App::uses('FinancesResponsible', 'Model');

/**
 * FinancesResponsible Test Case
 */
class FinancesResponsibleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finances_responsible',
		'app.user',
		'app.group',
		'app.expert',
		'app.focal_point',
		'app.ministry',
		'app.name',
		'app.planification',
		'app.structure',
		'app.attribute',
		'app.technical_data',
		'app.financial_responsible',
		'app.financial_data',
		'app.post',
		'app.financial',
		'app.project_actions'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinancesResponsible = ClassRegistry::init('FinancesResponsible');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinancesResponsible);

		parent::tearDown();
	}

}
