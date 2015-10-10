<div class="umedicos index">
	<h2><?php echo __('Umedicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idumedico'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreUsuario'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_idusuario'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($umedicos as $umedico): ?>
	<tr>
		<td><?php echo h($umedico['Umedico']['idumedico']); ?>&nbsp;</td>
		<td><?php echo h($umedico['Umedico']['password']); ?>&nbsp;</td>
		<td><?php echo h($umedico['Umedico']['nombreUsuario']); ?>&nbsp;</td>
		<td><?php echo h($umedico['Umedico']['usuario_idusuario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $umedico['Umedico']['idumedico'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $umedico['Umedico']['idumedico'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $umedico['Umedico']['idumedico']), array(), __('Are you sure you want to delete # %s?', $umedico['Umedico']['idumedico'])); ?>
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
		<li><?php echo $this->Html->link(__('New Umedico'), array('action' => 'add')); ?></li>
	</ul>
</div>
