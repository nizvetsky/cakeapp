<?php 
class CategoriesController extends AppController {


	public function index() {
		$this->set('categories', $this->Category->find('all'));
	}

	public function add() {
        if ($this->request->is('post')){
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Категорія добавлена!', 'flash_ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Помилка добавлення категорії!');
            }
        }
    }

	public function edit($id = null) {
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Такої категорії немає'));
        }
        $category = $this->Category->findById($id);

        if ($this->request->is(array('post','put'))){
            $this->Category->id = $id;
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Категорія обновлена!', 'flash_ok');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Помилка оновлення категорії!');
            }
        }

        if(!$this->request->data) {
            $this->request->data = $category;
        }

    }

    public function delete($id = null) {
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Такої категорії немає'));
        }
        if ($this->Category->delete($id)) {
            $this->Session->setFlash('Категорія видалена!', 'flash_ok');
        } else {
            $this->Session->setFlash('Помилка видалення категорії!');
        }
        $this->redirect(array('action' => 'index'));
    }
}
 ?>