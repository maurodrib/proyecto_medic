<?php
    include("PHP/security.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>USCO-MEDIC</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scalable=1.0, minimum-scalable=1.0">
		<meta name="description" content="Sistema de información de servicios médicos prestados">
		<meta name="keywords" content="Sistema de información de servicios médicos prestados">
		<meta name="author" content="Maurodrib, Mauricio Rodríguez Bravo">
		<link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" href="css/generic.css" type="text/css">
		<link rel="stylesheet" href="css/deskop.css" type="text/css">
		<link rel="stylesheet" href="css/resolution.css" type="text/css">
		<script src="libraries/jquery.min-v3.4.1.js"></script>
		<script src="js/security.js"></script>
		<script src="js/configuration.js"></script>
	</head>
	<body>
        <header>
            <h1>Sistema de información de servicios médicos</h1>
            
        </header>
        <main>
            <section id="Menu_Lateral">
                <div id="Div_Avatar">
                    <img class="img-avatar" src="img/avatar.jpg" alt="">
                    <h2 class="Deskop_Titulos">Mauricio Rodriguez Bravo</h2>
                </div>
                <nav class="nav_menu">
                    <ul class="ul-menu">
                        <li><a href="deskop.php"> Inicio</a></li>
                        <li><a href="javascript:winUsuario"> Usuarios</a></li>
                        <li><a href=""> Contabilidad</a></li>
                        <li><a href=""> Consultorios</a></li>
                        <li><a href=""> Citas Médicas</a></li>
                        <li><a href=""> Historia Clinica</a></li>
                        <li><a href=""> Medicamentos</a></li>
                        <li><a href=""> Configuración</a></li>
                        <li><a href="PHP/salir.php">Salir</a></li>
                    </ul>
		        </nav>
                <small id="footer-deskop"> Mauricio Rodríguez B | @Maurodrib &copy; <?php echo date ("Y");?></small>
            </section>
            <div class="logo">
                <img src="img/logo.png" width="40%">
                <dialog id="windows">
                   modal = windows
                   

                </dialog>
            </div>
        </main>
    </body>
</html>