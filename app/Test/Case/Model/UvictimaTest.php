<?php
App::uses('Uvictima', 'Model');

/**
 * Uvictima Test Case
 *
 */
class UvictimaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uvictima'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uvictima = ClassRegistry::init('Uvictima');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uvictima);

		parent::tearDown();
	}

}
