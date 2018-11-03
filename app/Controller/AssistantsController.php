<?php
App::uses('AppController', 'Controller');
/**
 * Assistants Controller
 *
 * @property Assistant $Assistant
 * @property PaginatorComponent $Paginator
 */
class AssistantsController extends AppController {

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

 public function getAssistantById($id){
		 $data=$this->Assistant->findById($id);
		 return $data;
 }

	public function index() {
		$this->Assistant->recursive = 0;
		$this->set('assistants', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Assistant->recursive = 0;
		$this->set('assistants', $this->Paginator->paginate());
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
		if (!$this->Assistant->exists($id)) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		$options = array('conditions' => array('Assistant.' . $this->Assistant->primaryKey => $id));
		$this->set('assistant', $this->Assistant->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Assistant->exists($id)) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		$options = array('conditions' => array('Assistant.' . $this->Assistant->primaryKey => $id));
		$this->set('assistant', $this->Assistant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assistant->create();
			if ($this->Assistant->save($this->request->data)) {
				$this->Flash->success(__('The assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assistant could not be saved. Please, try again.'));
			}
		}
		$users = $this->Assistant->User->find('list');
		$posts = $this->Assistant->Post->find('list');
		$this->set(compact('users', 'posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assistant->exists($id)) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assistant->save($this->request->data)) {
				$this->Flash->success(__('The assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assistant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assistant.' . $this->Assistant->primaryKey => $id));
			$this->request->data = $this->Assistant->find('first', $options);
		}
		$users = $this->Assistant->User->find('list');
		$posts = $this->Assistant->Post->find('list');
		$this->set(compact('users', 'posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Assistant->id = $id;
		if (!$this->Assistant->exists()) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Assistant->delete()) {
			$this->Flash->success(__('The assistant has been deleted.'));
		} else {
			$this->Flash->error(__('The assistant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
