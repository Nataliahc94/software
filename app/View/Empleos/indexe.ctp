<?php
require ("cabezae.ctp");
?>
	
	 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">
		
		<h1>Empleos Disponibles<span>.</span></h1>

           <hr />    
			<?php foreach ($empleos as $empleo): ?>
				<table cellpadding="0" cellspacing="0">
					<thead>
					<tr style="border: none;">
							
							<td style="width: 277px;border: none;"><?php echo $this->Paginator->sort('título'); ?></td>
							<td style="border: none;"><?php echo h($empleo['Empleo']['titulo']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td><?php echo $this->Paginator->sort('descripción'); ?></td>
							<td><?php echo h($empleo['Empleo']['descripcion']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td><?php echo $this->Paginator->sort('requisitos'); ?></td>
							<td><?php echo h($empleo['Empleo']['requisitos']); ?>&nbsp;</td>
							
					</tr>
					<tr>
						<td><?php echo $this->Paginator->sort('Lugar'); ?></td>
							
							<?php
							 $idestable= h($empleo['Empleo']['lugarEmpleo_idlugarEmpleo']);  
                        $consulta3 = "SELECT nombre FROM lugarempleo WHERE idlugarEmpleo='$idestable'";     

                         $consultaa3 = mysql_query($consulta3); 

                         if(!$consultaa3)
                         {
                            echo "No se pudo ejecutar la consulta 2";
                         }
                          $lugarempleop=mysql_fetch_row($consultaa3);
                          $lugaremple = $lugarempleop[0];  ?>
                          <td><?php echo $lugaremple; ?>&nbsp;</td>
							
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