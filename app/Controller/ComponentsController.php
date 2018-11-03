<?php
App::uses('AppController', 'Controller');
/**
 * Components Controller
 *
 * @property Component $Component
 * @property PaginatorComponent $Paginator
 */
class ComponentsController extends AppController {

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
		$this->Component->recursive = 0;
		$this->set('components', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Component->exists($id)) {
			throw new NotFoundException(__('Invalid component'));
		}
		$options = array('conditions' => array('Component.' . $this->Component->primaryKey => $id));
		$this->set('component', $this->Component->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Component->create();
			if ($this->Component->save($this->request->data)) {
				$this->Flash->success(__('The component has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The component could not be saved. Please, try again.'));
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
		if (!$this->Component->exists($id)) {
			throw new NotFoundException(__('Invalid component'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Component->save($this->request->data)) {
				$this->Flash->success(__('The component has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The component could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Component.' . $this->Component->primaryKey => $id));
			$this->request->data = $this->Component->find('first', $options);
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
		$this->Component->id = $id;
		if (!$this->Component->exists()) {
			throw new NotFoundException(__('Invalid component'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Component->delete()) {
			$this->Flash->success(__('The component has been deleted.'));
		} else {
			$this->Flash->error(__('The component could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
