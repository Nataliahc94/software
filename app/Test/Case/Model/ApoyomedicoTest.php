<?php
App::uses('Apoyomedico', 'Model');

/**
 * Apoyomedico Test Case
 *
 */
class ApoyomedicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.apoyomedico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Apoyomedico = ClassRegistry::init('Apoyomedico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Apoyomedico);

		parent::tearDown();
	}

}
