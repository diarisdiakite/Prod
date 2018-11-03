<?php
App::uses('AppController', 'Controller');
/**
 * Attributes Controller
 *
 * @property Attribute $Attribute
 * @property PaginatorComponent $Paginator
 */
class AttributesController extends AppController {

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

	public function getAttributeById($id){
				$data=$this->Attribute->findById($id);
				return $data;
	}


	public function index() {
		$this->Attribute->recursive = 0;
		$this->set('attributes', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Attribute->recursive = 0;
		$this->set('attributes', $this->Paginator->paginate());
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
		if (!$this->Attribute->exists($id)) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		$options = array('conditions' => array('Attribute.' . $this->Attribute->primaryKey => $id));
		$this->set('attribute', $this->Attribute->find('first', $options));
	}


	public function admin_view($id = null) {
		if (!$this->Attribute->exists($id)) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		$options = array('conditions' => array('Attribute.' . $this->Attribute->primaryKey => $id));
		$this->set('attribute', $this->Attribute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
	 if ($this->request->is('post')) {
		 if (AuthComponent::user(id)!=1) {
			 $this->redirect('index');
		 }
		 $this->Attribute->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Attribute']['approved'] = 1;
		 }
		 //$this->request->data['Attribute']['structure_id'] = $id;
		 $this->request->data['Attribute']['user_id'] = AuthComponent::user('id');

		 if ($this->Attribute->save($this->request->data)) {
			 $this->Flash->success(__('The attribute has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The attribute could not be saved. Please, try again.'));
		 }
	 }
	 $structures = $this->Attribute->Structure->find('list');
	 $this->set(compact('structures'));
 }



	public function add($id) {
		if ($this->request->is('post')) {
			if (AuthComponent::user(id)!=1) {
				$this->redirect('index');
			}
			$this->Attribute->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Attribute']['approved'] = 1;
			}
			$this->request->data['Attribute']['structure_id'] = $id;
			$this->request->data['Attribute']['user_id'] = AuthComponent::user('id');

			if ($this->Attribute->save($this->request->data)) {
				$this->Flash->success(__('The attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The attribute could not be saved. Please, try again.'));
			}
		}
		$structures = $this->Attribute->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		if (!$this->Attribute->exists($id)) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Attribute->save($this->request->data)) {
				$this->Flash->success(__('The attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The attribute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attribute.' . $this->Attribute->primaryKey => $id));
			$this->request->data = $this->Attribute->find('first', $options);
		}
		$structures = $this->Attribute->Structure->find('list');
		$this->set(compact('structures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Attribute->id = $id;
		if (!$this->Attribute->exists()) {
			throw new NotFoundException(__('Invalid attribute'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Attribute->delete()) {
			$this->Flash->success(__('The attribute has been deleted.'));
		} else {
			$this->Flash->error(__('The attribute could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
