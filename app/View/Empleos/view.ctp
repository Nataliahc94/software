<div class="empleos view">
<h2><?php echo __('Empleo'); ?></h2>
	<dl>
		<dt><?php echo __('Idempleo'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['idempleo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requisitos'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['requisitos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LugarEmpleo IdlugarEmpleo'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['lugarEmpleo_idlugarEmpleo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ListaFavoritos IdlistaFavoritos'); ?></dt>
		<dd>
			<?php echo h($empleo['Empleo']['listaFavoritos_idlistaFavoritos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleo'), array('action' => 'edit', $empleo['Empleo']['idempleo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleo'), array('action' => 'delete', $empleo['Empleo']['idempleo']), array(), __('Are you sure you want to delete # %s?', $empleo['Empleo']['idempleo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
