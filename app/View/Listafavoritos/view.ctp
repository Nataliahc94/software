<div class="listafavoritos view">
<h2><?php echo __('Listafavorito'); ?></h2>
	<dl>
		<dt><?php echo __('IdlistaFavoritos'); ?></dt>
		<dd>
			<?php echo h($listafavorito['Listafavorito']['idlistaFavoritos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Listafavorito'), array('action' => 'edit', $listafavorito['Listafavorito']['idlistaFavoritos'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Listafavorito'), array('action' => 'delete', $listafavorito['Listafavorito']['idlistaFavoritos']), array(), __('Are you sure you want to delete # %s?', $listafavorito['Listafavorito']['idlistaFavoritos'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listafavoritos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listafavorito'), array('action' => 'add')); ?> </li>
	</ul>
</div>
