<?php
    session_start();
    include("conexion.php");
    //Recibir los datos del formulario
    $Email = $_POST["form-ingreso-email"];
    $Pass = $_POST["form-ingreso-password"];
    //Consultar Usuarios
    $Cons_Usuario = mysqli_query($conexion, "SELECT * FROM sesion WHERE Email = '$Email' AND Pass = '$Pass'");
    $Contar = $Cons_Usuario->num_rows;
    if($Contar==1){
        $_SESSION['In_User'] = '$Email';
        header("Location: ../deskop.php");
    }
    else{
        echo "<script type='text/javascript'>
	    alert('Credenciales Incorrectas');
        window.open('../index.php','_self');
	    </script>";
        exit;
    }
?>