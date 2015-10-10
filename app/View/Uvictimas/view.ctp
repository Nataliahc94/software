<div class="uvictimas view">
<h2><?php echo __('Uvictima'); ?></h2>
	<dl>
		<dt><?php echo __('Iduvictima'); ?></dt>
		<dd>
			<?php echo h($uvictima['Uvictima']['iduvictima']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($uvictima['Uvictima']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreUsuario'); ?></dt>
		<dd>
			<?php echo h($uvictima['Uvictima']['nombreUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Idusuario'); ?></dt>
		<dd>
			<?php echo h($uvictima['Uvictima']['usuario_idusuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uvictima'), array('action' => 'edit', $uvictima['Uvictima']['iduvictima'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uvictima'), array('action' => 'delete', $uvictima['Uvictima']['iduvictima']), array(), __('Are you sure you want to delete # %s?', $uvictima['Uvictima']['iduvictima'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uvictimas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uvictima'), array('action' => 'add')); ?> </li>
	</ul>
</div>
