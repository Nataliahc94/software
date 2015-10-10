<?php
App::uses('AppModel', 'Model');
/**
 * Listafavorito Model
 *
 */
class Listafavorito extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idlistaFavoritos';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'idlistaFavoritos';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idlistaFavoritos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
