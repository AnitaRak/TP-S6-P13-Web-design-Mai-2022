<?php
    include ('fonction.php');
    $pays = $_GET['pays'];
    $date = $_GET['date'];
    echo "pays".$pays;
    echo "date".$date;
    $listP = lesPays();
    $listAct = recherche();
    var_dump($listAct);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualite sur le Rechauffement climatique</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="style1.css" rel="stylesheet">
<link href="style2.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	// Animate select box length
	var searchInput = $(".search-box input");
	var inputGroup = $(".search-box .input-group");
	var boxWidth = inputGroup.width();
	searchInput.focus(function(){
		inputGroup.animate({
			width: "300"
		});
	}).blur(function(){
		inputGroup.animate({
			width: boxWidth
		});
	});
});
</script>
</head>
<body>
<div id="container">
        <nav>
            <div id="logo">
              Climat
            </div>
            <ul>
              <li><a href="https://echauffement-climatique.herokuapp.com/Back%20Office/home.php">Home</a></li>
              <li><a href="https://echauffement-climatique.herokuapp.com/Back%20Office/crud.php">Actualités</a></li>
              <li><a href="https://echauffement-climatique.herokuapp.com/Back%20Office/index.php">Deconnexion</a></li>
            </ul>
      </nav>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="https://echauffement-climatique.herokuapp.com/Back%20Office/traitementRecherche.php" method="get">
        <p>Pays : <input type="text" name="pays"></p>
        <p>Date : <input type="date" name="date"></p>
        <input type="submit" value="voir">
    </form>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-4">
						<div class="show-entries">
							<span>Show</span>
							<select>
								<option>1</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
							<span>entries</span>
						</div>						
					</div>
					<div class="col-xs-4">
						<h2 class="text-center">Actualités <b>Rechauffement climatique</b></h2>
					</div>
                    <div class="col-xs-4">
                        <div class="search-box">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
								<input type="text" class="form-control" placeholder="Search&hellip;">
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date </th>
                        <th>Titre</th>
                        <th>Pays </i></th>
                        <th>Contenue</th>
                        <th>Image </i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($listAct as $t) { ?>
                    <tr>
                        <td><?php echo $t['daty']; ?></td>
                        <td><?php echo $t['tilte']; ?></td>
                        <td><?php echo $t['nom']; ?></td>
                        <td><?php echo $t['apropos']; ?></td>
                        <td><img  src="<?php echo $t['sary']; ?>" width="100" height="100"></td>
                        <td>
                            <a href="https://echauffement-climatique.herokuapp.com/Back%20Office/modifier.php?id=<?php echo $t['idactualite']; ?>"" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="https://echauffement-climatique.herokuapp.com/Back%20Office/delete.php?id=<?php echo $t['idactualite']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>        
</div>     
</body>
</html>