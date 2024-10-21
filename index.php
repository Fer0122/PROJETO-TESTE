<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <tittle>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
              
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
              include("config.php");
               switch(@$_REQUEST["page"]){
          case "novo":
           include("novo-cliente.php");
          break;
          case "listar":
             include("listar-clientes.php")
             ;
          break;
          case "salvar":
             include("salvar-clientes.php");
           break; 
           case "editar":
            include("editar-clientes.php");
            break;  
          default:
            print "<h1>Bem vindos!</h1>";
        }
    ?>    
             
        </div>  
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></
    script>

  </body>
</html>
