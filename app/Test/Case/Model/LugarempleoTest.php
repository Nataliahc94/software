<?php
App::uses('Lugarempleo', 'Model');

/**
 * Lugarempleo Test Case
 *
 */
class LugarempleoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lugarempleo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lugarempleo = ClassRegistry::init('Lugarempleo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lugarempleo);

		parent::tearDown();
	}

}
