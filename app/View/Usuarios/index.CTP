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
                        <li class="current"><a href="index">Registro</a></li>
                    </ul>
                </div>
            </div>
        </div> 



    <?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>

   <article class="footbox last">
        <div id="social">
             <form action="" method="post" class="registro"> 
                <div><label>Nombre:</label> 
                    <input type="text" name="usuario"></div> 
                <div><label>Email:</label> 
                    <input type="text" name="email"></div> 
                <div><label>Ciudad:</label> 
                    <input type="text" name="ciudad"></div> 
                <div><label>Departamento:</label> 
                    <input type="text" name="departamento"></div> 
                <div><label>Nombre de Usuario:</label> 
                    <input type="text" name="NomUsuario"></div> 
                <div><label>Contraseña :</label> 
                    <input type="text" name="contraseña"></div> 
                <div><label>Repita Contraseña :</label> 
                    <input type="text" name="repContraseña"></div> 

                     <label> Seleccione el tipo de usuario</label>
                        <select name="opcion" id="numtexts" onchange="crear(this.value)">
                            <option value="0">Seleccionar</option>
                            <option value="1">Victima</option>
                            <option value="2">Medico</option>
                            <option value="3">Grupo de Apoyo</option>
                            <option value="4">Tienda de Protesis</option>
                            <option value="5">Empleador</option>
                        </select>
                        <div id="contenedor"></div>

                <input type="submit" name="enviar" value="Registrar"></div> 
            </form> 
        </div>
     </article>       


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
                $consultaE = "SELECT email FROM usuario WHERE email = '$email' ";
                             
                 $emailconsulta = mysql_query($consultaE); 

                 if(!$emailconsulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }

               
                 $fila=mysql_fetch_row($emailconsulta);
                 echo $fila[0];

           if($fila[0]!=$email) 
        { 
           
  
             if($_POST['contraseña'] == $_POST['repContraseña'])
             {
               mysql_query("INSERT into usuario values ('','$nombre','$email','$ciudad','$
                departamento'); "); 

                

                  if( $_POST['opcion']=="1")
                  {
                         echo "Opcion 1";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO uvictima VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '1') ;");
                                  echo 'Este usuario se ha registrado exitosamente.'; 

                             }

             
                  }
                   if( $_POST['opcion']=="2")
                  {
                         echo "Opcion 2";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO umedico VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '2') ;");
                             }

             
                  }
                   if( $_POST['opcion']=="3")
                  {
                         echo "Opcion 3";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO ugrupoapoyo VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '3') ;");
                             }

             
                  }
                    if( $_POST['opcion']=="4")
                  {
                         echo "Opcion 4";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO utiendaprotesis VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '4') ;");
                             }

             
                  }
                       if( $_POST['opcion']=="5")
                  {
                         echo "Opcion 5";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO uempleador VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '5') ;");
                             }

             
                  }



                
                




             }
             else
             {
                echo "Las contraseñas no coinciden";
             }
         }
        else 
        {  
            
             echo "Ya se encuentra registrado";
        } 
          
                
    } 

}?> 


<?php
require ("footer.ctp");
?>