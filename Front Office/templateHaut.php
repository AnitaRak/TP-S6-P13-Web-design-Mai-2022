<?php
    include ('fonction.php');
    $listP = lesPays();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Rechauffement climatique</title>
    <div id="container">
        <nav>
            <div id="logo">
              Climat
            </div>
            <ul>
              <li><a href="http://rechauffement-climatique/rechauffement-climatique/acceuil.php">Home</a></li>
              <li><a href="http://rechauffement-climatique/rechauffement-climatique/actualité">Actualités</a></li>
              <li class="dropdown" onmouseover="hover(this);" onmouseout="out(this);"><a href="#">Pays &nbsp;<i class="fa fa-caret-down"></i></a>
                <div class="dd">
                  <div id="up_arrow"></div>
                <ul>
                    <?php foreach($listP as $t) {  ?>
                        <li><a href="#"><?php echo $t['nom']; ?></a></li>
                    <?php } ?>
                </ul>
                </div>
              </li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown"><a href="#">Others &nbsp;<i class="fa fa-caret-down"></i> </a>
               <div class="dd">
                 <div id="u_a_c"><div id="up_arrow"></div></div>
                <ul>

                  <li><a href="#">DOCS</a></li>
                  <li><a href="#">API</a></li>
                  <li><a href="#">PROJECTS</a></li>
                </ul>
                </div>
            </ul>
      </nav>
    </div>
</head>
<body>