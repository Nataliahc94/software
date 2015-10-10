<?php
App::uses('Protesi', 'Model');

/**
 * Protesi Test Case
 *
 */
class ProtesiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.protesi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Protesi = ClassRegistry::init('Protesi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Protesi);

		parent::tearDown();
	}

}
