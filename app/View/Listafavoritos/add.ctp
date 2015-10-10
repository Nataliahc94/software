<div class="listafavoritos form">
<?php echo $this->Form->create('Listafavorito'); ?>
	<fieldset>
		<legend><?php echo __('Add Listafavorito'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Listafavoritos'), array('action' => 'index')); ?></li>
	</ul>
</div>
