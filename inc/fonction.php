<?php

    function authentification(){
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM admin")->fetchAll();
        return $data;
    }

    function lesActualites()
    {
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM listeActualite")->fetchAll();
        return $data;
    }

    function lesPays()
    {
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM pays")->fetchAll();
        return $data;
    }
    function insertActualite($idPays,$titre,$date,$apropos,$sary,$url) {   
        include('connexion.php'); 
        $requete = "INSERT INTO actualite (id_pays,tilte,daty,apropos,sary,url) VALUES (".$idPays.",'".$titre."','".$date."','".$apropos."','image/".$sary."','".$url."')";
        echo $requete;
        $res = $conn->prepare($requete);
        $exec = $res->execute();
    }
    function slugify($text) {
        $divider = '-';
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
    

?>