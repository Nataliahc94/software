
<?php
require ("cabeza.ctp");
?>
  <div class="main-container">
            <div class="container1">
                <div id="breadcrumb">
                    <ul>
                        <li class="first">Esta aquí</li>
                        <li>&#187;</li>
                        <li><a href="../pages/home">Home</a></li>
                       
                        
                        <li>&#187;</li>
                        <li class="current"><a href="inicio">Login</a></li>
                    </ul>
                </div>
            </div>
        </div> 

    </body>
</html>
<div class="main-container">
    
 <?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>

   <article class="footbox last">
        <div id="social">
             <form action="" method="post" class="registro"> 
                <div><label>Nombre de Usuario:</label> 
                    <input type="text" name="nomUsuario"></div> 
                <div><label>Contraseña:</label> 
                    <input type="text" name="contraseña"></div> 
                <input type="submit" name="enviar" value="Ingresar"></div> 
            </form> 
        </div>
     </article>  
     <?php

            $nomUsuario=$_POST['nomUsuario']; 
            $contraseña=$_POST['contraseña']; 

          if($_POST['nomUsuario'] == '' or $_POST['contraseña'] == '' )
          {
                echo 'Por favor llene todos los campos.';//Si los campos están vacíos. 
          }
          else
          {

                 $consultaE = "SELECT tipo FROM uvictima WHERE nombreUsuario= '$nomUsuario'";                          
                 $tipoconsulta = mysql_query($consultaE); 

                 if(!$tipoconsulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                $fila=mysql_fetch_row($tipoconsulta);
                 
                 if($fila[0]==1)
                 {
                    echo "El usuario es Victima";// acá se hace el enlace para que pueda ingresar a los privilegios que tiene como usuario
                     echo $fila[0];

                 }
                 ///////////////////////////////////

                $consulta2 = "SELECT tipo FROM umedico WHERE nombreUsuario= '$nomUsuario'";                          
                 $tipo2consulta = mysql_query($consulta2); 

                 if(!$tipo2consulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                $fila2=mysql_fetch_row($tipo2consulta);
                 
                 if($fila2[0]==2)
                 {
                    echo "El usuario es Medico";// acá se hace el enlace para que pueda ingresar a los privilegios que tiene como usuario
                     echo $fila2[0];

                 }
                 //////////////////////////////////////
                  $consulta3 = "SELECT tipo FROM ugrupoapoyo WHERE nombreUsuario= '$nomUsuario'";                          
                 $tipo3consulta = mysql_query($consulta3); 

                 if(!$tipo3consulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                $fila3=mysql_fetch_row($tipo3consulta);
                 
                 if($fila3[0]==3)
                 {

                    $consultaid = "SELECT idugrupoApoyo FROM ugrupoapoyo WHERE nombreUsuario= '$nomUsuario'";                      
                 $tipo3consultaid = mysql_query($consultaid); 

                 if(!$tipo3consultaid)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                  $fila3id=mysql_fetch_row($tipo3consultaid);

                  
                  global $idgrupoapoyo;
                 $idgrupoapoyo = $fila3id[0];
                  echo $idgrupoapoyo;
                  session_start(); 

                $_SESSION["idvariable"] = $fila3id[0];
                  echo "<script language='JavaScript'>";                    
                  echo "location = '../grupoapoyos/inicio'"; 
                  echo "</script>"; 


                    echo "El usuario es Grupo de Apoyo";

                 }
                 ////////////////////////////////////////
                  $consulta4 = "SELECT tipo FROM utiendaprotesis WHERE nombreUsuario= '$nomUsuario'";                          
                 $tipo4consulta = mysql_query($consulta4); 

                 if(!$tipo4consulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                $fila4=mysql_fetch_row($tipo4consulta);
                 
                 if($fila4[0]==4)
                 {
                    echo "El usuario es Tienda Protesis";// acá se hace el enlace para que pueda ingresar a los privilegios que tiene como usuario
                     echo $fila4[0];

                 }
                 ///////////////////////////////////////////////
                 $consulta5 = "SELECT tipo FROM uempleador WHERE nombreUsuario= '$nomUsuario'";                          
                 $tipo5consulta = mysql_query($consulta5); 

                 if(!$tipo5consulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }
                $fila5=mysql_fetch_row($tipo5consulta);
                 
                 if($fila5[0]==5)
                 {
                    echo "El usuario es Empleador";// acá se hace el enlace para que pueda ingresar a los privilegios que tiene como usuario
                     echo $fila5[0];

                 }
                 else
                 {
                   // echo "No se encuentra registrado";
                    
                 }
          }
          ?>
          
<?php
require ("footer.ctp")
?>