<?php
require ("cabeza.ctp");
?>

 <section id="portfolio">

      <div class="row section-head">

        <div class="twelve columns">

          <h1 id="listafv">Lista de Favoritos<span>.</span></h1>

           <hr id="lis"/>               


        <?php
            session_start(); 
            include_once "conexion.php"; 
            $idvictima=$_SESSION["idvictima"];
       

 
                    // Inicio Consulta de la lista de favoritos de protesis

                      $consulta = " Select  protesis.tipo, protesis.material, protesis.precio, protesis .lugarProtesis_idlugarProtesis From  protesis 
                                      Inner join   listafavoritos  
                                       On  protesis.idprotesis = listafavoritos.idProtesis_listafav
                                               WHERE listafavoritos.tipo= 4 and listafavoritos.idusuario = '$idvictima'; ";
                       
                                   
                           $idconsulta = mysql_query($consulta); 

                           if(!$idconsulta)
                           {
                              echo "No se pudo ejecutar la consulta";
                           }
                           else
                           {
                               $fila=mysql_fetch_row($idconsulta);
                           }
                           

                          //Fin de la consulta de la protesis en la lista de favoritos  

                         $idlugar= $fila[3];  
                        $consultaid2 = "SELECT nombre FROM lugarprotesis WHERE idlugarProtesis='$idlugar'";     

                         $tipo2consultaid = mysql_query($consultaid2); 

                         if(!$tipo2consultaid)
                         {
                            echo "No se pudo ejecutar la consulta 2";
                         }
                          $fila2id=mysql_fetch_row($tipo2consultaid);
                          $lugar = $fila2id[0];  



                          //  Inicio de la consulta de lista de favoritos Apoyo Medico

                            $consultaApoyoM = " Select  apoyomedico.especialista, apoyomedico.nombre, apoyomedico.direccion, apoyomedico.telefono  
                                      From  apoyomedico 
                                          Inner join   listafavoritos  
                                              On  apoyomedico.idapoyoMedico = listafavoritos.idApoyoMedico_fav
                                                  WHERE listafavoritos.tipo= 2 and listafavoritos.idusuario = '$idvictima'; ";
                       
                                   
                           $ApoyoMCconsulta = mysql_query($consultaApoyoM); 

                           if(!$ApoyoMCconsulta)
                           {
                              echo "No se pudo ejecutar la consultaApoyoM";
                           }
                           else
                           {
                               $ResultadoApoyoM=mysql_fetch_row($ApoyoMCconsulta);
                           }


                          //Fin de la consulta de Apoyo Medico en la lista de Fav     




                           //  Inicio de la consulta de lista de favoritos Apoyo Psicologico

                            $consultaGrupoA = " Select  grupoapoyo.nombre, grupoapoyo.direccion, grupoapoyo.telefono
                                      From  grupoapoyo 
                                          Inner join   listafavoritos  
                                              On  grupoapoyo.idgrupoApoyo= listafavoritos.idgrupoApoyo_fav
                                                  WHERE listafavoritos.tipo= 3 and listafavoritos.idusuario = '$idvictima'; ";
                       
                                   
                           $GrupoACconsulta = mysql_query($consultaGrupoA); 

                           if(!$GrupoACconsulta)
                           {
                              echo "No se pudo ejecutar la consultaGrupoA";
                           }
                           else
                           {
                               $ResultadoGrupoA=mysql_fetch_row($GrupoACconsulta);
                           }


                          //Fin de la consulta de Apoyo Medico en la lista de Fav     


                           //  Inicio de la consulta de lista de favoritos buscar empleo

                            $consultaEmple = " Select  empleo.titulo, empleo.descripcion, empleo.requisitos, empleo.lugarEmpleo_idlugarEmpleo
                                      From  empleo 
                                          Inner join   listafavoritos  
                                              On empleo.idempleo= listafavoritos.idempleo_fav
                                                  WHERE listafavoritos.tipo= 5 and listafavoritos.idusuario = '$idvictima'; ";
                       
                                   
                           $EmpleoCconsulta = mysql_query($consultaEmple); 

                           if(!$EmpleoCconsulta)
                           {
                              echo "No se pudo ejecutar la consultaEmple";
                           }
                           else
                           {
                               $ResultadoEmpleo=mysql_fetch_row($EmpleoCconsulta);
                           }


                          //Fin de la consulta de Apoyo Medico en la lista de Fav     
                          $idestable= $ResultadoEmpleo[3];  
                        $consulta3 = "SELECT nombre FROM lugarempleo WHERE idlugarEmpleo='$idestable'";     

                         $consultaa3 = mysql_query($consulta3); 

                         if(!$consultaa3)
                         {
                            echo "No se pudo ejecutar la consulta 2";
                         }
                          $lugarempleop=mysql_fetch_row($consultaa3);
                          $lugaremple = $lugarempleop[0];                
            ?>


           <!-- Inicio de la tabla Protesis - Lista de Fav -->
            <table cellspacing="0" cellpadding="0" > 


                 <h2>Prótesis<span>.</span></h2>

                  <hr /> 


                 <thead>                 
                <tr>
                  <td style="border: none;"><p>Lugar</p></td>
                  <td style="border: none;"><?php echo $lugar; ?>&nbsp;</td> 
                </tr>
                <tr style="border: none;">
                    <td style="width: 277px;border: none;"><p>Tipo </p></td>
                    <td style="border: none;"><?php echo $fila[0]; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td style="border: none;"><p>Material</p></td>
                  <td style="border: none;"><?php echo $fila[1]; ?>&nbsp;</td> 
                </tr>
                <tr>
                  <td style="border: none;"><p>Precio</p></td>
                  <td style="border: none;"><?php echo $fila[2]; ?>&nbsp;</td> 
                </tr>
                <tr>
                      <td style="padding-bottom: 18px;border: none;"></td>
                </tr> 
                <tr>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                </tr>
                </thead>
              
          </table>

          <!-- Fin de la tabla Protesis - Lista de Fav -->

           <!-- Inicio de la tabla Apoyo Medico - Lista de Fav -->
            <table cellspacing="0" cellpadding="0" > 


                 <h2>Apoyo Medico<span>.</span></h2>

                  <hr /> 


                 <thead>                 
                <tr>
                  <td style="border: none;"><p>Especialista</p></td>
                  <td style="border: none;"><?php echo $ResultadoApoyoM[0]; ?>&nbsp;</td> 
                </tr>
                <tr style="border: none;">
                    <td style="width: 277px;border: none;"><p>Nombre </p></td>
                    <td style="border: none;"><?php echo $ResultadoApoyoM[1]; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td style="border: none;"><p>Dirección </p></td>
                  <td style="border: none;"><?php echo $ResultadoApoyoM[2]; ?>&nbsp;</td> 
                </tr>
                <tr>
                  <td style="border: none;"><p>Telefono</p></td>
                  <td style="border: none;"><?php echo $ResultadoApoyoM[3]; ?>&nbsp;</td> 
                </tr>
                <tr>
                      <td style="padding-bottom: 18px;border: none;"></td>
                </tr> 
                <tr>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                </tr>
                </thead>
              
          </table>

          <!-- Fin de la tabla apoyo Medico - Lista de Fav -->


          <!-- Inicio de la tabla Grupo de Apoyo - Lista de Fav -->
            <table cellspacing="0" cellpadding="0" > 


                 <h2>Apoyo Psicológico<span>.</span></h2>

                  <hr /> 


                 <thead>                 
                <tr>
                  <td style="border: none;"><p>Nombre</p></td>
                  <td style="border: none;"><?php echo $ResultadoGrupoA[0]; ?>&nbsp;</td> 
                </tr>
                <tr style="border: none;">
                    <td style="width: 277px;border: none;"><p>Dirección </p></td>
                    <td style="border: none;"><?php echo $ResultadoGrupoA[1]; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td style="border: none;"><p>Telefono</p></td>
                  <td style="border: none;"><?php echo $ResultadoGrupoA[2]; ?>&nbsp;</td> 
                </tr>
               
                <tr>
                      <td style="padding-bottom: 18px;border: none;"></td>
                </tr> 
                <tr>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                </tr>
                </thead>
              
          </table>

          <!-- Fin de la tabla grupo de apoyo - Lista de Fav -->


           <!-- Inicio de la tabla Buscar emploe - Lista de Fav -->
            <table cellspacing="0" cellpadding="0" > 


                 <h2>Empleos Disponibles<span>.</span></h2>

                  <hr /> 


                 <thead> 
                <tr>
                  <td style="border: none;"><p>Establesimiento</p></td>
                  <td style="border: none;"><?php echo $lugaremple; ?>&nbsp;</td> 
                </tr>                 
                <tr>
                  <td style="border: none;"><p>Título</p></td>
                  <td style="border: none;"><?php echo $ResultadoEmpleo[0]; ?>&nbsp;</td> 
                </tr>
                <tr style="border: none;">
                    <td style="width: 277px;border: none;"><p>Descripción </p></td>
                    <td style="border: none;"><?php echo $ResultadoEmpleo[1]; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td style="border: none;"><p>Requisitos</p></td>
                  <td style="border: none;"><?php echo $ResultadoEmpleo[2]; ?>&nbsp;</td> 
                </tr>
                
               
                <tr>
                      <td style="padding-bottom: 18px;border: none;"></td>
                </tr> 
                <tr>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                      <td style="border-top: 2px solid #FDC501;padding-bottom: 20px;border-right: none;border-left: none;"></td>
                </tr>
                </thead>
              
          </table>

          <!-- Fin de la tabla empleo - Lista de Fav -->

        </div>

      </div>
       
     </section> 

<?php
require ("footer.ctp");
?>    