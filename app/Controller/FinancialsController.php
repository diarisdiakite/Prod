<?php
App::uses('AppController', 'Controller');
/**
 * Financials Controller
 *
 * @property Financial $Financial
 * @property PaginatorComponent $Paginator
 */
class FinancialsController extends AppController {

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

 public function getFinancialById($id){
			 $data=$this->Financial->findById($id);
			 return $data;
 }

	public function index() {
		$this->Financial->recursive = 0;
		$this->set('financials', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Financial->recursive = 0;
		$this->set('financials', $this->Paginator->paginate());
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
		if (!$this->Financial->exists($id)) {
			throw new NotFoundException(__('Invalid financial'));
		}
		$options = array('conditions' => array('Financial.' . $this->Financial->primaryKey => $id));
		$this->set('financial', $this->Financial->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Financial->exists($id)) {
			throw new NotFoundException(__('Invalid financial'));
		}
		$options = array('conditions' => array('Financial.' . $this->Financial->primaryKey => $id));
		$this->set('financial', $this->Financial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->Financial->create();
		 if(AuthComponent::user('group')==3){
			 $this->request->data['Financial']['approved'] = 1;
		 }
		 $this->request->data['Financial']['user_id'] = AuthComponent::user('id');

		 if ($this->Financial->save($this->request->data)) {
			 $this->Flash->success(__('The financial has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The financial could not be saved. Please, try again.'));
		 }
	 }
	 $projectActions = $this->Financial->ProjectAction->find('list');
	 $financesResponsibles = $this->Financial->FinancesResponsible->find('list');
	 $this->set(compact('projectActions', 'financesResponsibles'));
 }

	public function add($id) {
		if ($this->request->is('post')) {
			$this->Financial->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Financial']['approved'] = 1;
			}
			//$this->request->data['Financial']['project_action_id'] = $id;
			$this->request->data['Financial']['user_id'] = AuthComponent::user('id');

			if ($this->Financial->save($this->request->data)) {
				$this->Flash->success(__('The financial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The financial could not be saved. Please, try again.'));
			}
		}
		$projectActions = $this->Financial->ProjectAction->find('list');
		$financesResponsibles = $this->Financial->FinancesResponsible->find('list');
		$this->set(compact('projectActions', 'financesResponsibles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Financial->exists($id)) {
			throw new NotFoundException(__('Invalid financial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Financial->save($this->request->data)) {
				$this->Flash->success(__('The financial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The financial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Financial.' . $this->Financial->primaryKey => $id));
			$this->request->data = $this->Financial->find('first', $options);
		}
		$projectActions = $this->Financial->ProjectAction->find('list');
		$financesResponsibles = $this->Financial->FinancesResponsible->find('list');
		$this->set(compact('projectActions', 'financesResponsibles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Financial->id = $id;
		if (!$this->Financial->exists()) {
			throw new NotFoundException(__('Invalid financial'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Financial->delete()) {
			$this->Flash->success(__('The financial has been deleted.'));
		} else {
			$this->Flash->error(__('The financial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
