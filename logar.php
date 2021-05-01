<?php
session_start();

require_once("conectar.php");

$conn = connectDB();

foreach($_POST as $key=>$value)
    $$key = $value;



$sql = "select * from usuario where Login='$login' and Senha='$senha';";
$datas = $conn->query($sql);
closeDB($conn);


if (mysqli_num_rows($datas) > 0) {
    $login = mysqli_fetch_array($datas);

    $_SESSION['login'] = $login;

    $_SESSION['seletor'] = 'P';

    header('Location: ./index.php');
}
else {
    header('Location: ./login.php?msg=login_fail');
}



?>
