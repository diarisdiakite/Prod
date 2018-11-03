<?php
App::uses('AppController', 'Controller');
/**
 * Types Controller
 *
 * @property Type $Type
 * @property PaginatorComponent $Paginator
 */
class TypesController extends AppController {

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

 public function getTypeById($id){
			 $data=$this->Type->findById($id);
			 return $data;
 }

	public function index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Type->recursive = 0;
		$this->set('types', $this->Paginator->paginate());
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
		if (!$this->Type->exists($id)) {
			throw new NotFoundException(__('Invalid type'));
		}
		$options = array('conditions' => array('Type.' . $this->Type->primaryKey => $id));
		$this->set('type', $this->Type->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Type->exists($id)) {
			throw new NotFoundException(__('Invalid type'));
		}
		$options = array('conditions' => array('Type.' . $this->Type->primaryKey => $id));
		$this->set('type', $this->Type->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Type->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Type']['approved'] = 1;
		 }
		 $this->request->data['Type']['user_id'] = AuthComponent::user('id');

		 if ($this->Type->save($this->request->data)) {
			 $this->Flash->success(__('The type has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The type could not be saved. Please, try again.'));
		 }
	 }
 }

	public function add() {
		if ($this->request->is('post')) {
			$this->Type->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Type']['approved'] = 1;
			}
			$this->request->data['Type']['user_id'] = AuthComponent::user('id');

			if ($this->Type->save($this->request->data)) {
				$this->Flash->success(__('The type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Type->exists($id)) {
			throw new NotFoundException(__('Invalid type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Type->save($this->request->data)) {
				$this->Flash->success(__('The type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Type.' . $this->Type->primaryKey => $id));
			$this->request->data = $this->Type->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Type->delete()) {
			$this->Flash->success(__('The type has been deleted.'));
		} else {
			$this->Flash->error(__('The type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
