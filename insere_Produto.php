<?php


require_once("conectar.php");


if (isset($_GET['Nome']) ) {
    $conn = connectDB();
    $sql = "insert into produto (`ID`, `Nome`, `Quantidade`, `Preco`) values (NULL,'".$_GET['Nome']."','".$_GET['Quantidade']."','".$_GET['Preco']."');";
    $conn->query($sql);

    closeDB($conn);


    header('Location: ./Manutencao_Produtos.php');
}


?>