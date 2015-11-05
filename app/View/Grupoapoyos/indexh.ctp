<?php
require ("cabezah.ctp");


include_once "conexion.php"; 
?>

<section id="contact">

    <div class="row section-head"> 

      <div class="twelve columns">

			<h1>Grupos de Apoyo<span>.</span></h1>

           <hr />    
			<?php foreach ($grupoapoyos as $grupoapoyo): ?>
				<table cellpadding="0" cellspacing="0">
					<thead>
					<tr>
						
							<td><?php echo $this->Paginator->sort('nombre'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['nombre']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						
							<td><?php echo $this->Paginator->sort('direccion'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['direccion']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						
							<td><?php echo $this->Paginator->sort('telefono'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['telefono']); ?>&nbsp;</td>
							
					</tr>
					</thead>
				</table>
			<?php endforeach; ?>

				
<?php
require ("footer.ctp");
?>