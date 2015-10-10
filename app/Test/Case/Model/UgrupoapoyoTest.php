<?php
App::uses('Ugrupoapoyo', 'Model');

/**
 * Ugrupoapoyo Test Case
 *
 */
class UgrupoapoyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ugrupoapoyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ugrupoapoyo = ClassRegistry::init('Ugrupoapoyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ugrupoapoyo);

		parent::tearDown();
	}

}
