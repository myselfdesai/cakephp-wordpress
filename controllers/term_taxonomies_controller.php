<?php
class TermTaxonomiesController extends AppController {

	var $name = 'TermTaxonomies';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TermTaxonomy->recursive = 0;
		$this->set('termTaxonomies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TermTaxonomy', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('termTaxonomy', $this->TermTaxonomy->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TermTaxonomy->create();
			if ($this->TermTaxonomy->save($this->data)) {
				$this->Session->setFlash(__('The TermTaxonomy has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TermTaxonomy could not be saved. Please, try again.', true));
			}
		}
		$terms = $this->TermTaxonomy->Term->find('list');
		$this->set(compact('terms'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TermTaxonomy', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TermTaxonomy->save($this->data)) {
				$this->Session->setFlash(__('The TermTaxonomy has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The TermTaxonomy could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TermTaxonomy->read(null, $id);
		}
		$terms = $this->TermTaxonomy->Term->find('list');
		$this->set(compact('terms'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TermTaxonomy', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->TermTaxonomy->del($id)) {
			$this->Session->setFlash(__('TermTaxonomy deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The TermTaxonomy could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>