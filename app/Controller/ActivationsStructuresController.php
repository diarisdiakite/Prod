<?php
App::uses('AppController', 'Controller');
/**
 * ActivationsStructures Controller
 *
 * @property ActivationsStructure $ActivationsStructure
 * @property PaginatorComponent $Paginator
 */
class ActivationsStructuresController extends AppController {

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

 public function getActivationStructureById($id){
		 $data=$this->ActivationStructure->findById($id);
		 return $data;
 }

	public function index() {
		$this->ActivationsStructure->recursive = 0;
		$this->set('activationsStructures', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivationsStructure->exists($id)) {
			throw new NotFoundException(__('Invalid activations structure'));
		}
		$options = array('conditions' => array('ActivationsStructure.' . $this->ActivationsStructure->primaryKey => $id));
		$this->set('activationsStructure', $this->ActivationsStructure->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivationsStructure->create();
			if ($this->ActivationsStructure->save($this->request->data)) {
				$this->Flash->success(__('The activations structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations structure could not be saved. Please, try again.'));
			}
		}
		$users = $this->ActivationsStructure->User->find('list');
		$activations = $this->ActivationsStructure->Activation->find('list');
		$structures = $this->ActivationsStructure->Structure->find('list');
		$this->set(compact('users', 'activations', 'structures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivationsStructure->exists($id)) {
			throw new NotFoundException(__('Invalid activations structure'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivationsStructure->save($this->request->data)) {
				$this->Flash->success(__('The activations structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations structure could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivationsStructure.' . $this->ActivationsStructure->primaryKey => $id));
			$this->request->data = $this->ActivationsStructure->find('first', $options);
		}
		$users = $this->ActivationsStructure->User->find('list');
		$activations = $this->ActivationsStructure->Activation->find('list');
		$structures = $this->ActivationsStructure->Structure->find('list');
		$this->set(compact('users', 'activations', 'structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivationsStructure->id = $id;
		if (!$this->ActivationsStructure->exists()) {
			throw new NotFoundException(__('Invalid activations structure'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActivationsStructure->delete()) {
			$this->Flash->success(__('The activations structure has been deleted.'));
		} else {
			$this->Flash->error(__('The activations structure could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
