<div class="lugarempleos form">
<?php echo $this->Form->create('Lugarempleo'); ?>
	<fieldset>
		<legend><?php echo __('Add Lugarempleo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('uempleador_iduempleador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lugarempleos'), array('action' => 'index')); ?></li>
	</ul>
</div>
