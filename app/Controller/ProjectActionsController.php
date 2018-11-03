<?php
App::uses('AppController', 'Controller');
/**
 * ProjectActions Controller
 *
 * @property ProjectAction $ProjectAction
 * @property PaginatorComponent $Paginator
 */
class ProjectActionsController extends AppController {

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
		$this->Auth->allow('liste', 'view');
 }

 public function getProjectActionById($id){
			 $data=$this->ProjectAction->findById($id);
			 return $data;
 }

	public function index() {
		$this->ProjectAction->recursive = 0;
		$this->set('projectActions', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->ProjectAction->recursive = 0;
		$this->set('projectActions', $this->Paginator->paginate());
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
		if (!$this->ProjectAction->exists($id)) {
			throw new NotFoundException(__('Invalid project action'));
		}
		$options = array('conditions' => array('ProjectAction.' . $this->ProjectAction->primaryKey => $id));
		$this->set('projectAction', $this->ProjectAction->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->ProjectAction->exists($id)) {
			throw new NotFoundException(__('Invalid project action'));
		}
		$options = array('conditions' => array('ProjectAction.' . $this->ProjectAction->primaryKey => $id));
		$this->set('projectAction', $this->ProjectAction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
	 	if ($this->request->is('post')) {
	 		$this->ProjectAction->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['ProjectAction']['approved'] = 1;
			}
	 		//$this->request->data['ProjectAction']['type_id'] = $id;
	 		//$this->request->data['ProjectAction']['expected_result_id'] = $id;
			$this->request->data['ProjectAction']['user_id'] = AuthComponent::user('id');

	 		if ($this->ProjectAction->save($this->request->data)) {
	 			$this->Flash->success(__('The project action has been saved.'));
	 			return $this->redirect(array('action' => 'index'));
	 		} else {
	 			$this->Flash->error(__('The project action could not be saved. Please, try again.'));
	 		}
	 	}
	 	$types = $this->ProjectAction->Type->find('list');
	 	$expectedResults = $this->ProjectAction->ExpectedResult->find('list');
	 	$this->set(compact('types', 'expectedResults'));
	 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->ProjectAction->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['ProjectAction']['approved'] = 1;
			}
			//$this->request->data['ProjectAction']['type_id'] = $id;
			$this->request->data['ProjectAction']['expected_result_id'] = $id;
			$this->request->data['ProjectAction']['user_id'] = AuthComponent::user('id');


			if ($this->ProjectAction->save($this->request->data)) {
				$this->Flash->success(__('The project action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The project action could not be saved. Please, try again.'));
			}
		}
		$types = $this->ProjectAction->Type->find('list');
		$expectedResults = $this->ProjectAction->ExpectedResult->find('list');
		$this->set(compact('types', 'expectedResults'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjectAction->exists($id)) {
			throw new NotFoundException(__('Invalid project action'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectAction->save($this->request->data)) {
				$this->Flash->success(__('The project action has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The project action could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjectAction.' . $this->ProjectAction->primaryKey => $id));
			$this->request->data = $this->ProjectAction->find('first', $options);
		}
		$types = $this->ProjectAction->Type->find('list');
		$expectedResults = $this->ProjectAction->ExpectedResult->find('list');
		$this->set(compact('types', 'expectedResults'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjectAction->id = $id;
		if (!$this->ProjectAction->exists()) {
			throw new NotFoundException(__('Invalid project action'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProjectAction->delete()) {
			$this->Flash->success(__('The project action has been deleted.'));
		} else {
			$this->Flash->error(__('The project action could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
