<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class IndocreatorAdminController extends AppController
{
	public function beforeFilter(Event $event)
    {
         parent::beforeFilter($event);
	    // Allow users to register and logout.
	    // You should not add the "login" action to allow list. Doing so would
	    // cause problems with normal functioning of AuthComponent.
	    $this->Auth->allow(['add', 'logout']);
    }
    public function login()
	{
		$this->viewBuilder()->layout('admin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->loginfalse('Invalid username or password, try again', array(
			    'key' => 'loginfalse',
			    'params' => array(
			        'email' => $user['IndocreatorAdmin']['email'],
			        'password' => $user['IndocreatorAdmin']['password']
			    )
			));
	    }
	}

	public function logout()
	{
	    return $this->redirect($this->Auth->logout());
	}
	public function index()
    {
    	$this->viewBuilder()->layout('admin');
    }
    public function view($id)
    {
        $user = $this->IndocreatorAdmins->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->IndocreatorAdmins->newEntity();
        if ($this->request->is('post')) {
            $user = $this->IndocreatorAdmins->patchEntity($user, $this->request->data);
            if ($this->IndocreatorAdmins->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
}
