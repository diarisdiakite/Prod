<?php
App::uses('AppController', 'Controller');
/**
 * JobEmployments Controller
 *
 * @property JobEmployment $JobEmployment
 * @property PaginatorComponent $Paginator
 */
class JobEmploymentsController extends AppController {

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

 public function getJobEmploymentById($id){
			 $data=$this->JobEmployment->findById($id);
			 return $data;
 }

	public function index() {
		$this->JobEmployment->recursive = 0;
		$this->set('jobEmployments', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->JobEmployment->recursive = 0;
		$this->set('jobEmployments', $this->Paginator->paginate());
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
		if (!$this->JobEmployment->exists($id)) {
			throw new NotFoundException(__('Invalid job employment'));
		}
		$options = array('conditions' => array('JobEmployment.' . $this->JobEmployment->primaryKey => $id));
		$this->set('jobEmployment', $this->JobEmployment->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->JobEmployment->exists($id)) {
			throw new NotFoundException(__('Invalid job employment'));
		}
		$options = array('conditions' => array('JobEmployment.' . $this->JobEmployment->primaryKey => $id));
		$this->set('jobEmployment', $this->JobEmployment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->JobEmployment->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['JobEmployment']['active'] = 1;
		 }
		 //$this->request->data['JobEmployment']['leash_id'] = $id;
		 $this->request->data['JobEmployment']['user_id'] = AuthComponent::user('id');

		 if ($this->JobEmployment->save($this->request->data)) {
			 $this->Flash->success(__('The job employment has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The job employment could not be saved. Please, try again.'));
		 }
	 }
	 $leashes = $this->JobEmployment->Leash->find('list');
	 $this->set(compact('leashes'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->JobEmployment->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['JobEmployment']['active'] = 1;
			}
			$this->request->data['JobEmployment']['leash_id'] = $id;
			$this->request->data['JobEmployment']['user_id'] = AuthComponent::user('id');

			if ($this->JobEmployment->save($this->request->data)) {
				$this->Flash->success(__('The job employment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The job employment could not be saved. Please, try again.'));
			}
		}
		$leashes = $this->JobEmployment->Leash->find('list');
		$this->set(compact('leashes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobEmployment->exists($id)) {
			throw new NotFoundException(__('Invalid job employment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//adds
			$this->request->data['JobEmployment']['leash_id'] = $id;

			if ($this->JobEmployment->save($this->request->data)) {
				$this->Flash->success(__('The job employment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The job employment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobEmployment.' . $this->JobEmployment->primaryKey => $id));
			$this->request->data = $this->JobEmployment->find('first', $options);
		}
		$leashes = $this->JobEmployment->Leash->find('list');
		$this->set(compact('leashes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobEmployment->id = $id;
		if (!$this->JobEmployment->exists()) {
			throw new NotFoundException(__('Invalid job employment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobEmployment->delete()) {
			$this->Flash->success(__('The job employment has been deleted.'));
		} else {
			$this->Flash->error(__('The job employment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
