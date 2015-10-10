<div class="uempleadors view">
<h2><?php echo __('Uempleador'); ?></h2>
	<dl>
		<dt><?php echo __('Iduempleador'); ?></dt>
		<dd>
			<?php echo h($uempleador['Uempleador']['iduempleador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($uempleador['Uempleador']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreUsuario'); ?></dt>
		<dd>
			<?php echo h($uempleador['Uempleador']['nombreUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Idusuario'); ?></dt>
		<dd>
			<?php echo h($uempleador['Uempleador']['usuario_idusuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uempleador'), array('action' => 'edit', $uempleador['Uempleador']['iduempleador'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uempleador'), array('action' => 'delete', $uempleador['Uempleador']['iduempleador']), array(), __('Are you sure you want to delete # %s?', $uempleador['Uempleador']['iduempleador'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uempleadors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uempleador'), array('action' => 'add')); ?> </li>
	</ul>
</div>
