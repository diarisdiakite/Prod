<?php
App::uses('AppController', 'Controller');
/**
 * Secretaries Controller
 *
 * @property Secretary $Secretary
 * @property PaginatorComponent $Paginator
 */
class SecretariesController extends AppController {

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

 public function getSecretaryById($id){
		 $data=$this->Secretary->findById($id);
		 return $data;
 }

	public function index() {
		$this->Secretary->recursive = 0;
		$this->set('secretaries', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Secretary->recursive = 0;
		$this->set('secretaries', $this->Paginator->paginate());
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
		if (!$this->Secretary->exists($id)) {
			throw new NotFoundException(__('Invalid secretary'));
		}
		$options = array('conditions' => array('Secretary.' . $this->Secretary->primaryKey => $id));
		$this->set('secretary', $this->Secretary->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Secretary->exists($id)) {
			throw new NotFoundException(__('Invalid secretary'));
		}
		$options = array('conditions' => array('Secretary.' . $this->Secretary->primaryKey => $id));
		$this->set('secretary', $this->Secretary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Secretary->create();
			if ($this->Secretary->save($this->request->data)) {
				$this->Flash->success(__('The secretary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The secretary could not be saved. Please, try again.'));
			}
		}
		$users = $this->Secretary->User->find('list');
		$posts = $this->Secretary->Post->find('list');
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
		if (!$this->Secretary->exists($id)) {
			throw new NotFoundException(__('Invalid secretary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Secretary->save($this->request->data)) {
				$this->Flash->success(__('The secretary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The secretary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Secretary.' . $this->Secretary->primaryKey => $id));
			$this->request->data = $this->Secretary->find('first', $options);
		}
		$users = $this->Secretary->User->find('list');
		$posts = $this->Secretary->Post->find('list');
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
		$this->Secretary->id = $id;
		if (!$this->Secretary->exists()) {
			throw new NotFoundException(__('Invalid secretary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Secretary->delete()) {
			$this->Flash->success(__('The secretary has been deleted.'));
		} else {
			$this->Flash->error(__('The secretary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
