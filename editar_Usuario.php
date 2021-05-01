<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2ade677f6c.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once("conectar.php");

$conn = connectDB();

?>
<div id="pagina">
        <div id="topo_pagina">

            <span id="Titulo">
                <h3>Edição de Usuários</h3>
            </span>    
        </div>
        <br>
        <div id="conteudo-pagina">
            <form action="./edita_Usuario.php" method="GET">
                <input type="hidden" id="LoginAnterior" name="LoginAnterior" value="<?php echo $_GET['Login'] ?>"><br>
                <label for="Login">Login:</label><br>
                <input type="text" id="Login" name="Login" value="<?php echo $_GET['Login'] ?>"><br>
                <label for="Senha">Senha:</label><br>
                <input type="text" id="Senha" name="Senha" value="<?php echo $_GET['Senha'] ?>"><br><br>
                <input type="submit" class="edicao" value="Editar">
            </form> 

        </div>

    </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 <script src="js/index.js"></script>
</body>

</html>