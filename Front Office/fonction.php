<?php

    function authentification(){
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM admin")->fetchAll();
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
    
    function lesCauses()
    {
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM cause")->fetchAll();
        return $data;
    }

    function lesActualites()
    {
        include ("connexion.php");
        $data = $conn->query("SELECT * FROM listeActualite")->fetchAll();
        return $data;
    }

    function getActualite($id) {
        include('connexion.php'); 
        $data = $conn->query("SELECT * FROM listeActualite Where idactualite = " . $id)->fetchAll();
        return $data;
    }

    function delete($id){
        include('connexion.php'); 
        $requete = ("delete from actualite where id =".$id);
        echo $requete;
        $res = $conn->prepare($requete);
        $exec = $res->execute();
    }

    function modifierActualite($id,$id_pays,$tilte,$daty,$apropos,$sary,$url) {   
        include('connexion.php'); 
        $requete = "UPDATE actualite set id_pays = ".$id_pays." , tilte = '".$tilte."' , daty = '".$daty."' , apropos = '".$apropos."' , sary = 'image/".$sary."' , url = '".$url."' where id = ".$id;
        echo $requete;
        $res = $conn->prepare($requete);
        $exec = $res->execute();
    }

    function getUrl(){
        $pieces = explode("/", $_SERVER['REQUEST_URI']);
        $u = explode(".", $pieces[4]);
        $res = explode("-", $u[0]);
        $vraiURL = "";
        for ($i=0; $i <count($res) - 1 ; $i++) { 
            $vraiURL = $vraiURL."-".$res[$i];
        }
        $vraiURL = substr($vraiURL,1);
        return $vraiURL;
    }

    function urlTsMet($url){
        $listJ = lesActualites();
        $retour = 0;
        foreach($listJ as $lj){
            if($lj['url'] == $url){
                $retour = 1; 
            }else{
                $retour = 0;
            }

        }

        return $retour;

    }
    function creerHtml($idj){
        $url = getUrl();
        if(!file_exists($url.".html")){
            $listJ = getActualite($idj);
            foreach($listJ as $l){
                $titre = $l['tilte'];
                $Date = $l['daty'];
                $Pays = $l['nom'];
                $Contenu = $l['apropos'];
                $sary = $l['sary'];
            }
            
            $nom_file = $url.".html";
            $texte = "
            <div class='row'>
            <div class='col-md-2'></div>
            <div class='col-md-8'>
            <div class='card-deck'>
                <div class='card'>
                <img class='card-img-top' src='http://rechauffement-climatique/TP-S6-P13-Web-design-Mai-2022/Back%20Office/".$sary."' alt='Card image cap' width='180' height='180'>
                <div class='card-body'>
                <h5 class='card-title'>".$titre."</h5>
                <p class='card-text'>".$Contenu."</p>
                </div>
            </div>
            </div>
            <div class='col-md-2'></div>
            ";
            /*$texte = "
            <center>
            <h2>A propos de :".$titre."</h2>
            <p><Strong> Date : </Strong>".$Date."</p>
            <p><Strong> Pays : </Strong>".$Pays."</p>
            <p><Strong>Contenue : </Strong>".$Contenu."</p>
            <p><Strong>Image : </Strong>".$sary."</p>
            </center>";*/

            // création du fichier
            $f = fopen($nom_file, "x+");
            // écriture
            fputs($f, $texte );
            // fermeture
            fclose($f);
        }
        
    }
    

?>
    

?>