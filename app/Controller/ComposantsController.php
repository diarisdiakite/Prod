<?php
App::uses('AppController', 'Controller');
/**
 * Composants Controller
 *
 * @property Composant $Composant
 * @property PaginatorComponent $Paginator
 */
class ComposantsController extends AppController {

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

 public function getComposantById($id){
			 $data=$this->Composant->findById($id);
			 return $data;
 }


	public function index() {
		$this->Composant->recursive = 0;
		$this->set('composants', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Composant->recursive = 0;
		$this->set('composants', $this->Paginator->paginate());
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
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
		$this->set('composant', $this->Composant->find('first', $options));
	}


	public function admin_view($id = null) {
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
		$this->set('composant', $this->Composant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

 public function admin_add() {
	 if ($this->request->is('post')) {
		 if (AuthComponent::user(id)!=1) {
			 $this->redirect('index');
		 }
		 $this->Composant->create();
		 if(AuthComponent::user('group')==1){
			 $this->request->data['Composant']['approved'] = 1;
		 }
		 $this->request->data['Composant']['user_id'] = AuthComponent::user('id');

		 if ($this->Composant->save($this->request->data)) {
			 $this->Flash->success(__('The composant has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The composant could not be saved. Please, try again.'));
		 }
	 }
 }


	public function add() {
		if ($this->request->is('post')) {
			if (AuthComponent::user(id)!=1) {
				$this->redirect('index');
			}
			$this->Composant->create();
			if(AuthComponent::user('group')==1){
				$this->request->data['Composant']['approved'] = 1;
			}
			$this->request->data['Composant']['user_id'] = AuthComponent::user('id');

			if ($this->Composant->save($this->request->data)) {
				$this->Flash->success(__('The composant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The composant could not be saved. Please, try again.'));
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
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Composant->save($this->request->data)) {
				$this->Flash->success(__('The composant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The composant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
			$this->request->data = $this->Composant->find('first', $options);
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
		$this->Composant->id = $id;
		if (!$this->Composant->exists()) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Composant->delete()) {
			$this->Flash->success(__('The composant has been deleted.'));
		} else {
			$this->Flash->error(__('The composant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
