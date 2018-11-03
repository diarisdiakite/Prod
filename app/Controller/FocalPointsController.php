<?php
App::uses('AppController', 'Controller');
/**
 * FocalPoints Controller
 *
 * @property FocalPoint $FocalPoint
 * @property PaginatorComponent $Paginator
 */
class FocalPointsController extends AppController {

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

 public function getFocalPointById($id){
			 $data=$this->FocalPoint->findById($id);
			 return $data;
 }

	public function index() {
		$this->FocalPoint->recursive = 0;
		$this->set('focalPoints', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->FocalPoint->recursive = 0;
		$this->set('focalPoints', $this->Paginator->paginate());
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
		if (!$this->FocalPoint->exists($id)) {
			throw new NotFoundException(__('Invalid focal point'));
		}
		$options = array('conditions' => array('FocalPoint.' . $this->FocalPoint->primaryKey => $id));
		$this->set('focalPoint', $this->FocalPoint->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->FocalPoint->exists($id)) {
			throw new NotFoundException(__('Invalid focal point'));
		}
		$options = array('conditions' => array('FocalPoint.' . $this->FocalPoint->primaryKey => $id));
		$this->set('focalPoint', $this->FocalPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->FocalPoint->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['FocalPoint']['active'] = 1;
		 }
		 //$this->request->data['FocalPoint']['expert_id'] = $id;
		 //$this->request->data['FocalPoint']['ministry_id'] = $id;
		 $this->request->data['FocalPoint']['user_id'] = AuthComponent::user('id');

		 if ($this->FocalPoint->save($this->request->data)) {
			 $this->Flash->success(__('The focal point has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The focal point could not be saved. Please, try again.'));
		 }
	 }
	 $users = $this->FocalPoint->User->find('list');
	 $experts = $this->FocalPoint->Expert->find('list');
	 $ministries = $this->FocalPoint->Ministry->find('list');
	 $financesResponsibles = $this->FocalPoint->FinancesResponsible->find('list');
	 $this->set(compact('users', 'experts', 'ministries', 'financesResponsibles'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->FocalPoint->create();
			if(AuthComponent::user('group')==3){
				$this->request->data['FocalPoint']['active'] = 1;
			}
			$this->request->data['FocalPoint']['expert_id'] = $id;
			$this->request->data['FocalPoint']['ministry_id'] = $id;
			$this->request->data['FocalPoint']['user_id'] = AuthComponent::user('id');

			if ($this->FocalPoint->save($this->request->data)) {
				$this->Flash->success(__('The focal point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The focal point could not be saved. Please, try again.'));
			}
		}
		$users = $this->FocalPoint->User->find('list');
		$experts = $this->FocalPoint->Expert->find('list');
		$ministries = $this->FocalPoint->Ministry->find('list');
		$financesResponsibles = $this->FocalPoint->FinancesResponsible->find('list');
		$this->set(compact('users', 'experts', 'ministries', 'financesResponsibles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FocalPoint->exists($id)) {
			throw new NotFoundException(__('Invalid focal point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FocalPoint->save($this->request->data)) {
				$this->Flash->success(__('The focal point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The focal point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FocalPoint.' . $this->FocalPoint->primaryKey => $id));
			$this->request->data = $this->FocalPoint->find('first', $options);
		}
		$users = $this->FocalPoint->User->find('list');
		$experts = $this->FocalPoint->Expert->find('list');
		$ministries = $this->FocalPoint->Ministry->find('list');
		$financesResponsibles = $this->FocalPoint->FinancesResponsible->find('list');
		$this->set(compact('users', 'experts', 'ministries', 'financesResponsibles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FocalPoint->id = $id;
		if (!$this->FocalPoint->exists()) {
			throw new NotFoundException(__('Invalid focal point'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FocalPoint->delete()) {
			$this->Flash->success(__('The focal point has been deleted.'));
		} else {
			$this->Flash->error(__('The focal point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
