<?php
App::uses('AppController', 'Controller');
/**
 * Ugrupoapoyos Controller
 *
 * @property Ugrupoapoyo $Ugrupoapoyo
 * @property PaginatorComponent $Paginator
 */
class UgrupoapoyosController extends AppController {

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
		$this->Ugrupoapoyo->recursive = 0;
		$this->set('ugrupoapoyos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ugrupoapoyo->exists($id)) {
			throw new NotFoundException(__('Invalid ugrupoapoyo'));
		}
		$options = array('conditions' => array('Ugrupoapoyo.' . $this->Ugrupoapoyo->primaryKey => $id));
		$this->set('ugrupoapoyo', $this->Ugrupoapoyo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ugrupoapoyo->create();
			if ($this->Ugrupoapoyo->save($this->request->data)) {
				$this->Session->setFlash(__('The ugrupoapoyo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ugrupoapoyo could not be saved. Please, try again.'));
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
		if (!$this->Ugrupoapoyo->exists($id)) {
			throw new NotFoundException(__('Invalid ugrupoapoyo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ugrupoapoyo->save($this->request->data)) {
				$this->Session->setFlash(__('The ugrupoapoyo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ugrupoapoyo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ugrupoapoyo.' . $this->Ugrupoapoyo->primaryKey => $id));
			$this->request->data = $this->Ugrupoapoyo->find('first', $options);
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
		$this->Ugrupoapoyo->id = $id;
		if (!$this->Ugrupoapoyo->exists()) {
			throw new NotFoundException(__('Invalid ugrupoapoyo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ugrupoapoyo->delete()) {
			$this->Session->setFlash(__('The ugrupoapoyo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ugrupoapoyo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
