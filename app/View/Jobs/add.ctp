<h2>Neuer Job</h2>
<?php
	echo $this->form->create('Job');
	echo $this->form->input('company');
	echo $this->form->input('title');
	echo $this->form->input('description');
	echo $this->form->end('Speichern');
?>