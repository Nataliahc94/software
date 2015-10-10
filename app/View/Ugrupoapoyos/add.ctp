<div class="ugrupoapoyos form">
<?php echo $this->Form->create('Ugrupoapoyo'); ?>
	<fieldset>
		<legend><?php echo __('Add Ugrupoapoyo'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Ugrupoapoyos'), array('action' => 'index')); ?></li>
	</ul>
</div>
