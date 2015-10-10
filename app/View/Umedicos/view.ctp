<div class="umedicos view">
<h2><?php echo __('Umedico'); ?></h2>
	<dl>
		<dt><?php echo __('Idumedico'); ?></dt>
		<dd>
			<?php echo h($umedico['Umedico']['idumedico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($umedico['Umedico']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreUsuario'); ?></dt>
		<dd>
			<?php echo h($umedico['Umedico']['nombreUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Idusuario'); ?></dt>
		<dd>
			<?php echo h($umedico['Umedico']['usuario_idusuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Umedico'), array('action' => 'edit', $umedico['Umedico']['idumedico'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Umedico'), array('action' => 'delete', $umedico['Umedico']['idumedico']), array(), __('Are you sure you want to delete # %s?', $umedico['Umedico']['idumedico'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Umedicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Umedico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
