<div class="empleos index">
	<h2><?php echo __('Empleos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idempleo'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('requisitos'); ?></th>
			<th><?php echo $this->Paginator->sort('lugarEmpleo_idlugarEmpleo'); ?></th>
			<th><?php echo $this->Paginator->sort('listaFavoritos_idlistaFavoritos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empleos as $empleo): ?>
	<tr>
		<td><?php echo h($empleo['Empleo']['idempleo']); ?>&nbsp;</td>
		<td><?php echo h($empleo['Empleo']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($empleo['Empleo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($empleo['Empleo']['requisitos']); ?>&nbsp;</td>
		<td><?php echo h($empleo['Empleo']['lugarEmpleo_idlugarEmpleo']); ?>&nbsp;</td>
		<td><?php echo h($empleo['Empleo']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleo['Empleo']['idempleo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleo['Empleo']['idempleo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleo['Empleo']['idempleo']), array(), __('Are you sure you want to delete # %s?', $empleo['Empleo']['idempleo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empleo'), array('action' => 'add')); ?></li>
	</ul>
</div>
