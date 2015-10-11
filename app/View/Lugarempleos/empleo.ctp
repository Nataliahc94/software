<?php
require ("cabeza.ctp");
?>
<?php 
  session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; ?>
<div class="main-container">
        <article class="box" id="home_featured21">
            <div class="block"><h2>Registrar Empleo</h2>

            			<h2>.</h2>
                <form action="" method="post" class="registro"> 
	                <div><label>Titulo:</label> 
	                    <input type="text" name="titulo"></div> 
                    <div><label>Nombre del Lugar Empleo:</label> 
                        <input type="text" name="lugar"></div>     
	                <div><label>Descripcion:</label> 
	                   <p>
                            <textarea name="descripcion" id="comment" rows="3"></textarea>                            
                        </p>
	                <div><label>Requisitos:</label> 
	                     <p>
                            <textarea name="requisitos" id="comment" rows="3"></textarea>                            
                        </p>
                    </div> 
	          		
	          	 	<input type="submit" name="enviar" value="Registrar"></div>
	            </form> 
	            </div>	 	
        </article>
       </div>

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
                 	echo "el registro de grupo del Empleo Fue exitoso";
                 }

		    }
    ?>
<?php		    
require ("footer.ctp");
?>