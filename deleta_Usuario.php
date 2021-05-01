<?php


require_once("conectar.php");


if (isset($_GET['Login']) ) {
    $conn = connectDB();
    $sql = "delete from usuario where Login='".$_GET['Login']."'";
    $conn->query($sql);

    closeDB($conn);


    header('Location: ./Manutencao_Usuarios.php');
}


?>