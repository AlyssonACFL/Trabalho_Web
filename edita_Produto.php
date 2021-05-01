<?php


require_once("conectar.php");


if (isset($_GET['ID']) ) {
    $conn = connectDB();
    $sql = "update produto set Nome='".$_GET['Nome']."', Quantidade='".$_GET['Quantidade']."', Preco='".$_GET['Preco']."'  where ID='".$_GET['ID']."'";
    $conn->query($sql);


    closeDB($conn);


    header('Location: ./Manutencao_Produtos.php');
}


?>