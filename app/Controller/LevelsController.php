<?php
App::uses('AppController', 'Controller');
/**
 * Levels Controller
 *
 * @property Level $Level
 * @property PaginatorComponent $Paginator
 */
class LevelsController extends AppController {

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

 public function getLevelById($id){
			 $data=$this->Level->findById($id);
			 return $data;
 }

	public function index() {
		$this->Level->recursive = 0;
		$this->set('levels', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Level->recursive = 0;
		$this->set('levels', $this->Paginator->paginate());
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
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid level'));
		}
		$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
		$this->set('level', $this->Level->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid level'));
		}
		$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
		$this->set('level', $this->Level->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Level->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Level']['active'] = 1;
		 }
		 $this->request->data['Level']['user_id'] = AuthComponent::user('id');


		 if ($this->Level->save($this->request->data)) {
			 $this->Flash->success(__('The level has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The level could not be saved. Please, try again.'));
		 }
	 }
 }

	public function add() {
		if ($this->request->is('post')) {
			$this->Level->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Level']['active'] = 1;
			}
			$this->request->data['Level']['user_id'] = AuthComponent::user('id');


			if ($this->Level->save($this->request->data)) {
				$this->Flash->success(__('The level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The level could not be saved. Please, try again.'));
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
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid level'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Level->save($this->request->data)) {
				$this->Flash->success(__('The level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
			$this->request->data = $this->Level->find('first', $options);
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
		$this->Level->id = $id;
		if (!$this->Level->exists()) {
			throw new NotFoundException(__('Invalid level'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Level->delete()) {
			$this->Flash->success(__('The level has been deleted.'));
		} else {
			$this->Flash->error(__('The level could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
