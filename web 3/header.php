<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMPORTADOS RP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">

<title>RIPA</title>
</head>
<body class="fondo">
    <header>
    <nav class="navbar navbar-expand-lg bg-light nav color ar">
  <div class="container-fluid">
    <a class="navbar-brand logo nav" href="">IMPORTADOS RP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php
            $menu=array();
            $menu ['Home']="index.php";
            $menu ['Productos']="productos.php"; 
            $menu ['Contacto']="contacto.php";
  
            foreach ($menu as $botones=>$link){
            echo "<li><a class='link nav int color listas tit' href=$link > $botones</a></li>";
              }; 
          ?>
      </ul>
    </div>
  </div>
    </nav>
    </header>
