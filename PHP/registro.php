<?php
    include("conexion.php");
    //Recibir los datos del formulario
    $T_User = $_POST["form-c-cuenta-t-cuenta"];
    $T_Iden = $_POST["form-c-cuenta-t-identificacion"];
    $Identi = $_POST["form-c-cuenta-identificacion"];
    $Email = $_POST["form-c-cuenta-email"];
    $Pass = $_POST["form-c-cuenta-password"];
   //Consultar duplicidad
   $Duplicidad = mysqli_query($conexion, "SELECT * FROM sesion WHERE Identificacion = '$Identi'");
   if(mysqli_num_rows($Duplicidad) > 0){
       echo "<script type='text/javascript'>
       alert('El Usuario ya existe');
       window.open('index.php','_self');
       window.history.go(-1);
       </script>";
       exit;
   }
    //Consultar para insertar
    $Resul = mysqli_query($conexion, "INSERT INTO sesion (T_Usuario,T_Identificacion,Identificacion,Email,Pass,Fecha)VALUES('$T_User','$T_Iden','$Identi','$Email','$Pass',now())");
    if(!$Resul){
        echo "Error al Registrarse";
    }
    else{
        echo "<script type='text/javascript'>
	    alert('Registro Exitoso');
	    window.open('index.php','_self');
        window.open('../index.php','_self');
	    </script>";
        exit;
    }
    //Cerrar Conexion
    mysqli_close($conexion);
?>