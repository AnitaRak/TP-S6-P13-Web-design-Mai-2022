<?php
    include ('fonction.php');
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $admin = authentification();
    foreach($admin as $a){
        if($email == $a['email'] && $mdp == $a['mdp']){
            header('Location: home.php');
        }else
        header('Location: index.php');
    }
    //var_dump($admin);
?>