<?php
App::uses('AppController', 'Controller');
/**
 * Lugarprotesis Controller
 *
 * @property Lugarprotesi $Lugarprotesi
 * @property PaginatorComponent $Paginator
 */
class LugarprotesisController extends AppController {

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
		$this->Lugarprotesi->recursive = 0;
		$this->set('lugarprotesis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lugarprotesi->exists($id)) {
			throw new NotFoundException(__('Invalid lugarprotesi'));
		}
		$options = array('conditions' => array('Lugarprotesi.' . $this->Lugarprotesi->primaryKey => $id));
		$this->set('lugarprotesi', $this->Lugarprotesi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lugarprotesi->create();
			if ($this->Lugarprotesi->save($this->request->data)) {
				$this->Session->setFlash(__('The lugarprotesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugarprotesi could not be saved. Please, try again.'));
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
		if (!$this->Lugarprotesi->exists($id)) {
			throw new NotFoundException(__('Invalid lugarprotesi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lugarprotesi->save($this->request->data)) {
				$this->Session->setFlash(__('The lugarprotesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugarprotesi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lugarprotesi.' . $this->Lugarprotesi->primaryKey => $id));
			$this->request->data = $this->Lugarprotesi->find('first', $options);
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
		$this->Lugarprotesi->id = $id;
		if (!$this->Lugarprotesi->exists()) {
			throw new NotFoundException(__('Invalid lugarprotesi'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lugarprotesi->delete()) {
			$this->Session->setFlash(__('The lugarprotesi has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lugarprotesi could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
