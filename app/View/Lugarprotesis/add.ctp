<div class="lugarprotesis form">
<?php echo $this->Form->create('Lugarprotesi'); ?>
	<fieldset>
		<legend><?php echo __('Add Lugarprotesi'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('utiendaProtesis_idutiendaProtesis');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lugarprotesis'), array('action' => 'index')); ?></li>
	</ul>
</div>
