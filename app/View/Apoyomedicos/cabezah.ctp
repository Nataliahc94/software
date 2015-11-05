   <html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8"/>
   
       <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.min.css">
   <link rel="stylesheet" href="css/main.css">  
    <script src="js/modernizr.js"></script>
    <link rel="shortcut icon" href="favicon.png" >


<body>
  

    <div class="row">

          <nav id="nav-wrap">         
             
             <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class="menu-icon">Menu</span>
             </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class="menu-icon">Menu</span>
            </a>
    <?php
    session_start(); 
    include_once "conexion.php"; 
    $idvictima=$_SESSION["idvictima"];
    ?>
        <ul id="nav" class="nav" >
                     <?php
                        
                        $idvictima=$_SESSION["idvictima"];
                        $consultaid1 = "SELECT nombreUsuario FROM `uvictima` WHERE iduvictima='$idvictima'";                      
                        $tipo1consultaid = mysql_query($consultaid1); 

                     if(!$tipo1consultaid)
                     {
                        echo "No se pudo ejecutar la consulta";
                     }
                      $fila1id=mysql_fetch_row($tipo1consultaid);
                        $nombreUsuario = $fila1id[0];
                        echo $nombreUsuario;
                        ?> 
                       <li><a class="smoothscroll" href="../pages/home">CERRAR SESIÓN.</a></li>           
             </li>
               
             </ul> <!-- end #nav -->

          </nav> <!-- end #nav-wrap -->

             

       </div>

  <section id="hero"> 
      
 
    <!-- insertar una imagen-->

   </section> <!-- end homepage hero -->
         

<header id="main-header">
    <div class="row">

          <div class="logo">
             <a href="../pages/home"></a>
          </div>

          <nav id="nav-wrap">         
             
             <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class="menu-icon">Menu</span>
             </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class="menu-icon">Menu</span>
            </a>            

             <ul id="nav" class="nav">
                <li ><a class="smoothscroll" href="#home">Home</a></li>
                 <li ><a class="smoothscroll" href="../protesis/indexpro">Protesis.</a>
                        
                 </li>
                <li class="current"><a class="smoothscroll" href="../apoyomedicos/apoyomedico">Apoyo Medico.</a></li>
                <li><a class="smoothscroll" href="../grupoapoyos/indexu">Apoyo Psicologico.</a></li>                      
                <li><a class="smoothscroll" href="../empleos/indexu">Buscar Empleo.</a></li>
                <li><a class="smoothscroll" href="../pages/quineness1">Quienes Somos.</a></li>
                <li><a class="smoothscroll" href="../listafavoritos/add">Lista Favoritos.</a></li>
             </ul> <!-- end #nav -->

          </nav> <!-- end #nav-wrap -->

          <ul class="header-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>      

       </div>

  </header> <!-- end header --> 


        

</body>