<?php
require ("cabezah.ctp");


include_once "conexion.php"; 
?>

 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

      		<h1>Apoyo Medico<span>.</span></h1>

           <hr />    
      		<?php foreach ($apoyomedicos as $apoyomedico): ?>					
				<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>					
							
							<td><?php echo $this->Paginator->sort('Nombre'); ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['nombre']); ?>&nbsp;</td> 

					</tr>
							
					<tr>					
							
							<td><?php echo $this->Paginator->sort('Especialista');  ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['especialista']); ?>&nbsp;</td>

					</tr>

					<tr>					
							
							<td><?php echo $this->Paginator->sort('Direcci�n');  ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['direccion']); ?>&nbsp;</td>
					</tr>

					<tr>					
							
							<td><?php echo $this->Paginator->sort('telefono'); ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['telefono']); ?>&nbsp;</td>
					</tr>	

					<tr>					
							
							<td><?php echo $this->Paginator->sort('Favorito'); ?></td>
						    <td><?php echo h($apoyomedico['Apoyomedico']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
					</tr>				

				</thead>
				
			</table>

		<?php endforeach; ?>
		
				
<?php
require ("footer.ctp");
?>
