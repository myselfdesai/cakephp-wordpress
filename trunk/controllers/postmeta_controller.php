<?php
class PostmetaController extends AppController {

	var $name = 'Postmeta';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Postmetum->recursive = 0;
		$this->set('postmeta', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Postmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('postmetum', $this->Postmetum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Postmetum->create();
			if ($this->Postmetum->save($this->data)) {
				$this->Session->setFlash(__('The Postmetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Postmetum could not be saved. Please, try again.', true));
			}
		}
		$posts = $this->Postmetum->Post->find('list');
		$this->set(compact('posts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Postmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Postmetum->save($this->data)) {
				$this->Session->setFlash(__('The Postmetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Postmetum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Postmetum->read(null, $id);
		}
		$posts = $this->Postmetum->Post->find('list');
		$this->set(compact('posts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Postmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Postmetum->del($id)) {
			$this->Session->setFlash(__('Postmetum deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Postmetum could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>