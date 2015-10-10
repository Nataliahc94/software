<?php
App::uses('AppController', 'Controller');
/**
 * Protesis Controller
 *
 * @property Protesi $Protesi
 * @property PaginatorComponent $Paginator
 */
class ProtesisController extends AppController {

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
		$this->Protesi->recursive = 0;
		$this->set('protesis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Protesi->exists($id)) {
			throw new NotFoundException(__('Invalid protesi'));
		}
		$options = array('conditions' => array('Protesi.' . $this->Protesi->primaryKey => $id));
		$this->set('protesi', $this->Protesi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Protesi->create();
			if ($this->Protesi->save($this->request->data)) {
				$this->Session->setFlash(__('The protesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The protesi could not be saved. Please, try again.'));
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
		if (!$this->Protesi->exists($id)) {
			throw new NotFoundException(__('Invalid protesi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Protesi->save($this->request->data)) {
				$this->Session->setFlash(__('The protesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The protesi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Protesi.' . $this->Protesi->primaryKey => $id));
			$this->request->data = $this->Protesi->find('first', $options);
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
		$this->Protesi->id = $id;
		if (!$this->Protesi->exists()) {
			throw new NotFoundException(__('Invalid protesi'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Protesi->delete()) {
			$this->Session->setFlash(__('The protesi has been deleted.'));
		} else {
			$this->Session->setFlash(__('The protesi could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
