<?php
    include ('fonction.php');
    $listP = lesPays();
    $id = $_GET['id'];
    $ac= getActualite($id)
    
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
              <li><a href="https://echauffement-climatique.herokuapp.com/index.php"></a></li>
              <li><a href="https://echauffement-climatique.herokuapp.com/Back%20Office/crud.php">Actualités</a></li>
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
      <center><h1>Modification </h1></center>
    </div>
    <div class="form-content">
      <form action="traitementModification.php" method=post enctype='multipart/form-data'>
        <?php foreach($ac as $a) {  ?>
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
            <input type="text"  name="titre"  placeholder="<?php echo $a['tilte']; ?>"/>
            </div>
            <div class="form-group">
            <label>Date</label>
            <input type="text"  name="date"  placeholder="<?php echo $a['daty']; ?>"/>
            </div>
            <div class="form-group">
            <label>A propos</label>
            <input type="text"  name="apropos" placeholder="<?php echo $a['apropos']; ?>" />
            </div>
            <div class="form-group">
            <label >Image</label>
            <input type="file"  name="sary" />
            <input type="hidden"  name="id"  value="<?php echo $a['idactualite']; ?>"/>
            </div>
            <div class="form-group">
            <button type="submit" onclick="myFunction()" >Modifier</button>
            </div>
        <?php } ?>
      </form>

    </div>
  </div>
    <script>
        function myFunction() {
        confirm("Voulez-vous vraiment modifier ces champs ?");
        }
    </script>
</body>
<div>
<p class="text-center">Copyright @Mini-projet | Designed With by <a href="#">Anita</a></p>
</div>
</footer>
</html>