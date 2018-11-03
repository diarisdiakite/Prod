<?php
App::uses('AppController', 'Controller');
/**
 * Descriptions Controller
 *
 * @property Description $Description
 * @property PaginatorComponent $Paginator
 */
class DescriptionsController extends AppController {

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

 public function getDescriptionById($id){
		 $data=$this->Description->findById($id);
		 return $data;
 }

	public function index() {
		$this->Description->recursive = 0;
		$this->set('descriptions', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Description->recursive = 0;
		$this->set('descriptions', $this->Paginator->paginate());
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
		if (!$this->Description->exists($id)) {
			throw new NotFoundException(__('Invalid description'));
		}
		$options = array('conditions' => array('Description.' . $this->Description->primaryKey => $id));
		$this->set('description', $this->Description->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Description->exists($id)) {
			throw new NotFoundException(__('Invalid description'));
		}
		$options = array('conditions' => array('Description.' . $this->Description->primaryKey => $id));
		$this->set('description', $this->Description->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Description->create();

			$this->request->data['Description']['user_id'] = AuthComponent::user('id');

			if ($this->Description->save($this->request->data)) {
				$this->Flash->success(__('The description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The description could not be saved. Please, try again.'));
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
		if (!$this->Description->exists($id)) {
			throw new NotFoundException(__('Invalid description'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Description->save($this->request->data)) {
				$this->Flash->success(__('The description has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The description could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Description.' . $this->Description->primaryKey => $id));
			$this->request->data = $this->Description->find('first', $options);
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
		$this->Description->id = $id;
		if (!$this->Description->exists()) {
			throw new NotFoundException(__('Invalid description'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Description->delete()) {
			$this->Flash->success(__('The description has been deleted.'));
		} else {
			$this->Flash->error(__('The description could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
