<div class="lugarprotesis view">
<h2><?php echo __('Lugarprotesi'); ?></h2>
	<dl>
		<dt><?php echo __('IdlugarProtesis'); ?></dt>
		<dd>
			<?php echo h($lugarprotesi['Lugarprotesi']['idlugarProtesis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($lugarprotesi['Lugarprotesi']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($lugarprotesi['Lugarprotesi']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($lugarprotesi['Lugarprotesi']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UtiendaProtesis IdutiendaProtesis'); ?></dt>
		<dd>
			<?php echo h($lugarprotesi['Lugarprotesi']['utiendaProtesis_idutiendaProtesis']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lugarprotesi'), array('action' => 'edit', $lugarprotesi['Lugarprotesi']['idlugarProtesis'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lugarprotesi'), array('action' => 'delete', $lugarprotesi['Lugarprotesi']['idlugarProtesis']), array(), __('Are you sure you want to delete # %s?', $lugarprotesi['Lugarprotesi']['idlugarProtesis'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugarprotesis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugarprotesi'), array('action' => 'add')); ?> </li>
	</ul>
</div>
