<div class="lugarempleos form">
<?php echo $this->Form->create('Lugarempleo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lugarempleo'); ?></legend>
	<?php
		echo $this->Form->input('idlugarEmpleo');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lugarempleo.idlugarEmpleo')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Lugarempleo.idlugarEmpleo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lugarempleos'), array('action' => 'index')); ?></li>
	</ul>
</div>
