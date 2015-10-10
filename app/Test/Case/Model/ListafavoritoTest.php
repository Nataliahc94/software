<?php
App::uses('Listafavorito', 'Model');

/**
 * Listafavorito Test Case
 *
 */
class ListafavoritoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.listafavorito'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Listafavorito = ClassRegistry::init('Listafavorito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Listafavorito);

		parent::tearDown();
	}

}
