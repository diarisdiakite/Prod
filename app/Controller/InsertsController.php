<?php
App::uses('AppController', 'Controller');
/**
 * Inserts Controller
 *
 * @property Insert $Insert
 * @property PaginatorComponent $Paginator
 */
class InsertsController extends AppController {

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

 public function getInsertById($id){
			$data=$this->Insert->findById($id);
			return $data;
 }

	public function index() {
		$this->Insert->recursive = 0;
		$this->set('inserts', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Insert->recursive = 0;
		$this->set('inserts', $this->Paginator->paginate());
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
		if (!$this->Insert->exists($id)) {
			throw new NotFoundException(__('Invalid insert'));
		}
		$options = array('conditions' => array('Insert.' . $this->Insert->primaryKey => $id));
		$this->set('insert', $this->Insert->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Insert->exists($id)) {
			throw new NotFoundException(__('Invalid insert'));
		}
		$options = array('conditions' => array('Insert.' . $this->Insert->primaryKey => $id));
		$this->set('insert', $this->Insert->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Insert->create();
			if ($this->Insert->save($this->request->data)) {
				$this->Flash->success(__('The insert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The insert could not be saved. Please, try again.'));
			}
		}
		$users = $this->Insert->User->find('list');
		$structures = $this->Insert->Structure->find('list');
		$planifications = $this->Insert->Planification->find('list');
		$ministries = $this->Insert->Ministry->find('list');
		$composants = $this->Insert->Composant->find('list');
		$expectedResults = $this->Insert->ExpectedResult->find('list');
		$projectActions = $this->Insert->ProjectAction->find('list');
		$types = $this->Insert->Type->find('list');
		$this->set(compact('users', 'structures', 'planifications', 'ministries', 'composants', 'expectedResults', 'projectActions', 'types'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Insert->exists($id)) {
			throw new NotFoundException(__('Invalid insert'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insert->save($this->request->data)) {
				$this->Flash->success(__('The insert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The insert could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Insert.' . $this->Insert->primaryKey => $id));
			$this->request->data = $this->Insert->find('first', $options);
		}
		$users = $this->Insert->User->find('list');
		$structures = $this->Insert->Structure->find('list');
		$planifications = $this->Insert->Planification->find('list');
		$ministries = $this->Insert->Ministry->find('list');
		$composants = $this->Insert->Composant->find('list');
		$expectedResults = $this->Insert->ExpectedResult->find('list');
		$projectActions = $this->Insert->ProjectAction->find('list');
		$types = $this->Insert->Type->find('list');
		$this->set(compact('users', 'structures', 'planifications', 'ministries', 'composants', 'expectedResults', 'projectActions', 'types'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Insert->id = $id;
		if (!$this->Insert->exists()) {
			throw new NotFoundException(__('Invalid insert'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Insert->delete()) {
			$this->Flash->success(__('The insert has been deleted.'));
		} else {
			$this->Flash->error(__('The insert could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
