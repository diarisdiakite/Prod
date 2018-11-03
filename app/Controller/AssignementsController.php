<?php
App::uses('AppController', 'Controller');
/**
 * Assignements Controller
 *
 * @property Assignement $Assignement
 * @property PaginatorComponent $Paginator
 */
class AssignementsController extends AppController {

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

 public function getAssignementById($id){
		 $data=$this->Assignement->findById($id);
		 return $data;
 }

	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Assignement->recursive = 0;
		$this->set('assignements', $this->Paginator->paginate());
	}


	public function liste() {
		$this->layout='wsite';
		$this->Assignement->recursive = 0;
		$this->set('assignements', $this->Paginator->paginate());
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
		if (!$this->Assignement->exists($id)) {
			throw new NotFoundException(__('Invalid assignement'));
		}
		$options = array('conditions' => array('Assignement.' . $this->Assignement->primaryKey => $id));
		$this->set('assignement', $this->Assignement->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Assignement->exists($id)) {
			throw new NotFoundException(__('Invalid assignement'));
		}
		$options = array('conditions' => array('Assignement.' . $this->Assignement->primaryKey => $id));
		$this->set('assignement', $this->Assignement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assignement->create();
			if ($this->Assignement->save($this->request->data)) {
				$this->Flash->success(__('The assignement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assignement could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Assignement->Group->find('list');
        $users = $this->Assignement->User->find('list');
		$this->set(compact('users', 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assignement->exists($id)) {
			throw new NotFoundException(__('Invalid assignement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assignement->save($this->request->data)) {
				$this->Flash->success(__('The assignement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assignement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assignement.' . $this->Assignement->primaryKey => $id));
			$this->request->data = $this->Assignement->find('first', $options);
		}
		$groups = $this->Assignement->Group->find('list');
        $users = $this->Assignement->User->find('list');
		$this->set(compact('users', 'groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Assignement->id = $id;
		if (!$this->Assignement->exists()) {
			throw new NotFoundException(__('Invalid assignement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Assignement->delete()) {
			$this->Flash->success(__('The assignement has been deleted.'));
		} else {
			$this->Flash->error(__('The assignement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
