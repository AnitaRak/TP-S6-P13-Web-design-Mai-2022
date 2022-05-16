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
    <link href="style1.css" rel="stylesheet">
    <title>Rechauffement climatique</title>
    <div id="container">
        <nav>
            <div id="logo">
                Admin
            </div>
            <ul>
              <li><a href="http://rechauffement-climatique/TP-S6-P13-Web-design-Mai-2022/Back%20Office/home.php">Home</a></li>
              <li><a href="http://rechauffement-climatique/TP-S6-P13-Web-design-Mai-2022/Back%20Office/crud.php">Actualités</a></li>
              <li><a href="http://rechauffement-climatique/TP-S6-P13-Web-design-Mai-2022/Back%20Office/index.php">Deconnexion</a></li>
            </ul>
      </nav>
    </div>
</head>
<body>

<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <center><h1>Actualités Rechauffement climatique </h1></center>
    </div>
    <div class="form-content">
      <form action="traitementInsertion.php" method=post enctype='multipart/form-data'>
        <div class="form-group">
          <label for="username">Pays</label>
          <select class="custom-select" name="pays">
            <?php foreach($listP as $t) {  ?>
                <option value="<?php echo $t['id']; ?>"><?php echo $t['nom']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Titre</label>
          <input type="text" id="password" name="titre" required="required"/>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" id="password" name="date" required="required"/>
        </div>
        <div class="form-group">
          <label>A propos</label>
          <input type="text" id="password" name="apropos" required="required"/>
        </div>
        <div class="form-group">
          <label >Image</label>
          <input type="file" id="password" name="sary" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Enregistrer</button>
        </div>
      </form>

    </div>
  </div>
</body>
<div>
<p class="text-center">Copyright @Mini-projet | Designed With by <a href="#">Anita</a></p>
</div>
</footer>
</html>