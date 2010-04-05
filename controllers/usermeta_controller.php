<?php
class UsermetaController extends AppController {

	var $name = 'Usermeta';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Usermetum->recursive = 0;
		$this->set('usermeta', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Usermetum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usermetum', $this->Usermetum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Usermetum->create();
			if ($this->Usermetum->save($this->data)) {
				$this->Session->setFlash(__('The Usermetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Usermetum could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Usermetum->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Usermetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usermetum->save($this->data)) {
				$this->Session->setFlash(__('The Usermetum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Usermetum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usermetum->read(null, $id);
		}
		$users = $this->Usermetum->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Usermetum', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Usermetum->del($id)) {
			$this->Session->setFlash(__('Usermetum deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Usermetum could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>