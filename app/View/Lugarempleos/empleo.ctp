<?php
require ("cabeza.ctp");
?>
    
 <?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>
 <!-- Registrar empleo
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

          <h2>Registrar Empleo<span>.</span></h2>

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
                      <input name="titulo" type="text" id="contactName" placeholder="Titulo" value="" minLength="2" required />
                      </div>
                       <div>
                       <input name="lugar" type="text" id="contactEmail" placeholder="Nombre del Lugar Empleo" value="" required />
                       </div>
                       <div>
                        <textarea name="descripcion"  id="contactMessage" placeholder="Descripcion" rows="10" cols="50" required ></textarea>
                        </div> 
                        <div>
                        <textarea name="requisitos"  id="contactMessage" placeholder="Requisitos" rows="10" cols="50" required ></textarea>
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

            $titulo=$_POST['titulo']; 
            $lugar=$_POST['lugar']; 
            $descripcion=$_POST['descripcion']; 
            $requisitos=$_POST['requisitos']; 

            if($_POST['titulo'] == '' or $_POST['lugar'] == '' or $_POST['descripcion'] == '' or $_POST['requisitos'] == '') 
            {
            	echo 'Por favor llene todos los campos.';//Si los campos están vacíos.
            }
            else 
		    { 
                $consultaE = "SELECT idlugarEmpleo FROM lugarempleo WHERE nombre='$lugar' ;";
                             
                 $cn = mysql_query($consultaE); 

                 if(!$cn)
                 {
                    echo "No se pudo ejecutar la consulta 1";
                 }

               
                 $fila=mysql_fetch_row($cn);
                 echo $fila[0];
                 $idlugar=$fila[0];

                
           
		    	
		    	 $consultaEn = "INSERT INTO empleo(`idempleo`, `titulo`, `descripcion`, `requisitos`, `lugarEmpleo_idlugarEmpleo`, `listaFavoritos_idlistaFavoritos`) VALUES ('','$titulo','$descripcion','$requisitos',$idlugar,null) ; ";
                             
                 $consultan = mysql_query($consultaEn); 

                 if(!$consultan)
                 {
                    echo "No se pudo ejecutar la consulta 2";
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