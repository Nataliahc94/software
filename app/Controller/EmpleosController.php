<?php
App::uses('AppController', 'Controller');
/**
 * Empleos Controller
 *
 * @property Empleo $Empleo
 * @property PaginatorComponent $Paginator
 */
class EmpleosController extends AppController {

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
		$this->Empleo->recursive = 0;
		$this->set('empleos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empleo->exists($id)) {
			throw new NotFoundException(__('Invalid empleo'));
		}
		$options = array('conditions' => array('Empleo.' . $this->Empleo->primaryKey => $id));
		$this->set('empleo', $this->Empleo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empleo->create();
			if ($this->Empleo->save($this->request->data)) {
				$this->Session->setFlash(__('The empleo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleo could not be saved. Please, try again.'));
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
		if (!$this->Empleo->exists($id)) {
			throw new NotFoundException(__('Invalid empleo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empleo->save($this->request->data)) {
				$this->Session->setFlash(__('The empleo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empleo.' . $this->Empleo->primaryKey => $id));
			$this->request->data = $this->Empleo->find('first', $options);
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
		$this->Empleo->id = $id;
		if (!$this->Empleo->exists()) {
			throw new NotFoundException(__('Invalid empleo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Empleo->delete()) {
			$this->Session->setFlash(__('The empleo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The empleo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
