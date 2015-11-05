<?php
require ("cabezau.ctp");


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
					<tr style="border: none;"> 	
						
							<td style="width: 277px;border: none;"><?php echo $this->Paginator->sort('nombre'); ?></td>
							<td style="border: none;"><?php echo h($grupoapoyo['Grupoapoyo']['nombre']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						
							<td><?php echo $this->Paginator->sort('direccion'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['direccion']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						
							<td><?php echo $this->Paginator->sort('telefono'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['telefono']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						
							<td><?php echo $this->Paginator->sort('Favorito'); ?></td>
							<td><?php echo h($grupoapoyo['Grupoapoyo']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							<td style="padding-bottom: 18px;border: none;"></td>
					</tr>	
					 <tr>
							<td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
							<td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
					</tr>	

					</thead>
				</table>
			<?php endforeach; ?>

				
<?php
require ("footer.ctp");
?>