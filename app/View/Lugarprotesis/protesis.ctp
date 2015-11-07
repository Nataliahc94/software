<?php
require ("cabeza.ctp");
?>
<?php 
  session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>

<!-- Registrar Protesis
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

        <h2>Registrar Prótesis<span>.</span></h2>
                <hr />  

          </div>
       
       </div> <!-- end section-head -->

        <div class="row">
         
         <div id="contact-form" class="six columns tab-whole left">

            <!-- <form action="" method="post" id="regis" class="registro"> -->
              <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >   
              <fieldset>

                  <div class="group">
                  <input name="tipo" type="text" id="contactName" placeholder="Tipo" value="" minLength="2" required />
                  </div>
                   <div>
                   <input name="material" type="text" id="contactEmail" placeholder="Material" value="" required />
                   </div>
                   <div>
                   <input name="tamaño" type="text" id="contactEmail" placeholder="Tamaño" value="" required />
                   </div>
                   <div>
                   <input name="precio" type="text" id="contactEmail" placeholder="Precio" value="" required />
                   </div>
                   <div>
                   <input name="lugar" type="text" id="contactEmail" placeholder="Nombre del lugar de la protesis" value="" required />
                   </div>
                 <div>
                     <button class="submitform" name="enviar">Registrar</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
                    <div class="s-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
              </div>
                  </div>
              
              </fieldset>
          </form> <!-- Form End -->

       <?php

            $tipo=$_POST['tipo']; 
            $material=$_POST['material']; 
            $tamaño=$_POST['tamaño']; 
            $precio=$_POST['precio']; 
            $lugar=$_POST['lugar']; 

            if($_POST['tipo'] == '' or $_POST['material'] == '' or $_POST['tamaño'] == '' or $_POST['precio'] == '' or $_POST['lugar'] == '') 
            {
            	echo 'Por favor llene todos los campos.';//Si los campos están vacíos.
            }
            else 
		    { 
                $consultaE = "SELECT idlugarprotesis FROM lugarprotesis WHERE nombre='$lugar' ;";
                             
                 $cn = mysql_query($consultaE); 

                 if(!$cn)
                 {
                    echo "No se pudo ejecutar la consulta1";
                 }

               
                 $fila=mysql_fetch_row($cn);
               
                 $idlugar=$fila[0];
                   echo $idlugar;
                  


               
                 $consultaEn = "INSERT INTO protesis VALUES('','$tipo','$material','$tamaño','$precio',$idlugar,null) ; ";
                             
                 $consultan = mysql_query($consultaEn); 

                 if(!$consultan)
                 {
                    echo "No se pudo ejecutar la consulta2";
                 }
                 else
                 {
                    echo "el registro del Empleo Fue exitoso";
                 }

		    }
    ?>
<?php		    
require ("footer.ctp");
?>