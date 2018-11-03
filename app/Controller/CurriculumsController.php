<?php
App::uses('AppController', 'Controller');
/**
 * Curriculums Controller
 *
 * @property Curriculum $Curriculum
 * @property PaginatorComponent $Paginator
 */
class CurriculumsController extends AppController {

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

 public function getCurriculumById($id){
			 $data=$this->Curriculum->findById($id);
			 return $data;
 }

	public function index() {
		$this->Curriculum->recursive = 0;
		$this->set('curriculums', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Curriculum->recursive = 0;
		$this->set('curriculums', $this->Paginator->paginate());
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
		if (!$this->Curriculum->exists($id)) {
			throw new NotFoundException(__('Invalid curriculum'));
		}
		$options = array('conditions' => array('Curriculum.' . $this->Curriculum->primaryKey => $id));
		$this->set('curriculum', $this->Curriculum->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Curriculum->exists($id)) {
			throw new NotFoundException(__('Invalid curriculum'));
		}
		$options = array('conditions' => array('Curriculum.' . $this->Curriculum->primaryKey => $id));
		$this->set('curriculum', $this->Curriculum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Curriculum->create();

			$this->request->data['Curriculum']['user_id'] = AuthComponent::user('id');

			if ($this->Curriculum->save($this->request->data)) {
				$this->Flash->success(__('The curriculum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curriculum could not be saved. Please, try again.'));
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
		if (!$this->Curriculum->exists($id)) {
			throw new NotFoundException(__('Invalid curriculum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Curriculum->save($this->request->data)) {
				$this->Flash->success(__('The curriculum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curriculum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Curriculum.' . $this->Curriculum->primaryKey => $id));
			$this->request->data = $this->Curriculum->find('first', $options);
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
		$this->Curriculum->id = $id;
		if (!$this->Curriculum->exists()) {
			throw new NotFoundException(__('Invalid curriculum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Curriculum->delete()) {
			$this->Flash->success(__('The curriculum has been deleted.'));
		} else {
			$this->Flash->error(__('The curriculum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
