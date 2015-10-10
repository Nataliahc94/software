<?php
App::uses('AppController', 'Controller');
/**
 * Uempleadors Controller
 *
 * @property Uempleador $Uempleador
 * @property PaginatorComponent $Paginator
 */
class UempleadorsController extends AppController {

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
		$this->Uempleador->recursive = 0;
		$this->set('uempleadors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uempleador->exists($id)) {
			throw new NotFoundException(__('Invalid uempleador'));
		}
		$options = array('conditions' => array('Uempleador.' . $this->Uempleador->primaryKey => $id));
		$this->set('uempleador', $this->Uempleador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uempleador->create();
			if ($this->Uempleador->save($this->request->data)) {
				$this->Session->setFlash(__('The uempleador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uempleador could not be saved. Please, try again.'));
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
		if (!$this->Uempleador->exists($id)) {
			throw new NotFoundException(__('Invalid uempleador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uempleador->save($this->request->data)) {
				$this->Session->setFlash(__('The uempleador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uempleador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uempleador.' . $this->Uempleador->primaryKey => $id));
			$this->request->data = $this->Uempleador->find('first', $options);
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
		$this->Uempleador->id = $id;
		if (!$this->Uempleador->exists()) {
			throw new NotFoundException(__('Invalid uempleador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Uempleador->delete()) {
			$this->Session->setFlash(__('The uempleador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The uempleador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
