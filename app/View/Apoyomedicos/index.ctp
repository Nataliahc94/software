<?php
require ("cabezaA.ctp");
?>
 <?php include_once "conexion.php"; ?>


<!-- Registro del apoyo medico
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

          <h2>Realizar Apoyo Medico<span>.</span></h2>

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
                    <input name="nombre" type="text" id="contactName" placeholder="Nombre" value="" minLength="2" required /></div>
                     <div>
                   <input name="especialista" type="text" id="contactEmail" placeholder="Especialista" value="" required />
                   </div>
                   <div>
                   <input name="direccion" type="text" id="contactEmail" placeholder="Direccion" value="" required />
                   </div>
                   <div>
                   <input name="telefono" type="text" id="contactEmail" onkeypress="return valida(event)" placeholder="Telefono" value="" required />
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

             <script>
                    function valida(e)
                    {
                        tecla = (document.all) ? e.keyCode : e.which;

                        //Tecla de retroceso para borrar, siempre la permite
                        if (tecla==8)
                        {
                            return true;
                        }
                            
                        // Patron de entrada, en este caso solo acepta numeros
                        patron =/[0-9]/;
                        tecla_final = String.fromCharCode(tecla);
                        return patron.test(tecla_final);
                   }
              </script>


       <?php

            $nombre=$_POST['nombre']; 
            $direccion=$_POST['direccion']; 
            $telefono=$_POST['telefono']; 
            $especialista=$_POST['especialista'];

            if($_POST['nombre'] == '' or $_POST['direccion'] == '' or $_POST['telefono'] == '') 
            {
            	echo 'Por favor llene todos los campos.';//Si los campos están vacíos.
            }
            else 
		        { 

                 $consultaV=" SELECT idapoyoMedico FROM `apoyomedico` WHERE  direccion='$direccion' or telefono='$telefono'  ;";
                    $cvalida= mysql_query($consultaV);
                    if(!$cvalida)
                    {
                      echo "Ha ocurrido un error, por favor realice nuevamente el registro";
                    }
                     $validarexistencia = mysql_fetch_row($cvalida);
                     if($validarexistencia[0]!="")
                     {
                        echo "El Apoyo medico ya se encuentra registrado";                       
                     }
                     else
                     {
                          session_start(); 
                            $idmedico=$_SESSION["idmedico"];
                       
                      
                           $consultaE = "INSERT INTO apoyomedico(`idapoyoMedico`, `especialista`, `nombre`, `direccion`, `telefono`, `umedico_idumedico`, `listaFavoritos_idlistaFavoritos`)VALUES ('','$especialista','$nombre','$direccion','$telefono','$idmedico',null) ; ";
                                         
                             $consulta = mysql_query($consultaE); 

                             if(!$consulta)
                             {
                                echo "No se pudo realizar la operación ";
                             }
                             else
                             {
                              echo "Se ha realizado registro del apoyo medico";
                             }
                     }
            }
    ?>
<?php
require ("footer.ctp");
?>
