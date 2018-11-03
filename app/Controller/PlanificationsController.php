<?php
App::uses('AppController', 'Controller');
/**
 * Planifications Controller
 *
 * @property Planification $Planification
 * @property PaginatorComponent $Paginator
 */
class PlanificationsController extends AppController {

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

 public function getPlanificationById($id){
			 $data=$this->Planification->findById($id);
			 return $data;
 }

	public function index() {
		$this->Planification->recursive = 0;
		$this->set('planifications', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Planification->recursive = 0;
		$this->set('planifications', $this->Paginator->paginate());
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
		if (!$this->Planification->exists($id)) {
			throw new NotFoundException(__('Invalid planification'));
		}
		$options = array('conditions' => array('Planification.' . $this->Planification->primaryKey => $id));
		$this->set('planification', $this->Planification->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Planification->exists($id)) {
			throw new NotFoundException(__('Invalid planification'));
		}
		$options = array('conditions' => array('Planification.' . $this->Planification->primaryKey => $id));
		$this->set('planification', $this->Planification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Planification->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Planification']['approved'] = 1;
		 }
		 //$this->request->data['Planification']['ministry_id'] = $id;
		 $this->request->data['Planification']['user_id'] = AuthComponent::user('id');


		 if ($this->Planification->save($this->request->data)) {
			 $this->Flash->success(__('The planification has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The planification could not be saved. Please, try again.'));
		 }
	 }
	 $ministries = $this->Planification->Ministry->find('list');
	 $this->set(compact('ministries'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->Planification->create();
			if(AuthComponent::user('group')==3){
				$this->request->data['Planification']['approved'] = 1;
			}
			$this->request->data['Planification']['ministry_id'] = $id;
			$this->request->data['Planification']['user_id'] = AuthComponent::user('id');


			if ($this->Planification->save($this->request->data)) {
				$this->Flash->success(__('The planification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The planification could not be saved. Please, try again.'));
			}
		}
		$ministries = $this->Planification->Ministry->find('list');
		$this->set(compact('ministries'));
	}


/*
	public function add_by_link($id) {
		if ($this->request->is('post')) {
			$this->Planification->create();

			$this->request->data['Planification']['ministry_id'] = $id;

			if ($this->Planification->save($this->request->data)) {
				$this->Flash->success(__('The planification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The planification could not be saved. Please, try again.'));
			}
		}
		$ministries = $this->Planification->Ministry->find('list');
		$this->set(compact('ministries'));
	}
*/
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Planification->exists($id)) {
			throw new NotFoundException(__('Invalid planification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Planification->save($this->request->data)) {
				$this->Flash->success(__('The planification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The planification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Planification.' . $this->Planification->primaryKey => $id));
			$this->request->data = $this->Planification->find('first', $options);
		}
		$ministries = $this->Planification->Ministry->find('list');
		$this->set(compact('ministries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Planification->id = $id;
		if (!$this->Planification->exists()) {
			throw new NotFoundException(__('Invalid planification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Planification->delete()) {
			$this->Flash->success(__('The planification has been deleted.'));
		} else {
			$this->Flash->error(__('The planification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
