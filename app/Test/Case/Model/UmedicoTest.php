<?php
App::uses('Umedico', 'Model');

/**
 * Umedico Test Case
 *
 */
class UmedicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.umedico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Umedico = ClassRegistry::init('Umedico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Umedico);

		parent::tearDown();
	}

}
