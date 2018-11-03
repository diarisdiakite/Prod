<?php
App::uses('AppController', 'Controller');
/**
 * ActivationsPosts Controller
 *
 * @property ActivationsPost $ActivationsPost
 * @property PaginatorComponent $Paginator
 */
class ActivationsPostsController extends AppController {

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
	$this->Auth->allow();//('index', 'view');
 }

 public function getActivationPostById($id){
		 $data=$this->ActivationPost->findById($id);
		 return $data;
 }

	public function index() {
		$this->ActivationsPost->recursive = 0;
		$this->set('activationsPosts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivationsPost->exists($id)) {
			throw new NotFoundException(__('Invalid activations post'));
		}
		$options = array('conditions' => array('ActivationsPost.' . $this->ActivationsPost->primaryKey => $id));
		$this->set('activationsPost', $this->ActivationsPost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivationsPost->create();
			if ($this->ActivationsPost->save($this->request->data)) {
				$this->Flash->success(__('The activations post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations post could not be saved. Please, try again.'));
			}
		}
		$users = $this->ActivationsPost->User->find('list');
		$activations = $this->ActivationsPost->Activation->find('list');
		$posts = $this->ActivationsPost->Post->find('list');
		$this->set(compact('users', 'activations', 'posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivationsPost->exists($id)) {
			throw new NotFoundException(__('Invalid activations post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivationsPost->save($this->request->data)) {
				$this->Flash->success(__('The activations post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activations post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivationsPost.' . $this->ActivationsPost->primaryKey => $id));
			$this->request->data = $this->ActivationsPost->find('first', $options);
		}
		$users = $this->ActivationsPost->User->find('list');
		$activations = $this->ActivationsPost->Activation->find('list');
		$posts = $this->ActivationsPost->Post->find('list');
		$this->set(compact('users', 'activations', 'posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivationsPost->id = $id;
		if (!$this->ActivationsPost->exists()) {
			throw new NotFoundException(__('Invalid activations post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActivationsPost->delete()) {
			$this->Flash->success(__('The activations post has been deleted.'));
		} else {
			$this->Flash->error(__('The activations post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
