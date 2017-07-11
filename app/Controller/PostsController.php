<?php
class PostsController extends AppController {

    //public $uses = array('Category','Post');

    public function isAuthorized($user = null){
        if($this->action === 'add'){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$this->Post->exists($id)){
            throw new NotFoundException(__('Такої статті немає'));
        }
        $post = $this->Post->findById($id);
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')){
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Стаття добавлена!', 'flash_ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Помилка добавлення статті!');
            }
        }
        $this->set('title_for_layout', 'Добавлення статті');
        $this->set('categories', $this->Post->Category->find('list'));
    }

    public function delete($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Такої статті немає'));
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('Стаття видалена!', 'flash_ok');
        } else {
            $this->Session->setFlash('Помилка видалення статті!');
        }
        $this->redirect(array('action' => 'index'));
    }

    public function edit($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Такої статті немає'));
        }
        $post = $this->Post->findById($id);
        $this->set('categories', $this->Post->Category->find('list'));

        if ($this->request->is(array('post','put'))){
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Стаття обновлена!', 'flash_ok');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Помилка оновлення статті!');
            }
        }

        if(!$this->request->data) {
            $this->request->data = $post;
        }

    }

    public function search($search) {
        if (!$search) {
            $this->set('posts','Невведений пошуковий запит');
        }
        $this->render('index');
        $post = $this->Post->find('all', array(
            'conditions' => array('Post.title LIKE' => '%'.$search.'%')
            ));
    }

    public function send() {

        if ($this->request->is('post')){
            $this->Post->create();
            $name=$this->request->data['Post']['name'];
            $text=$this->request->data['Post']['text'];
            $message = 'Привіт, тема проблеми - ' . $name . ', Повний опис: ' . $text;
            App::uses('CakeEmail', 'Network/Email');
            $email = new CakeEmail();
            $email->from(array('me@example.com' => 'My Site'));
            $email->to('nizvetsky_mykhailo@ukr.net');
            $email->subject('Mail Confirmation');
            $email->send($message);
        }
    }   

}