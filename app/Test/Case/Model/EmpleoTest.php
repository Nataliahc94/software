<?php
App::uses('Empleo', 'Model');

/**
 * Empleo Test Case
 *
 */
class EmpleoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empleo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Empleo = ClassRegistry::init('Empleo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empleo);

		parent::tearDown();
	}

}
