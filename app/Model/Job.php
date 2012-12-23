<?php

class Job extends AppModel {
	var $name = 'Job';
	
	var $validate = array(
	    'title' => array(
			'rule' => array('custom', '/[^a-z0-9 הצü]{3,24}$/i'),
			'message' => 'Der Titel muss zwischen 3 und 24 Zeichen lang sein
						  und darf nur Buchstaben und Zahlen entahlten.'
	    ),
	    'company' => array(
			'minlength' => array(
		        'rule' => array('minLength', 3),
				'message' => 'Die Firma muss mindestens 3 Zeichen lang sein.'
			),
			'maxlength' => array(
		        'rule' => array('maxLength', 40),
				'message' => 'Die Firma darf maximal 30 Zeichen lang sein.'
			)
	    )
	);
	
	
}

?>