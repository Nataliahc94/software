<?php
require ("cabezapro.ctp");


include_once "conexion.php"; 
?>

 <div class="main-container">
 	 <article class="box" id="home_featured21">
            <div class="block"><h2><?php echo __('Protesis'); ?></h2>				
				<table cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						
						<th><?php echo $this->Paginator->sort('tipo');  ?></th>
						<th><?php echo $this->Paginator->sort('material'); ?></th>
						<th><?php echo $this->Paginator->sort('tamaño'); ?></th>
						<th><?php echo $this->Paginator->sort('precio'); ?></th>
						<th><?php echo $this->Paginator->sort('Nombre del lugar'); ?></th>
						<th><?php echo $this->Paginator->sort('Favorito'); ?></th>
						
				</tr>
				</thead>
				<tbody>
				<?php foreach ($protesis as $protesi): ?>
				<tr>
					
					<td><?php echo h($protesi['Protesi']['tipo']); ?>&nbsp;</td>
					<td><?php echo h($protesi['Protesi']['material']); ?>&nbsp;</td> 
					<td><?php echo h($protesi['Protesi']['tamaño']); ?>&nbsp;</td>
					<td><?php echo h($protesi['Protesi']['precio']); ?>&nbsp;</td>
					<td><?php 
							
							$idlugar= h($protesi['Protesi']['lugarProtesis_idlugarProtesis']); 

							 $consultaid2 = "SELECT nombre FROM lugarprotesis WHERE idlugarProtesis='$idlugar'";     

			                     $tipo2consultaid = mysql_query($consultaid2); 

			                     if(!$tipo2consultaid)
			                     {
			                        echo "No se pudo ejecutar la consulta";
			                     }
			                      $fila2id=mysql_fetch_row($tipo2consultaid);
			                      $lugar = $fila2id[0];
			                      echo $lugar;

							?>&nbsp;</td>
					<td><?php echo h($protesi['Protesi']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
				</tbody>
				</table>
		
				
<?php
require ("footer.ctp");
?>
