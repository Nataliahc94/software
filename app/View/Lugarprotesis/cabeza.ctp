   <title>APOYO a las victimas de minas antipersonas | Home</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles/style.css" type="text/css"/>
    <link rel="stylesheet" href="styles/prettyphoto.css" type="text/css"/>
    <link rel="stylesheet" href="styles/totop.css" type="text/css"/>


<body>
    <?php
    session_start(); 
    include_once "conexion.php"; 
    $idvictima=$_SESSION["idtprotesis"];
    ?>
        
             <div id="nav-container">
                <head>
                     <?php
                        
                        $idtprotesis=$_SESSION["idtprotesis"];
                        $consultaid1 = "SELECT nombreUsuario FROM `utiendaprotesis` WHERE idutiendaProtesis ='$idtprotesis'";      

                        $tipo1consultaid = mysql_query($consultaid1); 

                     if(!$tipo1consultaid)
                     {
                        echo "No se pudo ejecutar la consulta";
                     }
                      $fila1id=mysql_fetch_row($tipo1consultaid);
                        $nombreUsuario = $fila1id[0];
                        echo $nombreUsuario;
                        ?> 
                        <a href="">|</a> 
                    <a href="./index" >Registrar Lugar Protesis</a>
                    <a href="">|</a>
                    <a href="./protesis">Regsitar Protesis</a>
                    <a href="">|</a>
                    <a href="../pages/home">CERRAR SESIÓN</a>
                </head>
            </div>
         
<div class="main-container">
    <header>
        <h1><a href="../pages/home">Apoyo a las victimas</a></h1>

        <p id="tagline"><strong>del conflicto armado</strong></p>
    </header>
</div>

<div class="main-container">
    <div id="sub-headline">
        <div class="tagline_left"><p id="tagline2">Tel: 314 893 4781 | Mail: <a >apoyoavictimasdeminas@gmail.com</a>
        </p></div>
        <div class="tagline_right">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"
                           onfocus="if (this.value == 'Search Our Website&hellip;') {this.value = '';}"
                           onblur="if (this.value == '') {this.value = 'Search Our Website&hellip;';}"/>
                    <input type="submit" name="go" id="go" value="Search"/>
                </fieldset>
            </form>
        </div>
        <br class="clear"/>
    </div>
</div>
<div class="main-container">
    <div id="nav-container">
        <nav>
            <ul class="nav">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="../protesis/indexpr">Protesis</a>
                    <ul>
                        <li><a href="#">Cauca</a>
                            <ul>
                                <li><a href="direccion">Popayan</a>
                                </li>
                            </ul>
                        <li><a href="direccon">Antioquia</a>
                            <ul>
                                <li><a href="direccion">Medellin</a>
                                </li>
                            </ul>
                        <li><a href="direccon">Valle</a>
                            <ul>
                                <li><a href="direccion">Cali</a>
                                </li>
                            </ul>    
                        <li><a href="direccon">Caqueta</a>
                            <ul>
                                <li><a href="direccion">Florencia</a>
                                </li>
                            </ul>
                        <li><a href="direccon">Nariño</a>
                            <ul>
                                <li><a href="direccion">Pasto</a>
                                </li>
                            </ul>
                        <li><a href="direccon">N. de Santander</a>
                            <ul>
                                <li><a href="direccion">Cucuta</a>
                                </li>
                            </ul> 
                        <li><a href="direccon">Huila</a>
                            <ul>
                                <li><a href="direccion">Neiva</a>
                                </li>
                            </ul> 
                        <li><a href="direccon">Arauca</a>
                            <ul>
                                <li><a href="direccion">Arauca</a>
                                </li>
                            </ul> 
                        <li><a href="direccon">Putumayo</a>
                            <ul>
                                <li><a href="direccion">Mocoa</a>
                                </li>
                            </ul>                    
                    </ul>
                </li>
                <li class="last"><a href="contact.php">Quienes Somos</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>
</body>