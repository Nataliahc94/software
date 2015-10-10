<?php
App::uses('Uempleador', 'Model');

/**
 * Uempleador Test Case
 *
 */
class UempleadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uempleador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uempleador = ClassRegistry::init('Uempleador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uempleador);

		parent::tearDown();
	}

}
