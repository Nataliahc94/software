<div class="apoyomedicos index">
	<h2><?php echo __('Apoyomedicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idapoyoMedico'); ?></th>
			<th><?php echo $this->Paginator->sort('especialista'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('umedico_idumedico'); ?></th>
			<th><?php echo $this->Paginator->sort('listaFavoritos_idlistaFavoritos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($apoyomedicos as $apoyomedico): ?>
	<tr>
		<td><?php echo h($apoyomedico['Apoyomedico']['idapoyoMedico']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['especialista']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['umedico_idumedico']); ?>&nbsp;</td>
		<td><?php echo h($apoyomedico['Apoyomedico']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $apoyomedico['Apoyomedico']['idapoyoMedico'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $apoyomedico['Apoyomedico']['idapoyoMedico'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $apoyomedico['Apoyomedico']['idapoyoMedico']), array(), __('Are you sure you want to delete # %s?', $apoyomedico['Apoyomedico']['idapoyoMedico'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Apoyomedico'), array('action' => 'add')); ?></li>
	</ul>
</div>
