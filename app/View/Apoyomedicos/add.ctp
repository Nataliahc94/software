<div class="apoyomedicos form">
<?php echo $this->Form->create('Apoyomedico'); ?>
	<fieldset>
		<legend><?php echo __('Add Apoyomedico'); ?></legend>
	<?php
		echo $this->Form->input('especialista');
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('umedico_idumedico');
		echo $this->Form->input('listaFavoritos_idlistaFavoritos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Apoyomedicos'), array('action' => 'index')); ?></li>
	</ul>
</div>
