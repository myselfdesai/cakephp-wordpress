<?php
class TermRelationshipsController extends AppController {

	var $name = 'TermRelationships';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TermRelationship->recursive = 0;
		$this->set('termRelationships', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TermRelationship', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('termRelationship', $this->TermRelationship->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TermRelationship->create();
			if ($this->TermRelationship->save($this->data)) {
				$this->Session->setFlash(__('The TermRelationship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TermRelationship could not be saved. Please, try again.', true));
			}
		}
		$termTaxonomies = $this->TermRelationship->TermTaxonomy->find('list');
		$this->set(compact('termTaxonomies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TermRelationship', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TermRelationship->save($this->data)) {
				$this->Session->setFlash(__('The TermRelationship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TermRelationship could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TermRelationship->read(null, $id);
		}
		$termTaxonomies = $this->TermRelationship->TermTaxonomy->find('list');
		$this->set(compact('termTaxonomies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TermRelationship', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->TermRelationship->del($id)) {
			$this->Session->setFlash(__('TermRelationship deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The TermRelationship could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>