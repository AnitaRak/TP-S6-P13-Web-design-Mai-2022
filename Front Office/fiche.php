<?php include 'templateHaut.php';?>
<?php
    
    date_default_timezone_set('Africa/Nairobi');
    setlocale(LC_TIME, "fr_FR", "French");
    $idj = $_GET['id'];
    $listJ = getActualite($idj);
    foreach($listJ as $li){
        $date = utf8_encode(strftime("%d %B %Y", strtotime($li['daty'])));
    }
    $vraiURL = getUrl();
    $ts = urlTsMet($vraiURL);

?>
<?php 
    if($ts == 1) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $listJ['tilte'] ?></title>
</head>
<body>
    <?php
        $nom_fichier =$vraiURL.".html";
        if(file_exists($nom_fichier)){
            require($vraiURL.".html");
        } else{
            creerHtml($idj);
            require($vraiURL.".html");
        }
    ?>
</body>
</html>
<?php
    }else{
        header('HTTP/1.0 404 Not Found');
        die;
    }
?>
<?php include 'templateBas.php'; ?>