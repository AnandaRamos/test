<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add', 'edit']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Individuals']
        ];

        $users = $this->Users->find('all')
            ->where(['Users.active' => true]);

        $users = $this->paginate($users);

        $this->set(compact('users'));
    }

    /*
     *
     */
    public function search($slug)
    {
        $this->paginate = [
            'contain' => ['Individuals']
        ];

        $users = $this->Users->find('all')
            ->where([
                'Users.id' => $slug,
                'OR' => ['Users.cpf' => $slug],
            ]);

        $users = $this->paginate($users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->find('all')
            ->contain(['Addresses', 'Phones', 'Individuals'])
            ->where(['Users.id' => $id
            ])->first();

        $this->set('user', $user);
    }

    /*
     *
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData(), [
                'associated' => ['Addresses', 'Phones', 'Individuals']
            ]);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The new user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to add this user.'));
            }
        }
        $this->set('user', $user);
    }


    /*
     *
     */
    public function edit($id)
    {
        $user = $this->Users
            ->find('all')
            ->where(['Users.id' => $id])
            ->contain(['Individuals', 'Addresses', 'Phones']) // load associated
            ->firstOrFail();

        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData(), [
                // Added: Disable modification of user's id.
                'accessibleFields' => ['Users.id' => false],
                'associated' => ['Addresses', 'Phones', 'Individuals']
            ]);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your user.'));
        }
        $this->set('user', $user);
    }
}
