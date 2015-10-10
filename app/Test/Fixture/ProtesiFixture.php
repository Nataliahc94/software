<?php
/**
 * ProtesiFixture
 *
 */
class ProtesiFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idprotesis' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'material' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tamaño' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'precio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lugarProtesis_idlugarProtesis' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'listaFavoritos_idlistaFavoritos' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idprotesis', 'unique' => 1),
			'lugarProtesis_idlugarProtesis' => array('column' => 'lugarProtesis_idlugarProtesis', 'unique' => 0),
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
			'idprotesis' => 1,
			'tipo' => 'Lorem ipsum dolor sit amet',
			'material' => 'Lorem ipsum dolor sit amet',
			'tamaño' => 'Lorem ipsum dolor sit amet',
			'precio' => 'Lorem ipsum dolor sit amet',
			'lugarProtesis_idlugarProtesis' => 1,
			'listaFavoritos_idlistaFavoritos' => 1
		),
	);

}
