<?php
class JobsController extends AppController {
	
	public $helpers = array('Form', 'Html', 'Js', 'Time');
	
	
	var $name = 'Jobs';
	//var $scaffold;
	
	public function index() {
	
	$this->pageTitle = 'Das ist ein Job';
		
		$jobs = $this->Job->find('all', array(
						'order' => 'created DESC',
		));
		
		$this->set('jobs', $jobs);
	}
		
	public function view($id) {
		$job = $this->Job->read(null, $id);
		$this->set('job', $job);
	}

	public function edit($id = null) {
		if(!empty($this->data)) {
			
			if($this->Job->save($this->data)) {
				$this->Session->setFlash('Der Job wurde gespeichert.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Der Job konnte nicht gespeichert werden.');
			}
			
		} else {
			$this->data = $this->Job->read(null, $id);
		}
	}
	
	public function add() {
		if(!empty($this->data)) {
			$this->Job->create();
			if($this->Job->save($this->data)) {
				$this->Session->setFlash('Der Job wurde gespeichert.');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Der Job konnte nicht angelegt werden.');
			}
		}
	}
	
	public function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Ungültige Job-ID');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Job->delete($id)) {
			$this->Session->setFlash("Der Job mit der ID {$id} wurde gel&ouml;scht.");
			$this->redirect(array('action'=>'index'));
		}
	}
	
	
}
?>