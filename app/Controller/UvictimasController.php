<?php
App::uses('AppController', 'Controller');
/**
 * Uvictimas Controller
 *
 * @property Uvictima $Uvictima
 * @property PaginatorComponent $Paginator
 */
class UvictimasController extends AppController {

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
		$this->Uvictima->recursive = 0;
		$this->set('uvictimas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uvictima->exists($id)) {
			throw new NotFoundException(__('Invalid uvictima'));
		}
		$options = array('conditions' => array('Uvictima.' . $this->Uvictima->primaryKey => $id));
		$this->set('uvictima', $this->Uvictima->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uvictima->create();
			if ($this->Uvictima->save($this->request->data)) {
				$this->Session->setFlash(__('The uvictima has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uvictima could not be saved. Please, try again.'));
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
		if (!$this->Uvictima->exists($id)) {
			throw new NotFoundException(__('Invalid uvictima'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uvictima->save($this->request->data)) {
				$this->Session->setFlash(__('The uvictima has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uvictima could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uvictima.' . $this->Uvictima->primaryKey => $id));
			$this->request->data = $this->Uvictima->find('first', $options);
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
		$this->Uvictima->id = $id;
		if (!$this->Uvictima->exists()) {
			throw new NotFoundException(__('Invalid uvictima'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Uvictima->delete()) {
			$this->Session->setFlash(__('The uvictima has been deleted.'));
		} else {
			$this->Session->setFlash(__('The uvictima could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
