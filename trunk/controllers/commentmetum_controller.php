<?php
class CommentmetumController extends AppController {

	var $name = 'Commentmetum';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Commentmetum->recursive = 0;
		$this->set('commentmeta', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Commentmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commentmetum', $this->Commentmetum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commentmetum->create();
			if ($this->Commentmetum->save($this->data)) {
				$this->Session->setFlash(__('The Commentmetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Commentmetum could not be saved. Please, try again.', true));
			}
		}
		$comments = $this->Commentmetum->Comment->find('list');
		$this->set(compact('comments'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Commentmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Commentmetum->save($this->data)) {
				$this->Session->setFlash(__('The Commentmetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Commentmetum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Commentmetum->read(null, $id);
		}
		$comments = $this->Commentmetum->Comment->find('list');
		$this->set(compact('comments'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Commentmetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Commentmetum->del($id)) {
			$this->Session->setFlash(__('Commentmetum deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Commentmetum could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>