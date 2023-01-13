<?php

require_once "models/UserManager.php";
function home(){

    $user = new UserManager();
    $requete = $user->getUsers();

    require "views/home.php";
}