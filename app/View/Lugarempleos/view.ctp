<div class="lugarempleos view">
<h2><?php echo __('Lugarempleo'); ?></h2>
	<dl>
		<dt><?php echo __('IdlugarEmpleo'); ?></dt>
		<dd>
			<?php echo h($lugarempleo['Lugarempleo']['idlugarEmpleo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($lugarempleo['Lugarempleo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($lugarempleo['Lugarempleo']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($lugarempleo['Lugarempleo']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uempleador Iduempleador'); ?></dt>
		<dd>
			<?php echo h($lugarempleo['Lugarempleo']['uempleador_iduempleador']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lugarempleo'), array('action' => 'edit', $lugarempleo['Lugarempleo']['idlugarEmpleo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lugarempleo'), array('action' => 'delete', $lugarempleo['Lugarempleo']['idlugarEmpleo']), array(), __('Are you sure you want to delete # %s?', $lugarempleo['Lugarempleo']['idlugarEmpleo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugarempleos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugarempleo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
