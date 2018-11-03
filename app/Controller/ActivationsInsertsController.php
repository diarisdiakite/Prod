<?php
App::uses('AppController', 'Controller');
/**
 * ActivationsInserts Controller
 *
 * @property ActivationsInsert $ActivationsInsert
 * @property PaginatorComponent $Paginator
 */
class ActivationsInsertsController extends AppController {

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
	$this->Auth->allow();//('index', 'view');
 }

 public function getActivationInsertById($id){
		 $data=$this->ActivationInsert->findById($id);
		 return $data;
 }

	public function index() {
		$this->ActivationsInsert->recursive = 0;
		$this->set('activationsInserts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivationsInsert->exists($id)) {
			throw new NotFoundException(__('Invalid activations insert'));
		}
		$options = array('conditions' => array('ActivationsInsert.' . $this->ActivationsInsert->primaryKey => $id));
		$this->set('activationsInsert', $this->ActivationsInsert->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivationsInsert->create();
			if ($this->ActivationsInsert->save($this->request->data)) {
				$this->Flash->success(__('The activations insert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations insert could not be saved. Please, try again.'));
			}
		}
		$users = $this->ActivationsInsert->User->find('list');
		$activations = $this->ActivationsInsert->Activation->find('list');
		$inserts = $this->ActivationsInsert->Insert->find('list');
		$this->set(compact('users', 'activations', 'inserts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivationsInsert->exists($id)) {
			throw new NotFoundException(__('Invalid activations insert'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivationsInsert->save($this->request->data)) {
				$this->Flash->success(__('The activations insert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations insert could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivationsInsert.' . $this->ActivationsInsert->primaryKey => $id));
			$this->request->data = $this->ActivationsInsert->find('first', $options);
		}
		$users = $this->ActivationsInsert->User->find('list');
		$activations = $this->ActivationsInsert->Activation->find('list');
		$inserts = $this->ActivationsInsert->Insert->find('list');
		$this->set(compact('users', 'activations', 'inserts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivationsInsert->id = $id;
		if (!$this->ActivationsInsert->exists()) {
			throw new NotFoundException(__('Invalid activations insert'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActivationsInsert->delete()) {
			$this->Flash->success(__('The activations insert has been deleted.'));
		} else {
			$this->Flash->error(__('The activations insert could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
