<?php
require ("cabeza.ctp");
?>

 <section id="portfolio">

      <div class="row section-head">

        <div class="twelve columns">

          <h1>Lista de Favoritos<span>.</span></h1>

           <hr />               

            <?php
		    session_start(); 
		    include_once "conexion.php"; 
		    $idvictima=$_SESSION["idvictima"];
       

         $consulta = " SELECT protesis.tipo , protesis.material, protesis.precio  FROM protesis INNER JOIN listafavoritos ON protesis.listaFavoritos_idlistaFavoritos = listafavoritos.idlistaFavoritos where listafavoritos.idusuario='$idvictima'; ";
         
                     
             $idconsulta = mysql_query($consulta); 

             if(!$idconsulta)
             {
                echo "No se pudo ejecutar la consulta";
             }
             else
             {
                 $fila=mysql_fetch_row($idconsulta);
             }
		    ?>
            <table cellspacing="0" cellpadding="0" > 

                 <thead>
                  <tr style="border: none;">
                    <td style="width: 277px;border: none;"><p>Tipo</p></td>
                    <td style="border: none;"><?php echo $fila[0]; ?>&nbsp;</td>
                  </tr>
                <tr>
                  <td style="border: none;"><p>Material</p></td>
                  <td style="border: none;"><?php echo $fila[1]; ?>&nbsp;</td> 
                </tr>
                <tr>
                  <td style="border: none;"><p>Precio</p></td>
                  <td style="border: none;"><?php echo $fila[2]; ?>&nbsp;</td> 
                </tr>
                <tr>
                  <td style="border: none;"><p>Más</p></td>
                  <td style="border: none;"><?php echo $fila[3][1]; ?>&nbsp;</td> 
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

        </div>

      </div>
       
     </section> 

<?php
require ("footer.ctp");
?>    