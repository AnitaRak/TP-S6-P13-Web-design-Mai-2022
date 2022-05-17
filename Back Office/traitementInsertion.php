<?php
    include ('fonction.php');
    $idpays = $_POST['pays'];
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $apropos = $_POST['apropos'];
    $sary = $_FILES['sary']['name'];
    $url = slugify($titre);
    $content_dir = 'image/'; // dossier où sera déplacé le fichier
    $tmp_file = $_FILES['sary']['tmp_name'];
    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['sary']['name'];
 
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }
    echo "Le fichier a bien été uploadé";
    insertActualite($idpays,$titre,$date,$apropos,$sary,$url);
    header('Location: home.php');
?>
