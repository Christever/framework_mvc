<?php

//* Controller
require "controllers/controller.php";

try {
    if (isset($_GET["page"])){
        if ($_GET["page"] == "accueil"){
            home();
        }
        else {
            require "views/404.php";
        }
    }
    else {
        home();
    }
}
catch (Exception $e){
    $error = $e->getMessage();
    require "views/error.php";
}