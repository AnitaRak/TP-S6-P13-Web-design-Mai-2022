<?php

    include ('fonction.php');
    $id = $_GET['id'];
    delete($id);
    header('Location: crud.php');

?>