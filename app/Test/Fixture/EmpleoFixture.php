<?php
/**
 * EmpleoFixture
 *
 */
class EmpleoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'empleo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idempleo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'requisitos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lugarEmpleo_idlugarEmpleo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'listaFavoritos_idlistaFavoritos' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idempleo', 'unique' => 1),
			'lugarEmpleo_idlugarEmpleo' => array('column' => 'lugarEmpleo_idlugarEmpleo', 'unique' => 0),
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
			'idempleo' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'requisitos' => 'Lorem ipsum dolor sit amet',
			'lugarEmpleo_idlugarEmpleo' => 1,
			'listaFavoritos_idlistaFavoritos' => 1
		),
	);

}
