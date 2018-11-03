<?php
App::uses('AppController', 'Controller');
/**
 * Names Controller
 *
 * @property Name $Name
 * @property PaginatorComponent $Paginator
 */
class NamesController extends AppController {

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

 public function getNameById($id){
			$data=$this->Name->findById($id);
			return $data;
 }

	public function index() {
		$this->Name->recursive = 0;
		$this->set('names', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Name->recursive = 0;
		$this->set('names', $this->Paginator->paginate());
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
		if (!$this->Name->exists($id)) {
			throw new NotFoundException(__('Invalid name'));
		}
		$options = array('conditions' => array('Name.' . $this->Name->primaryKey => $id));
		$this->set('name', $this->Name->find('first', $options));
	}

	public function admin_view($id = null) {
		
		if (!$this->Name->exists($id)) {
			throw new NotFoundException(__('Invalid name'));
		}
		$options = array('conditions' => array('Name.' . $this->Name->primaryKey => $id));
		$this->set('name', $this->Name->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Name->create();
			if ($this->Name->save($this->request->data)) {
				$this->Flash->success(__('The name has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The name could not be saved. Please, try again.'));
			}
		}
	 $users = $this->Name->User->find('list');
 	 $descriptions = $this->Name->Description->find('list');
 	 $this->set(compact('users', 'descriptions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Name->exists($id)) {
			throw new NotFoundException(__('Invalid name'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Name->save($this->request->data)) {
				$this->Flash->success(__('The name has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The name could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Name.' . $this->Name->primaryKey => $id));
			$this->request->data = $this->Name->find('first', $options);
		}
		$users = $this->Name->User->find('list');
  	 $descriptions = $this->Name->Description->find('list');
  	 $this->set(compact('users', 'descriptions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Name->id = $id;
		if (!$this->Name->exists()) {
			throw new NotFoundException(__('Invalid name'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Name->delete()) {
			$this->Flash->success(__('The name has been deleted.'));
		} else {
			$this->Flash->error(__('The name could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
