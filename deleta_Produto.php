<?php


require_once("conectar.php");


if (isset($_GET['ID'])) {
    $conn = connectDB();
    $sql = "delete from produto where ID=".$_GET['ID'];
    $conn->query($sql);

    closeDB($conn);


    header('Location: ./Manutencao_Produtos.php');
}


?>