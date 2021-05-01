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
                <h3>Manutenção de Usuários</h3>
            </span>    
        </div>

        <div id="menu-pagina">
            <div class="Half-row">
                <div id="Resumo">
                    <p>Total de usuários: &nbsp
                    <?php
                        $sql = "select count(1) as total From usuario";
                        $datas = $conn->query($sql);
                        
                        $row=mysqli_fetch_array($datas);

                        echo $row['total'];
                    ?>
                    </p>
                </div>
            </div>
            <div id="Acoes" class="Half-row">
                <a href=".\cria_Usuario.php"><button class="inclusao">NOVO</button></a>
            </div>
        </div>
        <br>
        <div id="conteudo-pagina">
            <table class="table">
                <thead>
                    <tr>
                        <th id="col1">Login</th>
                        <th id="col2">Senha</th>
                        <th id="col3"> </th>
                        <th id="col4"> </th>
                    </tr>                                                                       
                </thead>
                    <tbody>
                    
                    <?php
                        
                        

                        $sql = "select Login,Senha From usuario";

                        $datas = $conn->query($sql);

                        while($row = mysqli_fetch_array($datas)) { ?>
                            <tr>
                                <td><?php echo $row['Login'] ; ?></p></td>
                                <td><?php echo $row['Senha'] ; ?></td>
                                <td>

                                    <button class="edicao" >
                                        <a href="editar_Usuario.php?Login=<?php echo $row['Login']?>&Senha=<?php echo $row['Senha']?>">
                                            EDITA
                                        </a>
                                    </button>

                                <td>


                                    <button class="exclusao" >
                                        <a href="deleta_Usuario.php?Login=<?php echo $row['Login']?>">
                                        EXCLUIR
                                        </a>
                                    </button>
                                    
                                </td>
                            </tr>    
                        <?php    
                        }
                        
                        closeDB($conn);
                        ?>
                </tbody>
            </table>
        </div>

    </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 <script src="js/index.js"></script>
</body>

</html>