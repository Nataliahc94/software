<?php
App::uses('AppController', 'Controller');
/**
 * Listafavoritos Controller
 *
 * @property Listafavorito $Listafavorito
 * @property PaginatorComponent $Paginator
 */
class ListafavoritosController extends AppController {

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
		$this->Listafavorito->recursive = 0;
		$this->set('listafavoritos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Listafavorito->exists($id)) {
			throw new NotFoundException(__('Invalid listafavorito'));
		}
		$options = array('conditions' => array('Listafavorito.' . $this->Listafavorito->primaryKey => $id));
		$this->set('listafavorito', $this->Listafavorito->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Listafavorito->create();
			if ($this->Listafavorito->save($this->request->data)) {
				$this->Session->setFlash(__('The listafavorito has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listafavorito could not be saved. Please, try again.'));
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
		if (!$this->Listafavorito->exists($id)) {
			throw new NotFoundException(__('Invalid listafavorito'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Listafavorito->save($this->request->data)) {
				$this->Session->setFlash(__('The listafavorito has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listafavorito could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Listafavorito.' . $this->Listafavorito->primaryKey => $id));
			$this->request->data = $this->Listafavorito->find('first', $options);
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
		$this->Listafavorito->id = $id;
		if (!$this->Listafavorito->exists()) {
			throw new NotFoundException(__('Invalid listafavorito'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Listafavorito->delete()) {
			$this->Session->setFlash(__('The listafavorito has been deleted.'));
		} else {
			$this->Session->setFlash(__('The listafavorito could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
