<?php


require_once("conectar.php");


if (isset($_GET['Login']) && isset($_GET['Senha']) ) {
    $conn = connectDB();
    $sql = "insert into usuario values ('".$_GET['Login']."','".$_GET['Senha']."');";
    $conn->query($sql);

    closeDB($conn);


    header('Location: ./Manutencao_Usuarios.php');
}


?>