<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->Auth->allow('liste','login', 'view','logout'); //'initDB'  //'index','logout'
 }

 public function getUserById($id){
			 $data=$this->User->findById($id);
			 return $data;
 }

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function liste() {
		$this->layout='wsite';
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
    
    public function admin_view($id = null) {
        if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
	 if ($this->request->is('post')) {
		 $this->User->create();
		 //$this->request->data['User']['password']=AuthComponent::password($this->request->data['User']['password']);
		 $this->request->data['User']['active'] = 1;
		 //$this->request->data['User']['group_id'] = $id;
		 if ($this->User->save($this->request->data)) {
			 $this->Flash->success(__('The user has been saved.'));
			 return $this->redirect(array('action' => 'index'));
		 } else {
			 $this->Flash->error(__('The user could not be saved. Please, try again.'));
		 }
	 }
	 $groups = $this->User->Group->find('list');
	 $this->set(compact('groups'));
 }

	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->User->create();
			//$this->request->data['User']['password']=AuthComponent::password($this->request->data['User']['password']);
			$this->request->data['User']['active'] = 1;
			//$this->request->data['User']['group_id'] = $id;
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    public function dashboard($id = null) {
        if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	public function login() {
		$this->layout='login';
		if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					return $this->redirect($this->Auth->redirectUrl('/'));
					echo $this->Session->flash('auth');
				} else {
					$this->Session->setFlash(__('Votre nom d\'user ou mot de passe sont incorrects.'));
				}
				//Last added acl P720
				if ($this->Session->read('Auth.User')) {
					$this->Session->setFlash('Vous êtes connecté!');
					return $this->redirect('/users/view'.$id);
				}

		}
	}
	public function logout() {
			//Laissez vide pour le moment.
			$this->Session->setFlash('Au-revoir');
			return $this->redirect($this->Auth->logout('index'));
			}

			public function initDB() {
				$group = $this->User->Group;
				// Autorise l'accès à tout pour les admins
				$group->id = 1;
				$this->Acl->allow($group, 'controllers');
				// Autorise l'accès aux posts et widgets pour les managers
				$group->id = 2;
				$this->Acl->deny($group, 'controllers');
				$this->Acl->allow($group, 'controllers/Posts');
				$this->Acl->allow($group, 'controllers/JobEmployments');
				$this->Acl->allow($group, 'controllers/Experts');
				$this->Acl->allow($group, 'controllers/Ministries');
				$this->Acl->allow($group, 'controllers/Teams');
				$this->Acl->allow($group, 'controllers/ProjectActionsMinistries');
				$this->Acl->allow($group, 'controllers/ProjectActions');
				$this->Acl->allow($group, 'controllers/Composants');
				$this->Acl->allow($group, 'controllers/ExpectedResults');
				$this->Acl->allow($group, 'controllers/Planifications');
				$this->Acl->allow($group, 'controllers/Groups');
				$this->Acl->allow($group, 'controllers/Inserts');
				$this->Acl->allow($group, 'controllers/Trainings');
				$this->Acl->allow($group, 'controllers/Types');
				$this->Acl->allow($group, 'controllers/Leashes');
				$this->Acl->allow($group, 'controllers/Posts');
				$this->Acl->allow($group, 'controllers/Names');
				$this->Acl->allow($group, 'controllers/Sectors');
				$this->Acl->allow($group, 'controllers/Levels');
				$this->Acl->allow($group, 'controllers/Assistants');
				$this->Acl->allow($group, 'controllers/FocalPoints');
				$this->Acl->allow($group, 'controllers/FinancesResponsibles');
				$this->Acl->allow($group, 'controllers/Secretaries');
				$this->Acl->allow($group, 'controllers/ProjectActions');
				$this->Acl->allow($group, 'controllers/technicals');
				$this->Acl->allow($group, 'controllers/financials');
				
				// Autorise l'accès aux actions add et edit des posts widgets pour les utilisateurs de ce groupe
				$group->id = 3;
				$this->Acl->deny($group, 'controllers');
				$this->Acl->allow($group, 'controllers/Posts/add');
				$this->Acl->allow($group, 'controllers/Posts/edit');
				$this->Acl->allow($group, 'controllers/Posts/delete');
				$this->Acl->deny($group, 'controllers/JobEmployments');
				$this->Acl->allow($group, 'controllers/Experts/edit');
				$this->Acl->deny($group, 'controllers/Ministries');
				$this->Acl->deny($group, 'controllers/Teams');
				$this->Acl->deny($group, 'controllers/ProjectActions');
				$this->Acl->deny($group, 'controllers/Composants');
				$this->Acl->deny($group, 'controllers/ExpectedResults');
				$this->Acl->deny($group, 'controllers/Planifications');
				$this->Acl->deny($group, 'controllers/Groups');
				$this->Acl->allow($group, 'controllers/Inserts/add');
				$this->Acl->allow($group, 'controllers/Inserts/edit');
				$this->Acl->deny($group, 'controllers/Trainings');
				$this->Acl->deny($group, 'controllers/Types');
				$this->Acl->deny($group, 'controllers/Leashes');
				$this->Acl->deny($group, 'controllers/Names');
				$this->Acl->deny($group, 'controllers/Sectors');
				$this->Acl->deny($group, 'controllers/Levels');
				$this->Acl->allow($group, 'controllers/FocalPoints/add');
				$this->Acl->allow($group, 'controllers/Stuctures/add');
				$this->Acl->allow($group, 'controllers/Stuctures/edit');
				$this->Acl->allow($group, 'controllers/Technicals/add');
				$this->Acl->allow($group, 'controllers/Technicals/edit');
				$this->Acl->allow($group, 'controllers/financesResponsibles/add');
				$this->Acl->allow($group, 'controllers/Financials/add');
				$this->Acl->allow($group, 'controllers/Financials/edit');
				$this->Acl->allow($group, 'controllers/Users/view');

				$group->id = 4;
				$this->Acl->deny($group, 'controllers');
				$this->Acl->allow($group, 'controllers/Posts/add');
				$this->Acl->allow($group, 'controllers/Posts/edit');
				$this->Acl->allow($group, 'controllers/Posts/delete');
				$this->Acl->deny($group, 'controllers/JobEmployments');
				$this->Acl->deny($group, 'controllers/Experts/edit');
				$this->Acl->deny($group, 'controllers/Ministries');
				$this->Acl->deny($group, 'controllers/Teams');
				$this->Acl->deny($group, 'controllers/ProjectActions');
				$this->Acl->deny($group, 'controllers/Composants');
				$this->Acl->deny($group, 'controllers/ExpectedResults');
				$this->Acl->deny($group, 'controllers/Planifications');
				$this->Acl->deny($group, 'controllers/Groups');
				$this->Acl->deny($group, 'controllers/Inserts/add');
				$this->Acl->deny($group, 'controllers/Inserts/edit');
				$this->Acl->deny($group, 'controllers/Trainings');
				$this->Acl->deny($group, 'controllers/Types');
				$this->Acl->deny($group, 'controllers/Leashes');
				$this->Acl->deny($group, 'controllers/Names');
				$this->Acl->deny($group, 'controllers/Sectors');
				$this->Acl->deny($group, 'controllers/Levels');
				$this->Acl->deny($group, 'controllers/FocalPoints/add');
				$this->Acl->deny($group, 'controllers/Stuctures/add');
				$this->Acl->deny($group, 'controllers/Stuctures/edit');
				$this->Acl->deny($group, 'controllers/Technicals/add');
				$this->Acl->deny($group, 'controllers/Technicals/edit');
				$this->Acl->deny($group, 'controllers/financesResponsibles');
				$this->Acl->deny($group, 'controllers/Financials');

				$group->id = 5;
				$this->Acl->deny($group, 'controllers');
				$this->Acl->allow($group, 'controllers/Posts/add');
				$this->Acl->allow($group, 'controllers/Posts/edit');
				$this->Acl->allow($group, 'controllers/Posts/delete');
				$this->Acl->deny($group, 'controllers/JobEmployments');
				$this->Acl->deny($group, 'controllers/Experts/edit');
				$this->Acl->deny($group, 'controllers/Ministries');
				$this->Acl->deny($group, 'controllers/Teams');
				$this->Acl->deny($group, 'controllers/ProjectActions');
				$this->Acl->deny($group, 'controllers/Composants');
				$this->Acl->deny($group, 'controllers/ExpectedResults');
				$this->Acl->deny($group, 'controllers/Planifications');
				$this->Acl->deny($group, 'controllers/Groups');
				$this->Acl->deny($group, 'controllers/Inserts/add');
				$this->Acl->deny($group, 'controllers/Inserts/edit');
				$this->Acl->deny($group, 'controllers/Trainings');
				$this->Acl->deny($group, 'controllers/Types');
				$this->Acl->deny($group, 'controllers/Leashes');
				$this->Acl->deny($group, 'controllers/Names');
				$this->Acl->deny($group, 'controllers/Sectors');
				$this->Acl->deny($group, 'controllers/Levels');
				$this->Acl->allow($group, 'controllers/FocalPoints/edit');
				$this->Acl->allow($group, 'controllers/Stuctures/add');
				$this->Acl->deny($group, 'controllers/Stuctures/edit');
				$this->Acl->deny($group, 'controllers/Technicals/add');
				$this->Acl->deny($group, 'controllers/Technicals/edit');
				$this->Acl->deny($group, 'controllers/financesResponsibles/add');
				$this->Acl->deny($group, 'controllers/Financials/add');
				$this->Acl->deny($group, 'controllers/Financials/edit');


				$group->id = 6;
				$this->Acl->deny($group, 'controllers');
				$this->Acl->allow($group, 'controllers/Posts/add');
				$this->Acl->allow($group, 'controllers/Posts/edit');
				$this->Acl->allow($group, 'controllers/Posts/delete');
				$this->Acl->deny($group, 'controllers/JobEmployments');
				$this->Acl->deny($group, 'controllers/Experts/edit');
				$this->Acl->deny($group, 'controllers/Ministries');
				$this->Acl->deny($group, 'controllers/Teams');
				$this->Acl->deny($group, 'controllers/ProjectActions');
				$this->Acl->deny($group, 'controllers/Composants');
				$this->Acl->deny($group, 'controllers/ExpectedResults');
				$this->Acl->deny($group, 'controllers/Planifications');
				$this->Acl->deny($group, 'controllers/Groups');
				$this->Acl->deny($group, 'controllers/Inserts/add');
				$this->Acl->deny($group, 'controllers/Inserts/edit');
				$this->Acl->deny($group, 'controllers/Trainings');
				$this->Acl->deny($group, 'controllers/Types');
				$this->Acl->deny($group, 'controllers/Leashes');
				$this->Acl->deny($group, 'controllers/Names');
				$this->Acl->deny($group, 'controllers/Sectors');
				$this->Acl->deny($group, 'controllers/Levels');
				$this->Acl->deny($group, 'controllers/FocalPoints/edit');
				$this->Acl->deny($group, 'controllers/Stuctures/add');
				$this->Acl->deny($group, 'controllers/Stuctures/edit');
				$this->Acl->deny($group, 'controllers/Technicals/add');
				$this->Acl->deny($group, 'controllers/Technicals/edit');
				$this->Acl->deny($group, 'controllers/financesResponsibles/add');
				$this->Acl->deny($group, 'controllers/Financials/add');
				$this->Acl->deny($group, 'controllers/Financials/edit');

				// Permet aux utilisateurs classiques de se déconnecter
				$this->Acl->allow($group, 'controllers/users/logout');

				// Nous ajoutons un exit pour éviter d'avoir un message d'erreur affreux "missing views" (manque une vue)
				echo "tout est ok";
				exit;
			}


}
