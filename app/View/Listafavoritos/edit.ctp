<div class="listafavoritos form">
<?php echo $this->Form->create('Listafavorito'); ?>
	<fieldset>
		<legend><?php echo __('Edit Listafavorito'); ?></legend>
	<?php
		echo $this->Form->input('idlistaFavoritos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Listafavorito.idlistaFavoritos')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Listafavorito.idlistaFavoritos'))); ?></li>
		<li><?php echo $this->Html->link(__('List Listafavoritos'), array('action' => 'index')); ?></li>
	</ul>
</div>
