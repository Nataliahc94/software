<?php
require ("cabeza.ctp");
?>
<?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>
<div class="main-container">
        <article class="box" id="home_featured21">
            <div class="block"><h2>Registrar un Grupo de Apoyo</h2>

            			<h2>.</h2>
                <form action="" method="post" class="registro"> 
	                <div><label>Nombre:</label> 
	                    <input type="text" name="nombre"></div> 
	                <div><label>Direccion:</label> 
	                    <input type="text" name="direccion"></div> 
	                <div><label>Telefono:</label> 
	                    <input type="text" name="telefono"></div> 
	          		
	          	 	<input type="submit" name="enviar" value="Registrar"></div>
	            </form> 
	            </div>	 	
        </article>
       </div>

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
                $idgrupo=$_SESSION["idvariable"];
           
		    	
		    	 $consultaE = "INSERT INTO grupoapoyo(`idgrupoApoyo`, `nombre`, `direccion`, `telefono`, `ugrupoApoyo_idugrupoApoyo`, `listaFavoritos_idlistaFavoritos`) VALUES ('','$nombre','$direccion','$telefono',$idgrupo,null) ; ";
                             
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