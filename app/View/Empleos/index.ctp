<?php
require ("cabeza.ctp");
?>
	
	 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">
		
		<h2><?php echo __('Empleos'); ?></h2>
			<table cellpadding="0" cellspacing="0">
			<thead>
			<tr>
					
					<th><?php echo $this->Paginator->sort('titulo'); ?></th>
					<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
					<th><?php echo $this->Paginator->sort('requisitos'); ?></th>
					<th><?php echo $this->Paginator->sort('lugarEmpleo_idlugarEmpleo'); ?></th>
					<th><?php echo $this->Paginator->sort('listaFavoritos_idlistaFavoritos'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($empleos as $empleo): ?>
			<tr>
				
				<td><?php echo h($empleo['Empleo']['titulo']); ?>&nbsp;</td>
				<td><?php echo h($empleo['Empleo']['descripcion']); ?>&nbsp;</td>
				<td><?php echo h($empleo['Empleo']['requisitos']); ?>&nbsp;</td>
				<td><?php echo h($empleo['Empleo']['lugarEmpleo_idlugarEmpleo']); ?>&nbsp;</td>
				<td><?php echo h($empleo['Empleo']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
				
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
		
<?php
require ("footer.ctp");
?>