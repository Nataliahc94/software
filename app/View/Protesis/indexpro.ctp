<?php
require ("cabezapro.ctp");


include_once "conexion.php"; 
?>

  <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

      	
      	<h1>Protesis<span>.</span></h1>

           <hr /> 

<table cellspacing="0" cellpadding="0" > 
	<?php foreach ($protesis as $protesi): ?>	
	<thead>
	 <tr> 
    	<td align="center"> 
	        <table cellspacing="0" cellpadding="0" > 

				<tr style="border: none;">
					<td style="width: 277px;border: none;"><?php echo $this->Paginator->sort('Tipo');  ?></td>
					<td style="border: none;"><?php echo h($protesi['Protesi']['tipo']);?>&nbsp;</td>

				</tr>
				<tr>
					<td style="border: none;"><?php echo $this->Paginator->sort('Material'); ?></td>
					<td style="border: none;"><?php echo h($protesi['Protesi']['material']); ?>&nbsp;</td> 
				</tr>
				<tr>
					<td style="border: none;"><?php echo $this->Paginator->sort('Tamaño'); ?></td>
					<td style="border: none;"><?php echo h($protesi['Protesi']['tamaño']); ?>&nbsp;</td>
				</tr>
				<tr>
					<td style="border: none;"><?php echo $this->Paginator->sort('Precio'); ?></td>
					<td style="border: none;"><?php echo h($protesi['Protesi']['precio']); ?>&nbsp;</td>
				</tr>
				<tr>
					<td style="border: none;"><?php echo $this->Paginator->sort('Nombre del lugar'); ?></td>
					<td style="border: none;"><?php 
						
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
					
				</tr>
				<tr>						
					<td style="border: none;">
					<button  name="maillist" type="button"  id="favorito" onclick="agregar_favoritos('<?php echo h($protesi['Protesi']['idprotesis']); ?>')">Favorito</button>
						
				</tr>
				<tr>
					<td style="padding-bottom: 18px;border: none;"></td>
				</tr>
					
	        </table> 
 		</td> 
 		<td align="center">
 			 
 		</td> 
	 </tr> 
	 <tr>
		<td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
		<td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
	</tr>
	 </thead>
	 <?php endforeach; ?>
</table>
      		



	<script type="text/javascript">
		
		function agregar_favoritos(idPro) {
 			console.log("agregado a favoritos    "+idPro);
	
			$.ajax({
	            beforeSend: function() {},
	            type: "POST",
	            url: "favoritos",
	            data: {
	                'idProtesis': idPro
	            }
	        }).done(function(t) {
	            if(t){
	               
	              //  console.log(t);
	            }else{
	                console.log("MIERDA");
	            }
	            return false;
	            NProgress.done();

	        });
	   }

	</script>

	
<?php
	require ("footer.ctp");
?>
