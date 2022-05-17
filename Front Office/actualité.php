<?php include 'templateHaut.php';
    $listAct = lesActualites();
    var_dump($listAct);
   
?>
<center><h1>Les actualités des rechauffement climatique</h1></center>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Titre</th>
            <th scope="col">Date</th>
            </tr>
        </thead>
        <?php foreach($listAct as $t) { 
        $titreAvecTire = slugify($t['tilte']);?>
        <tr>
            <td><a href="<?php echo $titreAvecTire."/".$t['url']?>-<?php echo $t['idactualite'].".php";?>"><?php echo $t['tilte']; ?></a></td>
            <td><?php echo $t['daty']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
<?php include 'templateBas.php'; ?>
