<?php
App::uses('AppController', 'Controller');
/**
 * FinancesResponsibles Controller
 *
 * @property FinancesResponsible $FinancesResponsible
 * @property PaginatorComponent $Paginator
 */
class FinancesResponsiblesController extends AppController {

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

 public function getFinancesResponsibleById($id){
			 $data=$this->FinancesResponsible->findById($id);
			 return $data;
 }

	public function index() {
		$this->FinancesResponsible->recursive = 0;
		$this->set('financesResponsibles', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->FinancesResponsible->recursive = 0;
		$this->set('financesResponsibles', $this->Paginator->paginate());
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
		if (!$this->FinancesResponsible->exists($id)) {
			throw new NotFoundException(__('Invalid finances responsible'));
		}
		$options = array('conditions' => array('FinancesResponsible.' . $this->FinancesResponsible->primaryKey => $id));
		$this->set('financesResponsible', $this->FinancesResponsible->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->FinancesResponsible->exists($id)) {
			throw new NotFoundException(__('Invalid finances responsible'));
		}
		$options = array('conditions' => array('FinancesResponsible.' . $this->FinancesResponsible->primaryKey => $id));
		$this->set('financesResponsible', $this->FinancesResponsible->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */


 public function admin_add() {
	if ($this->request->is('post')) {
		$this->FinancesResponsible->create();
		if(AuthComponent::user('group')==1){
			$this->request->data['FinancesResponsible']['active'] = 1;
		}
		$this->request->data['FinancesResponsible']['user_id'] = AuthComponent::user('id');

		if ($this->FinancesResponsible->save($this->request->data)) {
			$this->Flash->success(__('The finances responsible has been saved.'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Flash->error(__('The finances responsible could not be saved. Please, try again.'));
		}
	}
	$users = $this->FinancesResponsible->User->find('list');
	$this->set(compact('users'));
}

	 public function add() {
		if ($this->request->is('post')) {
			$this->FinancesResponsible->create();
			if(AuthComponent::user('group')==3){
				$this->request->data['FinancesResponsible']['active'] = 1;
			}
			$this->request->data['FinancesResponsible']['user_id'] = AuthComponent::user('id');

			if ($this->FinancesResponsible->save($this->request->data)) {
				$this->Flash->success(__('The finances responsible has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The finances responsible could not be saved. Please, try again.'));
			}
		}
		$users = $this->FinancesResponsible->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FinancesResponsible->exists($id)) {
			throw new NotFoundException(__('Invalid finances responsible'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FinancesResponsible->save($this->request->data)) {
				$this->Flash->success(__('The finances responsible has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The finances responsible could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FinancesResponsible.' . $this->FinancesResponsible->primaryKey => $id));
			$this->request->data = $this->FinancesResponsible->find('first', $options);
		}
		$users = $this->FinancesResponsible->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FinancesResponsible->id = $id;
		if (!$this->FinancesResponsible->exists()) {
			throw new NotFoundException(__('Invalid finances responsible'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FinancesResponsible->delete()) {
			$this->Flash->success(__('The finances responsible has been deleted.'));
		} else {
			$this->Flash->error(__('The finances responsible could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
}
