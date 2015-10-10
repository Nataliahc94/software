<div class="protesis view">
<h2><?php echo __('Protesi'); ?></h2>
	<dl>
		<dt><?php echo __('Idprotesis'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['idprotesis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['material']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamaño'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['tamaño']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LugarProtesis IdlugarProtesis'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['lugarProtesis_idlugarProtesis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ListaFavoritos IdlistaFavoritos'); ?></dt>
		<dd>
			<?php echo h($protesi['Protesi']['listaFavoritos_idlistaFavoritos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Protesi'), array('action' => 'edit', $protesi['Protesi']['idprotesis'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Protesi'), array('action' => 'delete', $protesi['Protesi']['idprotesis']), array(), __('Are you sure you want to delete # %s?', $protesi['Protesi']['idprotesis'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Protesis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protesi'), array('action' => 'add')); ?> </li>
	</ul>
</div>
