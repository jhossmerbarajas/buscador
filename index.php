<?php

    require_once 'config/config.php';
    require_once 'conexion/Conexion.php';
    require_once 'search/Search.php';
    require_once 'views/header/header.php';

    $search = new Search;

    // Validando si el Formulario está enviando una variable POST (aplicar Filtro)
    if(isset($_POST['search'])) {
        
        $searchForm = $_POST['search'];
        $row = $search->getSearch($searchForm);

        require_once 'views/search.php';

    // Validación de Consulta (trae todos los datos de la base de Datos)
    } else if ($search->getConsult()) {
        
        $row = $search->getConsult();
        require_once 'views/home.php';
    
    } else {
        echo 'Error';
    }

?>