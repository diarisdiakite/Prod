<?php
App::uses('AppController', 'Controller');
/**
 * Operations Controller
 *
 * @property Operation $Operation
 * @property PaginatorComponent $Paginator
 */
class OperationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */

 public function beforeFilter() {
	 parent::beforeFilter();
	 $this->Auth->allow('liste', 'view');//('index', 'view');
 }

 public function getOperationById($id){
			$data=$this->Operation->findById($id);
			return $data;
 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Operation->recursive = 0;
		$this->set('operations', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Operation->recursive = 0;
		$this->set('operations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='wsite';
		if (!$this->Operation->exists($id)) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$options = array('conditions' => array('Operation.' . $this->Operation->primaryKey => $id));
		$this->set('operation', $this->Operation->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Operation->exists($id)) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$options = array('conditions' => array('Operation.' . $this->Operation->primaryKey => $id));
		$this->set('operation', $this->Operation->find('first', $options));
	}

	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Operation->create();
			if ($this->Operation->save($this->request->data)) {
				$this->Flash->success(__('The operation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The operation could not be saved. Please, try again.'));
			}
		}
		$assignements = $this->Operation->Assignement->find('list');
		$users = $this->Operation->User->find('list');
		$this->set(compact('assignements', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Operation->exists($id)) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Operation->save($this->request->data)) {
				$this->Flash->success(__('The operation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The operation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Operation.' . $this->Operation->primaryKey => $id));
			$this->request->data = $this->Operation->find('first', $options);
		}
		$assignements = $this->Operation->Assignement->find('list');
		$users = $this->Operation->User->find('list');
		$this->set(compact('assignements', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Operation->delete()) {
			$this->Flash->success(__('The operation has been deleted.'));
		} else {
			$this->Flash->error(__('The operation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
