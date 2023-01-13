<?php

require_once "Manager.php";

class UserManager extends Manager{

    public function getUsers() {
        $bdd = $this->connection("localhost", "mvc", "root");
        $requete = $bdd->query('SELECT * FROM users');

        return $requete;
    }
}