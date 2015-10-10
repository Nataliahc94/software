<?php
App::uses('AppController', 'Controller');
/**
 * Umedicos Controller
 *
 * @property Umedico $Umedico
 * @property PaginatorComponent $Paginator
 */
class UmedicosController extends AppController {

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
		$this->Umedico->recursive = 0;
		$this->set('umedicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Umedico->exists($id)) {
			throw new NotFoundException(__('Invalid umedico'));
		}
		$options = array('conditions' => array('Umedico.' . $this->Umedico->primaryKey => $id));
		$this->set('umedico', $this->Umedico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Umedico->create();
			if ($this->Umedico->save($this->request->data)) {
				$this->Session->setFlash(__('The umedico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The umedico could not be saved. Please, try again.'));
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
		if (!$this->Umedico->exists($id)) {
			throw new NotFoundException(__('Invalid umedico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Umedico->save($this->request->data)) {
				$this->Session->setFlash(__('The umedico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The umedico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Umedico.' . $this->Umedico->primaryKey => $id));
			$this->request->data = $this->Umedico->find('first', $options);
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
		$this->Umedico->id = $id;
		if (!$this->Umedico->exists()) {
			throw new NotFoundException(__('Invalid umedico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Umedico->delete()) {
			$this->Session->setFlash(__('The umedico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The umedico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
