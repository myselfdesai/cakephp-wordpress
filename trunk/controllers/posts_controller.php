<?php
class PostsController extends AppController {

	var $name = 'Posts';
	var $helpers = array('Html', 'Form');
	var $paginate = array( 
		'limit' => 10 
	); 

	function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action' => 'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Post->create();
			if ($this->Post->save($this->data)) {
				$this->flash(__('Post saved.', true), array('action' => 'index'));
			} else {
			}
		}
		$postParents = $this->Post->PostParent->find('list');
		$this->set(compact('postParents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Post', true), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->flash(__('The Post has been saved.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
		}
		$postParents = $this->Post->PostParent->find('list');
		$this->set(compact('postParents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action' => 'index'));
		}
		if ($this->Post->del($id)) {
			$this->flash(__('Post deleted', true), array('action' => 'index'));
		}
		$this->flash(__('The Post could not be deleted. Please, try again.', true), array('action' => 'index'));
	}

}
?>