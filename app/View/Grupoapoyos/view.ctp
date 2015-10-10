<div class="grupoapoyos view">
<h2><?php echo __('Grupoapoyo'); ?></h2>
	<dl>
		<dt><?php echo __('IdgrupoApoyo'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['idgrupoApoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UgrupoApoyo IdugrupoApoyo'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['ugrupoApoyo_idugrupoApoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ListaFavoritos IdlistaFavoritos'); ?></dt>
		<dd>
			<?php echo h($grupoapoyo['Grupoapoyo']['listaFavoritos_idlistaFavoritos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupoapoyo'), array('action' => 'edit', $grupoapoyo['Grupoapoyo']['idgrupoApoyo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupoapoyo'), array('action' => 'delete', $grupoapoyo['Grupoapoyo']['idgrupoApoyo']), array(), __('Are you sure you want to delete # %s?', $grupoapoyo['Grupoapoyo']['idgrupoApoyo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupoapoyos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupoapoyo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
