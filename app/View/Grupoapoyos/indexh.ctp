<?php
require ("cabezah.ctp");


include_once "conexion.php"; 
?>

<section id="contact">

    <div class="row section-head"> 

      <div class="twelve columns">

			<h2><?php echo __('Grupo de Apoyo'); ?></h2>
			<table cellpadding="0" cellspacing="0">
			<thead>
			<tr>
				
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('direccion'); ?></th>
					<th><?php echo $this->Paginator->sort('telefono'); ?></th>
					
			</tr>
			</thead>
			<tbody>
			<?php foreach ($grupoapoyos as $grupoapoyo): ?>
			<tr>
				
				<td><?php echo h($grupoapoyo['Grupoapoyo']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($grupoapoyo['Grupoapoyo']['direccion']); ?>&nbsp;</td>
				<td><?php echo h($grupoapoyo['Grupoapoyo']['telefono']); ?>&nbsp;</td>
				
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>

				
<?php
require ("footer.ctp");
?>