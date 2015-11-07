<?php
require ("cabezaA.ctp");


include_once "conexion.php"; 
?>
<meta charset="utf-8"/>

 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

      		<h1>Apoyo Medico<span>.</span></h1>

           <hr />    
      		<?php foreach ($apoyomedicos as $apoyomedico): ?>					
				<table cellpadding="0" cellspacing="0">
				<thead>
					<tr style="border: none;">					
							
							<td style="width: 277px;border: none;"><?php echo $this->Paginator->sort('Nombre'); ?></td>
							<td style="border: none;"><?php echo h($apoyomedico['Apoyomedico']['nombre']); ?>&nbsp;</td> 

					</tr>
							
					<tr>					
							
							<td><?php echo $this->Paginator->sort('Especialista');  ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['especialista']); ?>&nbsp;</td>

					</tr>

					<tr>					
							
							<td><?php echo $this->Paginator->sort('Dirección');  ?></td>
							<td><?php echo h($apoyomedico['Apoyomedico']['direccion']); ?>&nbsp;</td>
					</tr>

					<tr>					
							
							<td><?php echo $this->Paginator->sort('telefono'); ?></td>
							<td ><?php echo h($apoyomedico['Apoyomedico']['telefono']); ?>&nbsp;</td>
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
