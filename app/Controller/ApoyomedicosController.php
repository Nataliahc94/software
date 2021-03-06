<?php
App::uses('AppController', 'Controller');
/**
 * Apoyomedicos Controller
 *
 * @property Apoyomedico $Apoyomedico
 * @property PaginatorComponent $Paginator
 */
class ApoyomedicosController extends AppController {

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
		$this->Apoyomedico->recursive = 0;
		$this->set('apoyomedicos', $this->Paginator->paginate());
	}

	public function indexh() {
		$this->Apoyomedico->recursive = 0;
		$this->set('apoyomedicos', $this->Paginator->paginate());
	}
	public function quineness()
	{

	}
	public function indexa() {
		$this->Apoyomedico->recursive = 0;
		$this->set('apoyomedicos', $this->Paginator->paginate());
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Apoyomedico->exists($id)) {
			throw new NotFoundException(__('Invalid apoyomedico'));
		}
		$options = array('conditions' => array('Apoyomedico.' . $this->Apoyomedico->primaryKey => $id));
		$this->set('apoyomedico', $this->Apoyomedico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Apoyomedico->create();
			if ($this->Apoyomedico->save($this->request->data)) {
				$this->Session->setFlash(__('The apoyomedico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apoyomedico could not be saved. Please, try again.'));
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
		if (!$this->Apoyomedico->exists($id)) {
			throw new NotFoundException(__('Invalid apoyomedico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Apoyomedico->save($this->request->data)) {
				$this->Session->setFlash(__('The apoyomedico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apoyomedico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Apoyomedico.' . $this->Apoyomedico->primaryKey => $id));
			$this->request->data = $this->Apoyomedico->find('first', $options);
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
		$this->Apoyomedico->id = $id;
		if (!$this->Apoyomedico->exists()) {
			throw new NotFoundException(__('Invalid apoyomedico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Apoyomedico->delete()) {
			$this->Session->setFlash(__('The apoyomedico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The apoyomedico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function inicio() {

	}
	public function apoyomedico() {

		$this->Apoyomedico->recursive = 0;
		$this->set('apoyomedicos', $this->Paginator->paginate());
	} 

	public function favoritos() {
			session_start(); 
    		include_once "../View/Protesis/conexion.php"; 

		    if( isset($_POST['idapoyoMedico']) )
		     {
			      $idapoyoMedico = $_POST['idapoyoMedico'];
			     echo $idapoyoMedico;

			     	$idvictima=$_SESSION["idvictima"];
			     	echo $idvictima;
				   
				    	

				    $consultaid1 = "INSERT into listafavoritos values ('','$idvictima','', '2','$idapoyoMedico','','');";    
					$tipo1consultaid = mysql_query($consultaid1); 
				
					
					$teneridfav = "SELECT  idlistaFavoritos from listafavoritos where idusuario='$idvictima' and idApoyoMedico_fav = '$idapoyoMedico';";  

				   

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
    	
   
		echo "jaaaaaaaaaa   "+$idapoyoMedico;
		return false;
	}
}
