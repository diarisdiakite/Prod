<?php
App::uses('AppController', 'Controller');
/**
 * MinistriesTrainings Controller
 *
 * @property MinistriesTraining $MinistriesTraining
 * @property PaginatorComponent $Paginator
 */
class MinistriesTrainingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MinistriesTraining->recursive = 0;
		$this->set('ministriesTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MinistriesTraining->exists($id)) {
			throw new NotFoundException(__('Invalid ministries training'));
		}
		$options = array('conditions' => array('MinistriesTraining.' . $this->MinistriesTraining->primaryKey => $id));
		$this->set('ministriesTraining', $this->MinistriesTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MinistriesTraining->create();
			if ($this->MinistriesTraining->save($this->request->data)) {
				$this->Flash->success(__('The ministries training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ministries training could not be saved. Please, try again.'));
			}
		}
		$ministries = $this->MinistriesTraining->Ministry->find('list');
		$trainings = $this->MinistriesTraining->Training->find('list');
		$this->set(compact('ministries', 'trainings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MinistriesTraining->exists($id)) {
			throw new NotFoundException(__('Invalid ministries training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MinistriesTraining->save($this->request->data)) {
				$this->Flash->success(__('The ministries training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ministries training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MinistriesTraining.' . $this->MinistriesTraining->primaryKey => $id));
			$this->request->data = $this->MinistriesTraining->find('first', $options);
		}
		$ministries = $this->MinistriesTraining->Ministry->find('list');
		$trainings = $this->MinistriesTraining->Training->find('list');
		$this->set(compact('ministries', 'trainings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MinistriesTraining->id = $id;
		if (!$this->MinistriesTraining->exists()) {
			throw new NotFoundException(__('Invalid ministries training'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MinistriesTraining->delete()) {
			$this->Flash->success(__('The ministries training has been deleted.'));
		} else {
			$this->Flash->error(__('The ministries training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
