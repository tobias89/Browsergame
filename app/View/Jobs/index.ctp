<h2>Jobs<h2>

<table>
	<tr>
		<th>ID</th>
		<th>Firma</th>
		<th>Titel</th>
		<th>Angebot vom</th>
		<th>zuletzt aktuallisiert</th>
		<th>Actions</th>
	</tr>
	
<?php foreach($jobs as $job): ?>
	<tr>
		<td><?php echo $job['Job']['id'] ?></td>
		<td><?php echo $job['Job']['company'] ?></td>
		<td><?php echo $job['Job']['title'] ?></td>
		<td><?php echo $job['Job']['created'] ?></td>
		<td><?php echo $job['Job']['modified'] ?></td>
		<td>
			<?php echo $this->html->link('Details', 'view/' . $job['Job']['id']) ?>
			<?php echo $this->html->link('bearbeiten', 'edit/' . $job['Job']['id']) ?>
			<?php echo $this->html->link('loeschen', 'delete/' . $job['Job']['id']) ?>

		</td>
	</tr>
<?php endforeach; ?>
<?php unset($job); ?>
</table>
