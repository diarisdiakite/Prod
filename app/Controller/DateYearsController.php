<?php
App::uses('AppController', 'Controller');
/**
 * DateYears Controller
 *
 * @property DateYear $DateYear
 * @property PaginatorComponent $Paginator
 */
class DateYearsController extends AppController {

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

 public function getYearById($id){
 		 $data=$this->Year->findById($id);
 		 return $data;
 }

	public function index() {
		$this->DateYear->recursive = 0;
		$this->set('dateYears', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->DateYear->recursive = 0;
		$this->set('dateYears', $this->Paginator->paginate());
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
		if (!$this->DateYear->exists($id)) {
			throw new NotFoundException(__('Invalid date year'));
		}
		$options = array('conditions' => array('DateYear.' . $this->DateYear->primaryKey => $id));
		$this->set('dateYear', $this->DateYear->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->DateYear->exists($id)) {
			throw new NotFoundException(__('Invalid date year'));
		}
		$options = array('conditions' => array('DateYear.' . $this->DateYear->primaryKey => $id));
		$this->set('dateYear', $this->DateYear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DateYear->create();
			if ($this->DateYear->save($this->request->data)) {
				$this->Flash->success(__('The date year has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The date year could not be saved. Please, try again.'));
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
		if (!$this->DateYear->exists($id)) {
			throw new NotFoundException(__('Invalid date year'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DateYear->save($this->request->data)) {
				$this->Flash->success(__('The date year has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The date year could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DateYear.' . $this->DateYear->primaryKey => $id));
			$this->request->data = $this->DateYear->find('first', $options);
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
		$this->DateYear->id = $id;
		if (!$this->DateYear->exists()) {
			throw new NotFoundException(__('Invalid date year'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DateYear->delete()) {
			$this->Flash->success(__('The date year has been deleted.'));
		} else {
			$this->Flash->error(__('The date year could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
