<div class="ugrupoapoyos index">
	<h2><?php echo __('Ugrupoapoyos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idugrupoApoyo'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreUsuario'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_idusuario'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ugrupoapoyos as $ugrupoapoyo): ?>
	<tr>
		<td><?php echo h($ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo']); ?>&nbsp;</td>
		<td><?php echo h($ugrupoapoyo['Ugrupoapoyo']['password']); ?>&nbsp;</td>
		<td><?php echo h($ugrupoapoyo['Ugrupoapoyo']['nombreUsuario']); ?>&nbsp;</td>
		<td><?php echo h($ugrupoapoyo['Ugrupoapoyo']['usuario_idusuario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo']), array(), __('Are you sure you want to delete # %s?', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ugrupoapoyo'), array('action' => 'add')); ?></li>
	</ul>
</div>
