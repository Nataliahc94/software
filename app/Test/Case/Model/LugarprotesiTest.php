<?php
App::uses('Lugarprotesi', 'Model');

/**
 * Lugarprotesi Test Case
 *
 */
class LugarprotesiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lugarprotesi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lugarprotesi = ClassRegistry::init('Lugarprotesi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lugarprotesi);

		parent::tearDown();
	}

}
