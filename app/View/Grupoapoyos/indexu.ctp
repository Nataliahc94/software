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
						
							<td style="border: none;">
							<button href="javascript:void(0)" onMouseUp="alert('Se ha marcado como favorito')"  name="maillist" type="button"  id="favorito" onclick="agregar_favoritos('<?php echo h($grupoapoyo['Grupoapoyo']['idgrupoApoyo']); ?>')">Favorito</button>
							
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


	<script type="text/javascript">
		
		function agregar_favoritos(idPro) {
 			console.log("agregado a favoritos    "+idPro);
	
			$.ajax({
	            beforeSend: function() {},
	            type: "POST",
	            url: "favoritos",
	            data: {
	                'idgrupoApoyo': idPro
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