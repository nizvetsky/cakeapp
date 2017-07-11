<?php 
	class UsersController extends AppController {

		public $components = array('Email');

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('add', 'logout');
		}

		public function index() {
			$this->set('users', $this->User->find('all'));
		}

		public function add() {
			if ($this->request->is('post')){
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Користувач добавлений!', 'flash_ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Помилка реєстрації!');
            }
		}

	}

	public function login() {
		if ($this->request->is('post')) {
			if($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash('Помилка авторизації');
			}
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	/*public function send() {
		$useremail = $this->data['Website']['useremail'];
	    $usertopic = $this->data['Website']['usertopic'];
	    $usermessage = $this->data['Website']['usermessage'];
	    $Email = new CakeEmail();
	    $Email->config('smtp')
	          ->emailFormat('html')
	          ->from($useremail)        
	          ->to('wigan@mail.com')
	          ->subject($usertopic); // all data is correct i checked several times
	    if($Email->send($usermessage))
	    {
	        $this->Session->setFlash('Mail sent','default',array('class'=>'alert alert-success'));
	        return $this->redirect(array('controller'=>'websites','action'=>'contact'));
	    } else  {
	        $this->Session->setFlash('Problem during sending email','default',array('class'=>'alert alert-warning'));
	    }
	}*/
}