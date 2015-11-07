<?php
App::uses('AppController', 'Controller');
/**
 * Grupoapoyos Controller
 *
 * @property Grupoapoyo $Grupoapoyo
 * @property PaginatorComponent $Paginator
 */
class GrupoapoyosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grupoapoyo->recursive = 0;
		$this->set('grupoapoyos', $this->Paginator->paginate());
	}
	public function indexh() {
		$this->Grupoapoyo->recursive = 0;
		$this->set('grupoapoyos', $this->Paginator->paginate());

	}
	public function indexu() {
		$this->Grupoapoyo->recursive = 0;
		$this->set('grupoapoyos', $this->Paginator->paginate());

	}
	public function indexg() {
		$this->Grupoapoyo->recursive = 0;
		$this->set('grupoapoyos', $this->Paginator->paginate());

	}
	public function quineness()
	{

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupoapoyo->exists($id)) {
			throw new NotFoundException(__('Invalid grupoapoyo'));
		}
		$options = array('conditions' => array('Grupoapoyo.' . $this->Grupoapoyo->primaryKey => $id));
		$this->set('grupoapoyo', $this->Grupoapoyo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupoapoyo->create();
			if ($this->Grupoapoyo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupoapoyo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupoapoyo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grupoapoyo->exists($id)) {
			throw new NotFoundException(__('Invalid grupoapoyo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grupoapoyo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupoapoyo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupoapoyo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grupoapoyo.' . $this->Grupoapoyo->primaryKey => $id));
			$this->request->data = $this->Grupoapoyo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grupoapoyo->id = $id;
		if (!$this->Grupoapoyo->exists()) {
			throw new NotFoundException(__('Invalid grupoapoyo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grupoapoyo->delete()) {
			$this->Session->setFlash(__('The grupoapoyo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grupoapoyo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function inicio() {

	}
	public function home() {

	}
	public function favoritos() {
			session_start(); 
    		include_once "../View/Protesis/conexion.php"; 

		    if( isset($_POST['idgrupoApoyo']) )
		     {
			      $idgrupoApoyo = $_POST['idgrupoApoyo'];
			     echo $idgrupoApoyo;

			     	$idvictima=$_SESSION["idvictima"];
			     	echo $idvictima;
				   
				    	

				    $consultaid1 = "INSERT into listafavoritos values ('','$idvictima','', '3', '', '$idgrupoApoyo','');";    
					$tipo1consultaid = mysql_query($consultaid1); 
				
					
					$teneridfav = "SELECT  idlistaFavoritos from listafavoritos where idusuario='$idvictima' and idgrupoApoyo_fav = '$idgrupoApoyo';";  

				   

				    $tipo1consulta2 = mysql_query($teneridfav); 

				    $fila=mysql_fetch_row($tipo1consulta2);
				              $idfav= $fila[0] ;
				              echo $idfav;


				    
				                       


				     if(!$tipo1consultaid)
				     {
				        echo "No se pudo ejecutar la consulta 1";
				     }
				     if(!$tipo1consulta2)
				     {
				     	echo  "no se puedo ejecutar la consulta 2";
				     }
				    




		     } 
		     else 
		     {
		      	echo "no entro";
		     }
    	
   
		//echo "jaaaaaaaaaa   "+$idProtesis;
		return false;
	}
}
