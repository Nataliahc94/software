<div class="utiendaprotesis view">
<h2><?php echo __('Utiendaprotesi'); ?></h2>
	<dl>
		<dt><?php echo __('IdutiendaProtesis'); ?></dt>
		<dd>
			<?php echo h($utiendaprotesi['Utiendaprotesi']['idutiendaProtesis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($utiendaprotesi['Utiendaprotesi']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreUsuario'); ?></dt>
		<dd>
			<?php echo h($utiendaprotesi['Utiendaprotesi']['nombreUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Idusuario'); ?></dt>
		<dd>
			<?php echo h($utiendaprotesi['Utiendaprotesi']['usuario_idusuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Utiendaprotesi'), array('action' => 'edit', $utiendaprotesi['Utiendaprotesi']['idutiendaProtesis'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Utiendaprotesi'), array('action' => 'delete', $utiendaprotesi['Utiendaprotesi']['idutiendaProtesis']), array(), __('Are you sure you want to delete # %s?', $utiendaprotesi['Utiendaprotesi']['idutiendaProtesis'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Utiendaprotesis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utiendaprotesi'), array('action' => 'add')); ?> </li>
	</ul>
</div>
