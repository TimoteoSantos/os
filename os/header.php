<html lang="en">
  <?php  
  $_SESSION['loja'] = 'MATRIZ';
  $loja = $_SESSION['loja'];
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="recourse/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>

<main>

<header> <a href="index.php"> <img src='img/logo.png' width= '60px'> </a> SISTEMA DE OS INTERNA 

<nav> 

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
   
    <div class="collapse cor_braca navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
         <!-- <a class="nav-link active" aria-current="page" href="#">Inicio</a> -->
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            OS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"href="Cadastrar_ordens.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Relatórios</a></li>
           
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dispositivos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Relatórios</a></li>
           
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>






    

    
    
    
    
    
    
    

 </nav>

</header>


