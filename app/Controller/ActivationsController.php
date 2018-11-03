<?php
App::uses('AppController', 'Controller');
/**
 * Activations Controller
 *
 * @property Activation $Activation
 * @property PaginatorComponent $Paginator
 */
class ActivationsController extends AppController {

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

 public function getActivationById($id){
		$data=$this->Activation->findById($id);
		return $data;
 }

	public function index() {
		$this->Activation->recursive = 0;
		$this->set('activations', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Activation->recursive = 0;
		$this->set('activations', $this->Paginator->paginate());
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
		if (!$this->Activation->exists($id)) {
			throw new NotFoundException(__('Invalid activation'));
		}
		$options = array('conditions' => array('Activation.' . $this->Activation->primaryKey => $id));
		$this->set('activation', $this->Activation->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Activation->exists($id)) {
			throw new NotFoundException(__('Invalid activation'));
		}
		$options = array('conditions' => array('Activation.' . $this->Activation->primaryKey => $id));
		$this->set('activation', $this->Activation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function add() {
	 if ($this->request->is('post')) {
		 $this->Activation->create();
		 if ($this->Activation->save($this->request->data)) {
			 $this->Flash->success(__('The activation has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The activation could not be saved. Please, try again.'));
		 }
	 }
	 $users = $this->Activation->User->find('list');
	 $administrators = $this->Activation->Administrator->find('list');
	 $inserts = $this->Activation->Insert->find('list');
	 $posts = $this->Activation->Post->find('list');
	 $structures = $this->Activation->Structure->find('list');
	 $this->set(compact('users', 'administrators', 'inserts', 'posts', 'structures'));
 }

	public function activation_post() {
		if ($this->request->is('post')) {
			$this->Activation->create();
			if ($this->Activation->save($this->request->data)) {
				$this->Flash->success(__('The activation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Activation->User->find('list');
		$administrators = $this->Activation->Administrator->find('list');
		$inserts = $this->Activation->Insert->find('list');
		$posts = $this->Activation->Post->find('list');
		$structures = $this->Activation->Structure->find('list');
		$this->set(compact('users', 'administrators', 'inserts', 'posts', 'structures'));
	}

	public function activation_insert() {
		if ($this->request->is('post')) {
			$this->Activation->create();
			if ($this->Activation->save($this->request->data)) {
				$this->Flash->success(__('The activation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Activation->User->find('list');
		$administrators = $this->Activation->Administrator->find('list');
		$inserts = $this->Activation->Insert->find('list');
		$posts = $this->Activation->Post->find('list');
		$structures = $this->Activation->Structure->find('list');
		$this->set(compact('users', 'administrators', 'inserts', 'posts', 'structures'));
	}

	public function activation_structure() {
		if ($this->request->is('post')) {
			$this->Activation->create();
			if ($this->Activation->save($this->request->data)) {
				$this->Flash->success(__('The activation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Activation->User->find('list');
		$administrators = $this->Activation->Administrator->find('list');
		$inserts = $this->Activation->Insert->find('list');
		$posts = $this->Activation->Post->find('list');
		$structures = $this->Activation->Structure->find('list');
		$this->set(compact('users', 'administrators', 'inserts', 'posts', 'structures'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Activation->exists($id)) {
			throw new NotFoundException(__('Invalid activation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activation->save($this->request->data)) {
				$this->Flash->success(__('The activation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Activation.' . $this->Activation->primaryKey => $id));
			$this->request->data = $this->Activation->find('first', $options);
		}
		$users = $this->Activation->User->find('list');
		$administrators = $this->Activation->Administrator->find('list');
		$inserts = $this->Activation->Insert->find('list');
		$posts = $this->Activation->Post->find('list');
		$structures = $this->Activation->Structure->find('list');
		$this->set(compact('users', 'administrators', 'inserts', 'posts', 'structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Activation->id = $id;
		if (!$this->Activation->exists()) {
			throw new NotFoundException(__('Invalid activation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activation->delete()) {
			$this->Flash->success(__('The activation has been deleted.'));
		} else {
			$this->Flash->error(__('The activation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
