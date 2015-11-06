<?php
require ("cabezau.ctp");
?>
	
	 <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">
		
		<h1>Empleos Disponibles<span>.</span></h1>

           <hr />    
			<?php foreach ($empleos as $empleo): ?>
				<table cellpadding="0" cellspacing="0">
					<thead>
					<tr  style="border: none;">
							
							<td style="width: 277px;border: none;"><?php echo $this->Paginator->sort('titulo'); ?></td>
							<td style="border: none;"><?php echo h($empleo['Empleo']['titulo']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td><?php echo $this->Paginator->sort('descripcion'); ?></td>
							<td><?php echo h($empleo['Empleo']['descripcion']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td><?php echo $this->Paginator->sort('requisitos'); ?></td>
							<td><?php echo h($empleo['Empleo']['requisitos']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td><?php echo $this->Paginator->sort('Lugar'); ?></td>
							<td><?php echo h($empleo['Empleo']['lugarEmpleo_idlugarEmpleo']); ?>&nbsp;</td>
							
					</tr>
					<tr>
							
							<td style="border: none;">
							<button  name="maillist" type="button"  id="favorito" onclick="agregar_favoritos('<?php echo h($empleo['Empleo']['idempleo']); ?>')">Favorito</button>
							
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
	                'idempleo': idPro
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