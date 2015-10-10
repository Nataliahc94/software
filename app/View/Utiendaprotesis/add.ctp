<div class="utiendaprotesis form">
<?php echo $this->Form->create('Utiendaprotesi'); ?>
	<fieldset>
		<legend><?php echo __('Add Utiendaprotesi'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Utiendaprotesis'), array('action' => 'index')); ?></li>
	</ul>
</div>
