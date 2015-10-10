<?php
/**
 * GrupoapoyoFixture
 *
 */
class GrupoapoyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'grupoapoyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idgrupoApoyo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ugrupoApoyo_idugrupoApoyo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'listaFavoritos_idlistaFavoritos' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idgrupoApoyo', 'unique' => 1),
			'ugrupoApoyo_idugrupoApoyo' => array('column' => 'ugrupoApoyo_idugrupoApoyo', 'unique' => 0),
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
			'idgrupoApoyo' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ip',
			'ugrupoApoyo_idugrupoApoyo' => 1,
			'listaFavoritos_idlistaFavoritos' => 1
		),
	);

}
