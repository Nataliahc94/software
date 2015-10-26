<?php
require ("cabezah.ctp");


include_once "conexion.php"; 
?>

 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

      		<h2><?php echo __('Apoyo medico'); ?></h2>				
				<table cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						
						<th><?php echo $this->Paginator->sort('Especialista');  ?></th>
						<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('dirección'); ?></th>
						<th><?php echo $this->Paginator->sort('telefono'); ?></th>
						<th><?php echo $this->Paginator->sort('Favorito'); ?></th>
						
				</tr>
				</thead>
				<tbody>
				<?php foreach ($apoyomedicos as $apoyomedico): ?>
				<tr>
					
					<td><?php echo h($apoyomedico['Apoyomedico']['especialista']); ?>&nbsp;</td>
					<td><?php echo h($apoyomedico['Apoyomedico']['nombre']); ?>&nbsp;</td> 
					<td><?php echo h($apoyomedico['Apoyomedico']['direccion']); ?>&nbsp;</td>
					<td><?php echo h($apoyomedico['Apoyomedico']['telefono']); ?>&nbsp;</td>
					<td><?php echo h($apoyomedico['Apoyomedico']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
					
				</tr>
			<?php endforeach; ?>
				</tbody>
				</table>
		
				
<?php
require ("footer.ctp");
?>
