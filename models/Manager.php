<?php

class Manager {
    protected function connection ($host, $dbname, $user, $password="") {
        try {
            $bdd = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8", $user, $password);
        }
        catch (Exception $e) {
            throw new Exception("Erreur : " . $e->getMessage());
            
        }
        return $bdd;
    }
}