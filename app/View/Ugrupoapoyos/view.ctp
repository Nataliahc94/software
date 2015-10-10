<div class="ugrupoapoyos view">
<h2><?php echo __('Ugrupoapoyo'); ?></h2>
	<dl>
		<dt><?php echo __('IdugrupoApoyo'); ?></dt>
		<dd>
			<?php echo h($ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($ugrupoapoyo['Ugrupoapoyo']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreUsuario'); ?></dt>
		<dd>
			<?php echo h($ugrupoapoyo['Ugrupoapoyo']['nombreUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Idusuario'); ?></dt>
		<dd>
			<?php echo h($ugrupoapoyo['Ugrupoapoyo']['usuario_idusuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ugrupoapoyo'), array('action' => 'edit', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ugrupoapoyo'), array('action' => 'delete', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo']), array(), __('Are you sure you want to delete # %s?', $ugrupoapoyo['Ugrupoapoyo']['idugrupoApoyo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ugrupoapoyos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ugrupoapoyo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
