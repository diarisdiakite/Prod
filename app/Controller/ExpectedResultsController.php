<?php
App::uses('AppController', 'Controller');
/**
 * ExpectedResults Controller
 *
 * @property ExpectedResult $ExpectedResult
 * @property PaginatorComponent $Paginator
 */
class ExpectedResultsController extends AppController {

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

 public function getExpectedResultById($id){
			 $data=$this->ExpectedResult->findById($id);
			 return $data;
 }

	public function index() {
		$this->ExpectedResult->recursive = 0;
		$this->set('expectedResults', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->ExpectedResult->recursive = 0;
		$this->set('expectedResults', $this->Paginator->paginate());
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
		if (!$this->ExpectedResult->exists($id)) {
			throw new NotFoundException(__('Invalid expected result'));
		}
		$options = array('conditions' => array('ExpectedResult.' . $this->ExpectedResult->primaryKey => $id));
		$this->set('expectedResult', $this->ExpectedResult->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->ExpectedResult->exists($id)) {
			throw new NotFoundException(__('Invalid expected result'));
		}
		$options = array('conditions' => array('ExpectedResult.' . $this->ExpectedResult->primaryKey => $id));
		$this->set('expectedResult', $this->ExpectedResult->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->ExpectedResult->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['ExpectedResult']['approved'] = 1;
		 }
		 //$this->request->data['ExpectedResult']['composant_id'] = $id;
		 $this->request->data['ExpectedResult']['user_id'] = AuthComponent::user('id');

		 if ($this->ExpectedResult->save($this->request->data)) {
			 $this->Flash->success(__('The expected result has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The expected result could not be saved. Please, try again.'));
		 }
	 }
	 $composants = $this->ExpectedResult->Composant->find('list');
	 $this->set(compact('composants'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->ExpectedResult->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['ExpectedResult']['approved'] = 1;
			}
			$this->request->data['ExpectedResult']['composant_id'] = $id;
			$this->request->data['ExpectedResult']['user_id'] = AuthComponent::user('id');

			if ($this->ExpectedResult->save($this->request->data)) {
				$this->Flash->success(__('The expected result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expected result could not be saved. Please, try again.'));
			}
		}
		$composants = $this->ExpectedResult->Composant->find('list');
		$this->set(compact('composants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExpectedResult->exists($id)) {
			throw new NotFoundException(__('Invalid expected result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpectedResult->save($this->request->data)) {
				$this->Flash->success(__('The expected result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expected result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpectedResult.' . $this->ExpectedResult->primaryKey => $id));
			$this->request->data = $this->ExpectedResult->find('first', $options);
		}
		$composants = $this->ExpectedResult->Composant->find('list');
		$this->set(compact('composants'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ExpectedResult->id = $id;
		if (!$this->ExpectedResult->exists()) {
			throw new NotFoundException(__('Invalid expected result'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpectedResult->delete()) {
			$this->Flash->success(__('The expected result has been deleted.'));
		} else {
			$this->Flash->error(__('The expected result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
