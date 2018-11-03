<?php
App::uses('AppController', 'Controller');
/**
 * Structures Controller
 *
 * @property Structure $Structure
 * @property PaginatorComponent $Paginator
 */
class StructuresController extends AppController {

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

 public function getStructureById($id){
		 $data=$this->Structure->findById($id);
		 return $data;
 }

	public function index() {
		$this->Structure->recursive = 0;
		$this->set('structures', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Structure->recursive = 0;
		$this->set('structures', $this->Paginator->paginate());
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
		if (!$this->Structure->exists($id)) {
			throw new NotFoundException(__('Invalid structure'));
		}
		$options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
		$this->set('structure', $this->Structure->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Structure->exists($id)) {
			throw new NotFoundException(__('Invalid structure'));
		}
		$options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
		$this->set('structure', $this->Structure->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Structure->create();
			if ($this->Structure->save($this->request->data)) {
				$this->Flash->success(__('The structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The structure could not be saved. Please, try again.'));
			}
		}
		$focalPoints = $this->Structure->FocalPoint->find('list');
		$ministries = $this->Structure->Ministry->find('list');
		$this->set(compact('focalPoints', 'ministries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Structure->exists($id)) {
			throw new NotFoundException(__('Invalid structure'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Structure->save($this->request->data)) {
				$this->Flash->success(__('The structure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The structure could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
			$this->request->data = $this->Structure->find('first', $options);
		}
		$focalPoints = $this->Structure->FocalPoint->find('list');
		$ministries = $this->Structure->Ministry->find('list');
		$this->set(compact('focalPoints', 'ministries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Structure->id = $id;
		if (!$this->Structure->exists()) {
			throw new NotFoundException(__('Invalid structure'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Structure->delete()) {
			$this->Flash->success(__('The structure has been deleted.'));
		} else {
			$this->Flash->error(__('The structure could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
