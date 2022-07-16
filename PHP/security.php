<?php
    session_start();
    if ($_SESSION["In_User"] != '$Email') {
        header("Location: ../index.php");
    }
?>