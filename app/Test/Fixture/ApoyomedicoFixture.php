<?php
/**
 * ApoyomedicoFixture
 *
 */
class ApoyomedicoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'apoyomedico';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idapoyoMedico' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'especialista' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'umedico_idumedico' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'listaFavoritos_idlistaFavoritos' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idapoyoMedico', 'unique' => 1),
			'umedico_idumedico' => array('column' => 'umedico_idumedico', 'unique' => 0),
			'listaFavoritos_idlistaFavoritos' => array('column' => 'listaFavoritos_idlistaFavoritos', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idapoyoMedico' => 1,
			'especialista' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ip',
			'umedico_idumedico' => 1,
			'listaFavoritos_idlistaFavoritos' => 1
		),
	);

}
