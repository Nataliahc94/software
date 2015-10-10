<?php
App::uses('AppController', 'Controller');
/**
 * Utiendaprotesis Controller
 *
 * @property Utiendaprotesi $Utiendaprotesi
 * @property PaginatorComponent $Paginator
 */
class UtiendaprotesisController extends AppController {

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
		$this->Utiendaprotesi->recursive = 0;
		$this->set('utiendaprotesis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Utiendaprotesi->exists($id)) {
			throw new NotFoundException(__('Invalid utiendaprotesi'));
		}
		$options = array('conditions' => array('Utiendaprotesi.' . $this->Utiendaprotesi->primaryKey => $id));
		$this->set('utiendaprotesi', $this->Utiendaprotesi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Utiendaprotesi->create();
			if ($this->Utiendaprotesi->save($this->request->data)) {
				$this->Session->setFlash(__('The utiendaprotesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The utiendaprotesi could not be saved. Please, try again.'));
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
		if (!$this->Utiendaprotesi->exists($id)) {
			throw new NotFoundException(__('Invalid utiendaprotesi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Utiendaprotesi->save($this->request->data)) {
				$this->Session->setFlash(__('The utiendaprotesi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The utiendaprotesi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Utiendaprotesi.' . $this->Utiendaprotesi->primaryKey => $id));
			$this->request->data = $this->Utiendaprotesi->find('first', $options);
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
		$this->Utiendaprotesi->id = $id;
		if (!$this->Utiendaprotesi->exists()) {
			throw new NotFoundException(__('Invalid utiendaprotesi'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Utiendaprotesi->delete()) {
			$this->Session->setFlash(__('The utiendaprotesi has been deleted.'));
		} else {
			$this->Session->setFlash(__('The utiendaprotesi could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
