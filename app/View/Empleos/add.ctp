<div class="empleos form">
<?php echo $this->Form->create('Empleo'); ?>
	<fieldset>
		<legend><?php echo __('Add Empleo'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('requisitos');
		echo $this->Form->input('lugarEmpleo_idlugarEmpleo');
		echo $this->Form->input('listaFavoritos_idlistaFavoritos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empleos'), array('action' => 'index')); ?></li>
	</ul>
</div>
