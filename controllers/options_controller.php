<?php
class OptionsController extends AppController {

	var $name = 'Options';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Option->recursive = 0;
		$this->set('options', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Option', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('option', $this->Option->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Option->create();
			if ($this->Option->save($this->data)) {
				$this->Session->setFlash(__('The Option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Option could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Option', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Option->save($this->data)) {
				$this->Session->setFlash(__('The Option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Option could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Option->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Option', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Option->del($id)) {
			$this->Session->setFlash(__('Option deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Option could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>