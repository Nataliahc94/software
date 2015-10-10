<div class="grupoapoyos form">
<?php echo $this->Form->create('Grupoapoyo'); ?>
	<fieldset>
		<legend><?php echo __('Add Grupoapoyo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('ugrupoApoyo_idugrupoApoyo');
		echo $this->Form->input('listaFavoritos_idlistaFavoritos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grupoapoyos'), array('action' => 'index')); ?></li>
	</ul>
</div>
