<div class="protesis index">
	<h2><?php echo __('Protesis'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idprotesis'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('material'); ?></th>
			<th><?php echo $this->Paginator->sort('tamaño'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('lugarProtesis_idlugarProtesis'); ?></th>
			<th><?php echo $this->Paginator->sort('listaFavoritos_idlistaFavoritos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($protesis as $protesi): ?>
	<tr>
		<td><?php echo h($protesi['Protesi']['idprotesis']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['material']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['tamaño']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['precio']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['lugarProtesis_idlugarProtesis']); ?>&nbsp;</td>
		<td><?php echo h($protesi['Protesi']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $protesi['Protesi']['idprotesis'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $protesi['Protesi']['idprotesis'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $protesi['Protesi']['idprotesis']), array(), __('Are you sure you want to delete # %s?', $protesi['Protesi']['idprotesis'])); ?>
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
		<li><?php echo $this->Html->link(__('New Protesi'), array('action' => 'add')); ?></li>
	</ul>
</div>
