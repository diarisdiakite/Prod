<?php
App::uses('AppController', 'Controller');
/**
 * Realizations Controller
 *
 * @property Realization $Realization
 * @property PaginatorComponent $Paginator
 */
class RealizationsController extends AppController {

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

 public function getRealizationById($id){
			$data=$this->Realization->findById($id);
			return $data;
 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Realization->recursive = 0;
		$this->set('realizations', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Realization->recursive = 0;
		$this->set('realizations', $this->Paginator->paginate());
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
		if (!$this->Realization->exists($id)) {
			throw new NotFoundException(__('Invalid realization'));
		}
		$options = array('conditions' => array('Realization.' . $this->Realization->primaryKey => $id));
		$this->set('realization', $this->Realization->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Realization->exists($id)) {
			throw new NotFoundException(__('Invalid realization'));
		}
		$options = array('conditions' => array('Realization.' . $this->Realization->primaryKey => $id));
		$this->set('realization', $this->Realization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Realization->create();
			if ($this->Realization->save($this->request->data)) {
				$this->Flash->success(__('The realization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The realization could not be saved. Please, try again.'));
			}
		}
		$users = $this->Realization->User->find('list');
		$inserts = $this->Realization->Insert->find('list');
		$structures = $this->Realization->Structure->find('list');
		$focalPoints = $this->Realization->FocalPoint->find('list');
		$financesResponsibles = $this->Realization->FinancesResponsible->find('list');
		$this->set(compact('users', 'inserts', 'structures', 'focalPoints', 'financesResponsibles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Realization->exists($id)) {
			throw new NotFoundException(__('Invalid realization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Realization->save($this->request->data)) {
				$this->Flash->success(__('The realization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The realization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Realization.' . $this->Realization->primaryKey => $id));
			$this->request->data = $this->Realization->find('first', $options);
		}
		$users = $this->Realization->User->find('list');
		$inserts = $this->Realization->Insert->find('list');
		$structures = $this->Realization->Structure->find('list');
		$focalPoints = $this->Realization->FocalPoint->find('list');
		$financesResponsibles = $this->Realization->FinancesResponsible->find('list');
		$this->set(compact('users', 'inserts', 'structures', 'focalPoints', 'financesResponsibles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Realization->id = $id;
		if (!$this->Realization->exists()) {
			throw new NotFoundException(__('Invalid realization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Realization->delete()) {
			$this->Flash->success(__('The realization has been deleted.'));
		} else {
			$this->Flash->error(__('The realization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
