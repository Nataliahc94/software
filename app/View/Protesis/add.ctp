<div class="protesis form">
<?php echo $this->Form->create('Protesi'); ?>
	<fieldset>
		<legend><?php echo __('Add Protesi'); ?></legend>
	<?php
		echo $this->Form->input('tipo');
		echo $this->Form->input('material');
		echo $this->Form->input('tamaño');
		echo $this->Form->input('precio');
		echo $this->Form->input('lugarProtesis_idlugarProtesis');
		echo $this->Form->input('listaFavoritos_idlistaFavoritos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Protesis'), array('action' => 'index')); ?></li>
	</ul>
</div>
