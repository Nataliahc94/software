<?php
require ("cabeza.ctp");
?>
<?php 
  session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>
<div class="main-container">
        <article class="box" id="home_featured21">
            <div class="block"><h2>Registrar Protesis</h2>

            			<h2>.</h2>
                <form action="" method="post" class="registro"> 
	                <div><label>Tipo:</label> 
	                    <input type="text" name="tipo"></div> 
                    <div><label>Material:</label> 
                        <input type="text" name="material"></div>  
                    <div><label>Tamaño:</label> 
                        <input type="text" name="tamaño"></div> 
                    <div><label>Precio:</label> 
                        <input type="text" name="precio"></div>              
                    <div><label>Nombre del Lugar Protesis:</label> 
                        <input type="text" name="lugar"></div>      
	               
	          		
	          	 	<input type="submit" name="enviar" value="Registrar"></div>
	            </form> 
	            </div>	 	
        </article>
       </div>

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