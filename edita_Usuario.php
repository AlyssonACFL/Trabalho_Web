<?php


require_once("conectar.php");


if (isset($_GET['LoginAnterior']) ) {
    $conn = connectDB();
    $sql = "update usuario set Login='".$_GET['Login']."', Senha='".$_GET['Senha']."' where Login='".$_GET['LoginAnterior']."'";
    $conn->query($sql);

    closeDB($conn);


    header('Location: ./Manutencao_Usuarios.php');
}


?>