<?php
App::uses('AppController', 'Controller');
/**
 * Lugarempleos Controller
 *
 * @property Lugarempleo $Lugarempleo
 * @property PaginatorComponent $Paginator
 */
class LugarempleosController extends AppController {

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
		$this->Lugarempleo->recursive = 0;
		$this->set('lugarempleos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lugarempleo->exists($id)) {
			throw new NotFoundException(__('Invalid lugarempleo'));
		}
		$options = array('conditions' => array('Lugarempleo.' . $this->Lugarempleo->primaryKey => $id));
		$this->set('lugarempleo', $this->Lugarempleo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lugarempleo->create();
			if ($this->Lugarempleo->save($this->request->data)) {
				$this->Session->setFlash(__('The lugarempleo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugarempleo could not be saved. Please, try again.'));
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
		if (!$this->Lugarempleo->exists($id)) {
			throw new NotFoundException(__('Invalid lugarempleo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lugarempleo->save($this->request->data)) {
				$this->Session->setFlash(__('The lugarempleo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugarempleo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lugarempleo.' . $this->Lugarempleo->primaryKey => $id));
			$this->request->data = $this->Lugarempleo->find('first', $options);
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
		$this->Lugarempleo->id = $id;
		if (!$this->Lugarempleo->exists()) {
			throw new NotFoundException(__('Invalid lugarempleo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lugarempleo->delete()) {
			$this->Session->setFlash(__('The lugarempleo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lugarempleo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
