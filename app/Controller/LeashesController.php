<?php
App::uses('AppController', 'Controller');
/**
 * Leashes Controller
 *
 * @property Leash $Leash
 * @property PaginatorComponent $Paginator
 */
class LeashesController extends AppController {

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

 public function getLeashById($id){
			 $data=$this->Leash->findById($id);
			 return $data;
 }

	public function index() {
		$this->Leash->recursive = 0;
		$this->set('leashes', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Leash->recursive = 0;
		$this->set('leashes', $this->Paginator->paginate());
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
		if (!$this->Leash->exists($id)) {
			throw new NotFoundException(__('Invalid leash'));
		}
		$options = array('conditions' => array('Leash.' . $this->Leash->primaryKey => $id));
		$this->set('leash', $this->Leash->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Leash->exists($id)) {
			throw new NotFoundException(__('Invalid leash'));
		}
		$options = array('conditions' => array('Leash.' . $this->Leash->primaryKey => $id));
		$this->set('leash', $this->Leash->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Leash->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Leash']['approved'] = 1;
		 }
		 //$this->request->data['Leash']['sector_id'] = $id;
		 $this->request->data['Leash']['user_id'] = AuthComponent::user('id');


		 if ($this->Leash->save($this->request->data)) {
			 $this->Flash->success(__('The leash has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The leash could not be saved. Please, try again.'));
		 }
	 }
	 $sectors = $this->Leash->Sector->find('list');
	 $this->set(compact('sectors'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->Leash->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Leash']['approved'] = 1;
			}
			$this->request->data['Leash']['sector_id'] = $id;
			$this->request->data['Leash']['user_id'] = AuthComponent::user('id');


			if ($this->Leash->save($this->request->data)) {
				$this->Flash->success(__('The leash has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The leash could not be saved. Please, try again.'));
			}
		}
		$sectors = $this->Leash->Sector->find('list');
		$this->set(compact('sectors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Leash->exists($id)) {
			throw new NotFoundException(__('Invalid leash'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leash->save($this->request->data)) {
				$this->Flash->success(__('The leash has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The leash could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leash.' . $this->Leash->primaryKey => $id));
			$this->request->data = $this->Leash->find('first', $options);
		}
		$sectors = $this->Leash->Sector->find('list');
		$this->set(compact('sectors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Leash->id = $id;
		if (!$this->Leash->exists()) {
			throw new NotFoundException(__('Invalid leash'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Leash->delete()) {
			$this->Flash->success(__('The leash has been deleted.'));
		} else {
			$this->Flash->error(__('The leash could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
