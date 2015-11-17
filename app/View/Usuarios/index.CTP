<?php
require ("cabezar.ctp");
?>
    <?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>

  <!-- Registrar usuario
   ================================================== -->
  <section id="portfolio">

      <div class="row section-head">




      <div class="twelve columns">

          <h1>Registrar Usuario<span>.</span></h1>

            <hr />  

          </div>
       
       </div> <!-- end section-head -->

        <div class="row" id="po">
         
         <div id="contact-form" class="six columns tab-whole left">

            <!-- <form action="" method="post" id="regis" class="registro"> -->
              <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >   
              <fieldset>

                <div class="group">
                  <input name="usuario" type="text" id="contactName" placeholder="Nombre" value="" minLength="2" required />
                  </div>
                   <div>
                   <input name="email" type="email" id="contactEmail" placeholder="Email" value="" required />
                   </div>
                   <div>
                   <input name="ciudad" type="text" id="contactSubject" placeholder="Ciudad"  value="" />
                   </div> 
                   <div>
                   <input name="departamento" type="text" id="contactSubject" placeholder="Departamento"  value="" />
                   </div>  
                  <div>
                   <input name="NomUsuario" type="text" id="contactSubject" placeholder="Nombre de Usuario"  value="" />
                   </div>  
                  <div>
                   <input name="contraseña" type="password" id="contactSubject" placeholder="Contraseña"  value="" />
                   </div> 
                   <div>
                   <input name="repContraseña" type="password" id="contactSubject" placeholder="Repita Contraseña"  value="" />
                   </div> 

                     <div>
                 <select  style= "width: 550px;" name="opcion" id="numtexts" placeholder="Seleccione un tipo de usuario" onchange="crear(this.value)">
                            <option value="0">Seleccionar</option>
                            <option value="1">Victima</option>
                            <option value="2">Medico</option>
                            <option value="3">Grupo de Apoyo</option>
                            <option value="4">Tienda de Protesis</option>
                            <option value="5">Empleador</option>
                        </select>
                 </div>  


                  <div>
                     <button style= "width: 550px;" class="submitform" name="enviar">Registrar</button>
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

            $email=$_POST['email']; 
            $nombre=$_POST['usuario']; 
            $ciudad=$_POST['ciudad']; 
            $departamento=$_POST['departamento']; 
            $nomUsuario=$_POST['NomUsuario']; 
            $contraseña=$_POST['contraseña']; 
            $repContraseña=$_POST['repContraseña']; 


