<div class="apoyomedicos view">
<h2><?php echo __('Apoyomedico'); ?></h2>
	<dl>
		<dt><?php echo __('IdapoyoMedico'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['idapoyoMedico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialista'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['especialista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Umedico Idumedico'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['umedico_idumedico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ListaFavoritos IdlistaFavoritos'); ?></dt>
		<dd>
			<?php echo h($apoyomedico['Apoyomedico']['listaFavoritos_idlistaFavoritos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Apoyomedico'), array('action' => 'edit', $apoyomedico['Apoyomedico']['idapoyoMedico'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Apoyomedico'), array('action' => 'delete', $apoyomedico['Apoyomedico']['idapoyoMedico']), array(), __('Are you sure you want to delete # %s?', $apoyomedico['Apoyomedico']['idapoyoMedico'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Apoyomedicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Apoyomedico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
