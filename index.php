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
    <title>Início</title>
</head>
<body>
    <div class="container-fluid"; id="top_bar">
        
        <img src="images/logo.png" />
        
        <button id="btn-nav" onclick="btn_nav()">
            <span id="icon">
                <i class="fas fa-bars"></i>
            </span>
        </button>
        
        <a href="./logout.php">Sair</a>
    </div>

    <nav id="left-nav" class="nav-hide">
        <ul>
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                      </svg>
                    Início</a>
            </li>
            <li>

                <div class="dropright show">
                    <a class="dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-plus"></i>
                      Cadastro
                    </a>
                  
                    <div class="dropdown-menu" id="Dropdown" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="index.php">Produtos</a>
                      <a class="dropdown-item" href="index.php?pag='U'">Usuários</a>
                    </div>
                  </div>

            </li>
            <li>
                <a href="">
                    <i class="fas fa-cogs"></i>
                    Configurações</a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-cart-plus"></i>
                    Vendas</a>
            </li>
        </ul>
    </nav>

    <div class="iframe-container"><iframe loading="lazy" src=<?php 
        if(isset($_GET['pag'])=="U"){
            echo "./Manutencao_Usuarios.php";
        }else{           
            echo "./Manutencao_Produtos.php";
        }?>
    ></iframe></div>

    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 <script src="js/index.js"></script>
</body>

</html>