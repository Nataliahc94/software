<?php
App::uses('Grupoapoyo', 'Model');

/**
 * Grupoapoyo Test Case
 *
 */
class GrupoapoyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupoapoyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupoapoyo = ClassRegistry::init('Grupoapoyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupoapoyo);

		parent::tearDown();
	}

}
