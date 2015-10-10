<?php
App::uses('Utiendaprotesi', 'Model');

/**
 * Utiendaprotesi Test Case
 *
 */
class UtiendaprotesiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.utiendaprotesi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Utiendaprotesi = ClassRegistry::init('Utiendaprotesi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Utiendaprotesi);

		parent::tearDown();
	}

}
