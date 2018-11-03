<?php
App::uses('AppController', 'Controller');
/**
 * Sectors Controller
 *
 * @property Sector $Sector
 * @property PaginatorComponent $Paginator
 */
class SectorsController extends AppController {

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

 public function getSectorById($id){
			 $data=$this->Sector->findById($id);
			 return $data;
 }

	public function index() {
		$this->Sector->recursive = 0;
		$this->set('sectors', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Sector->recursive = 0;
		$this->set('sectors', $this->Paginator->paginate());
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
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Invalid sector'));
		}
		$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
		$this->set('sector', $this->Sector->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Invalid sector'));
		}
		$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
		$this->set('sector', $this->Sector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Sector->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Sector']['approved'] = 1;
		 }
		 $this->request->data['Sector']['user_id'] = AuthComponent::user('id');


		 if ($this->Sector->save($this->request->data)) {
			 $this->Flash->success(__('The sector has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The sector could not be saved. Please, try again.'));
		 }
	 }
 }

	public function add() {
		if ($this->request->is('post')) {
			$this->Sector->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Sector']['approved'] = 1;
			}
			$this->request->data['Sector']['user_id'] = AuthComponent::user('id');


			if ($this->Sector->save($this->request->data)) {
				$this->Flash->success(__('The sector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sector could not be saved. Please, try again.'));
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
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Invalid sector'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sector->save($this->request->data)) {
				$this->Flash->success(__('The sector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sector could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
			$this->request->data = $this->Sector->find('first', $options);
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
		$this->Sector->id = $id;
		if (!$this->Sector->exists()) {
			throw new NotFoundException(__('Invalid sector'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sector->delete()) {
			$this->Flash->success(__('The sector has been deleted.'));
		} else {
			$this->Flash->error(__('The sector could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
