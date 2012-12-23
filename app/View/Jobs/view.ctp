<h2>Job-Details</h2>
<dl>
	<dt>ID</dt>
	<dd><?php echo $job['Job']['id']; ?></dd>
	
	<dt>Firma</dt>
	<dd><?php echo $job['Job']['company']; ?></dd>
	
	<dt>Titel</dt>
	<dd><?php echo $job['Job']['title']; ?></dd>
	
	<dt>Beschreibung</dt>
	<dd><?php echo $job['Job']['description']; ?></dd>
	
	<dt>Angebot von</dt>
	<dd><?php echo $job['Job']['created']; ?></dd>
	
	<dt>zuletzt aktualisiert</dt>
	<dd><?php echo $job['Job']['modified']; ?></dd>
	
</dl>