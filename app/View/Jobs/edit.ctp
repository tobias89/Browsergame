<h2>Job bearbeiten</h2>
<?php
	echo $this->form->create('Job');
	echo $this->form->input('id');
	echo $this->form->input('company');
	echo $this->form->input('title');
	echo $this->form->input('description');
	echo $this->form->end('Speichern');
?>