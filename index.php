<?php 
    include 'Controller/ControllerPessoa.php';

    $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($uri){
        case "/php-mvc/":
            echo "home";
            break;
        case "/php-mvc/pessoa":
            ControllerPessoa::index();
            echo($uri);
            break;
        case "/php-mvc/pessoa/save":
            ControllerPessoa::save();
            break;
        default:
            echo "Erro 404";
            break;
    }
?>