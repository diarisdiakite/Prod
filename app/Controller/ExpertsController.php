<?php
App::uses('AppController', 'Controller');
/**
 * Experts Controller
 *
 * @property Expert $Expert
 * @property PaginatorComponent $Paginator
 */
class ExpertsController extends AppController {

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

 public function getExpertById($id){
			 $data=$this->Expert->findById($id);
			 return $data;
 }

	public function index() {
		$this->Expert->recursive = 0;
		$this->set('experts', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Expert->recursive = 0;
		$this->set('experts', $this->Paginator->paginate());
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
		if (!$this->Expert->exists($id)) {
			throw new NotFoundException(__('Invalid expert'));
		}
		$options = array('conditions' => array('Expert.' . $this->Expert->primaryKey => $id));
		$this->set('expert', $this->Expert->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Expert->exists($id)) {
			throw new NotFoundException(__('Invalid expert'));
		}
		$options = array('conditions' => array('Expert.' . $this->Expert->primaryKey => $id));
		$this->set('expert', $this->Expert->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Expert->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Expert']['active'] = 1;
		 }
		 //$this->request->data['Expert']['team_id'] = $id;
		 $this->request->data['Expert']['user_id'] = AuthComponent::user('id');

		 if ($this->Expert->save($this->request->data)) {
			 $this->Flash->success(__('The expert has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The expert could not be saved. Please, try again.'));
		 }
	 }
	 $teams = $this->Expert->Team->find('list');
	 $users = $this->Expert->User->find('list');
	 $this->set(compact('users', 'teams'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->Expert->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Expert']['active'] = 1;
			}
			$this->request->data['Expert']['team_id'] = $id;
			$this->request->data['Expert']['user_id'] = AuthComponent::user('id');

			if ($this->Expert->save($this->request->data)) {
				$this->Flash->success(__('The expert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expert could not be saved. Please, try again.'));
			}
		}
		$teams = $this->Expert->Team->find('list');
		$users = $this->Expert->User->find('list');
		$this->set(compact('users', 'teams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Expert->exists($id)) {
			throw new NotFoundException(__('Invalid expert'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Expert->save($this->request->data)) {
				$this->Flash->success(__('The expert has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The expert could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Expert.' . $this->Expert->primaryKey => $id));
			$this->request->data = $this->Expert->find('first', $options);
		}
		$teams = $this->Expert->Team->find('list');
		$users = $this->Expert->User->find('list');
		$this->set(compact('users', 'teams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Expert->id = $id;
		if (!$this->Expert->exists()) {
			throw new NotFoundException(__('Invalid expert'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Expert->delete()) {
			$this->Flash->success(__('The expert has been deleted.'));
		} else {
			$this->Flash->error(__('The expert could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    public function dashboard($id = null) {
        $this->layout='dashboard';
		if (!$this->Expert->exists($id)) {
			throw new NotFoundException(__('Invalid expert'));
		}
		$options = array('conditions' => array('Expert.' . $this->Expert->primaryKey => $id));
		$this->set('expert', $this->Expert->find('first', $options));
	}


}
