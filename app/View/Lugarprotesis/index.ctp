<?php
require ("cabeza.ctp");
?>
 <?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>

 <!-- Registrar Lugar protesis
   ================================================== -->    
<section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

        <h2>Registrar Lugar Protesis<span>.</span></h2>

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
                  <input name="nombre" type="text" id="contactName" placeholder="Nombre" value="" minLength="2" required />
                  </div>
                  <div>
                   <input name="direccion" type="text" id="contactEmail" placeholder="Direccion" value="" required />
                   </div>
                   <div>
                   <input name="telefono" type="text" id="contactEmail" placeholder="Telefono" value="" required />
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

            $nombre=$_POST['nombre']; 
            $direccion=$_POST['direccion']; 
            $telefono=$_POST['telefono']; 

            if($_POST['nombre'] == '' or $_POST['direccion'] == '' or $_POST['telefono'] == '') 
            {
            	echo 'Por favor llene todos los campos.';//Si los campos están vacíos.
            }
            else 
		    { 
                
                session_start(); 
                $idtprotesis=$_SESSION["idtprotesis"];
           
		    	
		    	 $consultaE = "INSERT INTO `lugarprotesis`(`idlugarProtesis`, `nombre`, `direccion`, `telefono`, `utiendaProtesis_idutiendaProtesis`) VALUES ('','$nombre','$direccion','$telefono',$idtprotesis) ; ";
                             
                 $consulta = mysql_query($consultaE); 

                 if(!$consulta)
                 {
                    echo "No se pudo ejecutar la consulta ";
                 }
                 else
                 {
                 	echo "el registro de grupo de Apoyo fue exitoso";
                 }

		    	

		    }
    ?>
<?php
require ("footer.ctp");
?>