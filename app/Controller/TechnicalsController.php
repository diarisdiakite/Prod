<?php
App::uses('AppController', 'Controller');
/**
 * Technicals Controller
 *
 * @property Technical $Technical
 * @property PaginatorComponent $Paginator
 */
class TechnicalsController extends AppController {

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

 public function getTechnicalById($id){
			 $data=$this->Technical->findById($id);
			 return $data;
 }

	public function index() {
		$this->Technical->recursive = 0;
		$this->set('technicals', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Technical->recursive = 0;
		$this->set('technicals', $this->Paginator->paginate());
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
		if (!$this->Technical->exists($id)) {
			throw new NotFoundException(__('Invalid technical'));
		}
		$options = array('conditions' => array('Technical.' . $this->Technical->primaryKey => $id));
		$this->set('technical', $this->Technical->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Technical->exists($id)) {
			throw new NotFoundException(__('Invalid technical'));
		}
		$options = array('conditions' => array('Technical.' . $this->Technical->primaryKey => $id));
		$this->set('technical', $this->Technical->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Technical->create();
		 if(AuthComponent::user('group')==3){
			 $this->request->data['Technical']['active'] = 1;
		 }
		 //$this->request->data['Technical']['project_action_id'] = $id;
		 //$this->request->data['Technical']['structure_id'] = $id;
		 $this->request->data['Technical']['user_id'] = AuthComponent::user('id');

		 if ($this->Technical->save($this->request->data)) {
			 $this->Flash->success(__('The technical has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The technical could not be saved. Please, try again.'));
		 }
	 }
	 $structures = $this->Technical->Structure->find('list');
	 $projectActions = $this->Technical->ProjectAction->find('list');
	 $this->set(compact('structures', 'projectActions'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->Technical->create();
			if(AuthComponent::user('group')==3){
				$this->request->data['Technical']['active'] = 1;
			}
			$this->request->data['Technical']['project_action_id'] = $id;
 		 	$this->request->data['Technical']['structure_id'] = $id;
		 	$this->request->data['Technical']['user_id'] = AuthComponent::user('id');

			if ($this->Technical->save($this->request->data)) {
				$this->Flash->success(__('The technical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The technical could not be saved. Please, try again.'));
			}
		}
		$structures = $this->Technical->Structure->find('list');
		$projectActions = $this->Technical->ProjectAction->find('list');
		$this->set(compact('structures', 'projectActions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Technical->exists($id)) {
			throw new NotFoundException(__('Invalid technical'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Technical->save($this->request->data)) {
				$this->Flash->success(__('The technical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The technical could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Technical.' . $this->Technical->primaryKey => $id));
			$this->request->data = $this->Technical->find('first', $options);
		}
		$structures = $this->Technical->Structure->find('list');
		$projectActions = $this->Technical->ProjectAction->find('list');
		$this->set(compact('structures', 'projectActions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Technical->id = $id;
		if (!$this->Technical->exists()) {
			throw new NotFoundException(__('Invalid technical'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Technical->delete()) {
			$this->Flash->success(__('The technical has been deleted.'));
		} else {
			$this->Flash->error(__('The technical could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
