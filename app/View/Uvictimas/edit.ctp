<div class="uvictimas form">
<?php echo $this->Form->create('Uvictima'); ?>
	<fieldset>
		<legend><?php echo __('Edit Uvictima'); ?></legend>
	<?php
		echo $this->Form->input('iduvictima');
		echo $this->Form->input('password');
		echo $this->Form->input('nombreUsuario');
		echo $this->Form->input('usuario_idusuario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Uvictima.iduvictima')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Uvictima.iduvictima'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uvictimas'), array('action' => 'index')); ?></li>
	</ul>
</div>
