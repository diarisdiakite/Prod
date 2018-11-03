<?php
App::uses('AppController', 'Controller');
/**
 * Ministries Controller
 *
 * @property Ministry $Ministry
 * @property PaginatorComponent $Paginator
 */
class MinistriesController extends AppController {

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

 public function getMinistryById($id){
			$data=$this->Ministry->findById($id);
			return $data;
 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ministry->recursive = 0;
		$this->set('ministries', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Ministry->recursive = 0;
		$this->set('ministries', $this->Paginator->paginate());
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
		if (!$this->Ministry->exists($id)) {
			throw new NotFoundException(__('Invalid ministry'));
		}
		$options = array('conditions' => array('Ministry.' . $this->Ministry->primaryKey => $id));
		$this->set('ministry', $this->Ministry->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Ministry->exists($id)) {
			throw new NotFoundException(__('Invalid ministry'));
		}
		$options = array('conditions' => array('Ministry.' . $this->Ministry->primaryKey => $id));
		$this->set('ministry', $this->Ministry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ministry->create();
			if ($this->Ministry->save($this->request->data)) {
				$this->Flash->success(__('The ministry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ministry could not be saved. Please, try again.'));
			}
		}
		$names = $this->Ministry->Name->find('list');
		$teams = $this->Ministry->Team->find('list');
		$experts = $this->Ministry->Expert->find('list');
		$this->set(compact('names', 'teams', 'experts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ministry->exists($id)) {
			throw new NotFoundException(__('Invalid ministry'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ministry->save($this->request->data)) {
				$this->Flash->success(__('The ministry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ministry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ministry.' . $this->Ministry->primaryKey => $id));
			$this->request->data = $this->Ministry->find('first', $options);
		}
		$names = $this->Ministry->Name->find('list');
		$teams = $this->Ministry->Team->find('list');
		$experts = $this->Ministry->Expert->find('list');
		$this->set(compact('names', 'teams', 'experts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ministry->id = $id;
		if (!$this->Ministry->exists()) {
			throw new NotFoundException(__('Invalid ministry'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ministry->delete()) {
			$this->Flash->success(__('The ministry has been deleted.'));
		} else {
			$this->Flash->error(__('The ministry could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