{ 
    if($_POST['usuario'] == '' or $_POST['email'] == '' or $_POST['ciudad'] == ''or $_POST['departamento'] == '' or $_POST['NomUsuario'] == '' or $_POST['contraseña'] == '' or $_POST['repContraseña'] == '' ) 
    { 
        echo 'Por favor llene todos los campos.';//Si los campos están vacíos.
    } 
    else
    {

        $consultarNombreU1 = "SELECT nombreUsuario FROM uvictima WHERE nombreUsuario = '$nomUsuario' ";

      $obtenerNomU1= mysql_query($consultarNombreU1);
      if(!$obtenerNomU1)
      {
        echo "Ha ocurrido un error, por favor intentelo nuevamente";
      }
      else
      {
         $NomUsuario1 = mysql_fetch_row($obtenerNomU1);
        if( $NomUsuario1[0]==$nomUsuario)
        {
          echo"<script>alert('El nombre de usaurio ya se encuentra registrado, por favor intenete con otro nombre de usuario')</script>";
           echo "Realice el Registro nuevamente, con otro nombre de usuario";

        }
        else
        {
            $consultarNombreU2 = "SELECT nombreUsuario FROM utiendaprotesis WHERE nombreUsuario = '$nomUsuario' ";

            $obtenerNomU2= mysql_query($consultarNombreU2);
            if(!$obtenerNomU2)
            {
              echo "Ha ocurrido un error, por favor intentelo nuevamente";
            }
            else
            {
               $NomUsuario2 = mysql_fetch_row($obtenerNomU2);
              if( $NomUsuario2[0]==$nomUsuario)
              {
                echo"<script>alert('El nombre de usaurio ya se encuentra registrado, por favor intenete con otro nombre de usuario')</script>";
                  echo "Realice el Registro nuevamente, con otro nombre de usuario";
              }
              else
              {

                
                $consultarNombreU3 = "SELECT nombreUsuario FROM umedico WHERE nombreUsuario = '$nomUsuario' ";

                  $obtenerNomU3= mysql_query($consultarNombreU3);
                  if(!$obtenerNomU3)
                  {
                    echo "Ha ocurrido un error, por favor intentelo nuevamente";
                  }
                  else
                  {
                     $NomUsuario3 = mysql_fetch_row($obtenerNomU3);
                    if( $NomUsuario3[0]==$nomUsuario)
                    {
                      echo"<script>alert('El nombre de usaurio ya se encuentra registrado, por favor intenete con otro nombre de usuario')</script>";
                      echo "Realice el Registro nuevamente, con otro nombre de usuario";
                    }
                    else
                    {

                           $consultarNombreU4 = "SELECT nombreUsuario FROM ugrupoapoyo WHERE nombreUsuario = '$nomUsuario' ";

                            $obtenerNomU4= mysql_query($consultarNombreU4);
                            if(!$obtenerNomU4)
                            {
                              echo "Ha ocurrido un error, por favor intentelo nuevamente";
                            }
                            else
                            {
                                 $NomUsuario4 = mysql_fetch_row($obtenerNomU4);
                                if( $NomUsuario4[0]==$nomUsuario)
                                {
                                  echo"<script>alert('El nombre de usaurio ya se encuentra registrado, por favor intenete con otro nombre de usuario')</script>";
                                     echo "Realice el Registro nuevamente, con otro nombre de usuario";
                                }
                                else
                                {

                                    $consultarNombreU5 = "SELECT nombreUsuario FROM uempleador WHERE nombreUsuario = '$nomUsuario' ";

                                    $obtenerNomU5= mysql_query($consultarNombreU5);
                                    if(!$obtenerNomU5)
                                    {
                                      echo "Ha ocurrido un error, por favor intentelo nuevamente";
                                    }
                                    else
                                    {
                                         $NomUsuario5 = mysql_fetch_row($obtenerNomU5);
                                        if( $NomUsuario5[0]==$nomUsuario)
                                        {
                                         echo"<script>alert('El nombre de usaurio ya se encuentra registrado, por favor intenete con otro nombre de usuario')</script>";
                                           echo "Realice el Registro nuevamente, con otro nombre de usuario";
                                        }
                                        else 
                                      { 


                                                  $consultaE = "SELECT email FROM usuario WHERE email = '$email' ";
                                                               
                                                   $emailconsulta = mysql_query($consultaE); 

                                                   if(!$emailconsulta)
                                                   {
                                                      echo "No se pudo ejecutar la consulta";
                                                   }

                                                 
                                                   $fila=mysql_fetch_row($emailconsulta);
                                                  


                                             if($fila[0]!=$email) 
                                          { 
                                             
                                    
                                               if($_POST['contraseña'] == $_POST['repContraseña'])
                                               {
                                                 mysql_query("INSERT into usuario values ('','$nombre','$email','$ciudad','$
                                                  departamento'); "); 

                                                  if( $_POST['opcion']=="0")
                                                    {
                                                      echo "Debe de Seleccionar un tipo de Usuario";
                                                    }
                                                    if( $_POST['opcion']=="1")
                                                    {
                                                           
                                                             $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                                                       
                                                               $idconsulta = mysql_query($consulta); 

                                                               if(!$idconsulta)
                                                               {
                                                                  echo "Ha ocurrido un error, por favor intentelo nuevamente";
                                                               }
                                                               else
                                                               {
                                                                   $fila=mysql_fetch_row($idconsulta);
                                                                   

                                                                   mysql_query( "INSERT INTO uvictima VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '1') ;");
                                                                    echo 'Este usuario se ha registrado exitosamente.'; 

                                                               }

                                               
                                                    }
                                                     if( $_POST['opcion']=="2")
                                                    {
                                                           
                                                             $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                                                       
                                                               $idconsulta = mysql_query($consulta); 

                                                               if(!$idconsulta)
                                                               {
                                                                  echo "No se pudo ejecutar la consulta";
                                                               }
                                                               else
                                                               {
                                                                   $fila=mysql_fetch_row($idconsulta);
                                                                    

                                                                   mysql_query( "INSERT INTO umedico VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '2') ;");
                                                               }

                                               
                                                    }
                                                     if( $_POST['opcion']=="3")
                                                    {
                                                           
                                                             $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                                                       
                                                               $idconsulta = mysql_query($consulta); 

                                                               if(!$idconsulta)
                                                               {
                                                                  echo "No se pudo ejecutar la consulta";
                                                               }
                                                               else
                                                               {
                                                                   $fila=mysql_fetch_row($idconsulta);
                                                                    

                                                                   mysql_query( "INSERT INTO ugrupoapoyo VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '3') ;");
                                                               }

                                               
                                                    }
                                                      if( $_POST['opcion']=="4")
                                                    {
                                                           
                                                             $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                                                       
                                                               $idconsulta = mysql_query($consulta); 

                                                               if(!$idconsulta)
                                                               {
                                                                  echo "No se pudo ejecutar la consulta";
                                                               }
                                                               else
                                                               {
                                                                   $fila=mysql_fetch_row($idconsulta);
                                                                   

                                                                   mysql_query( "INSERT INTO utiendaprotesis VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '4') ;");
                                                               }

                                               
                                                    }
                                                         if( $_POST['opcion']=="5")
                                                    {
                                                          
                                                             $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                                                       
                                                               $idconsulta = mysql_query($consulta); 

                                                               if(!$idconsulta)
                                                               {
                                                                  echo "No se pudo ejecutar la consulta";
                                                               }
                                                               else
                                                               {
                                                                   $fila=mysql_fetch_row($idconsulta);
                                                                    
                                                                   mysql_query( "INSERT INTO uempleador VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '5') ;");
                                                               }

                                               
                                                    }



                                                  
                                                  




                                               }
                                               else
                                               {
                                                  echo "  Las contraseñas no coinciden";
                                               }
                                           }
                                          else 
                                          {  
                                              
                                               echo " El usuario ya se encuentra registrado";
                                          } 
                                            
                                                  
                                      } 

                                    }
                                  
                                }

                           }

                    }

                }
              } 
           }
        }   
      }
    } 

    
}?> 


<?php
require ("footer.ctp");
?>