<?php
App::uses('AppController', 'Controller');
/**
 * Trainings Controller
 *
 * @property Training $Training
 * @property PaginatorComponent $Paginator
 */
class TrainingsController extends AppController {

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

 public function getTrainingById($id){
			$data=$this->Training->findById($id);
			return $data;
 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Training->recursive = 0;
		$this->set('trainings', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->Training->recursive = 0;
		$this->set('trainings', $this->Paginator->paginate());
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
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
		$this->set('training', $this->Training->find('first', $options));
	}

	public function admin_view($id = null) {
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
		$this->set('training', $this->Training->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Training->create();
			if ($this->Training->save($this->request->data)) {
				$this->Flash->success(__('The training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The training could not be saved. Please, try again.'));
			}
		}
		$jobEmployments = $this->Training->JobEmployment->find('list');
		//$levels = $this->Training->Level->find('list');
		$projectActions = $this->Training->ProjectAction->find('list');
		$this->set(compact('jobEmployments', 'projectActions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Training->save($this->request->data)) {
				$this->Flash->success(__('The training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
			$this->request->data = $this->Training->find('first', $options);
		}
		$jobEmployments = $this->Training->JobEmployment->find('list');
		$levels = $this->Training->Level->find('list');
		$projectActions = $this->Training->ProjectAction->find('list');
		$this->set(compact('jobEmployments', 'levels', 'projectActions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Training->id = $id;
		if (!$this->Training->exists()) {
			throw new NotFoundException(__('Invalid training'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Training->delete()) {
			$this->Flash->success(__('The training has been deleted.'));
		} else {
			$this->Flash->error(__('The training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
