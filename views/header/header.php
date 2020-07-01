<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- 
      -- Así de debe enlazar los estilos cuando no se usa una CDN de algún Framework.
      -- Esa es la Ruta que uso. Empezando con la carpeta "public" en la raíz del proyecto
     -->
    <!-- <link rel="stylesheet" href="public/style/bootstrap.min.css"> -->

    <!-- CDN de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Navbar</span>

  <form class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>