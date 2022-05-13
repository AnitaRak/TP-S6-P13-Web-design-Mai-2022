<?php include 'templateHaut.php';
?>
<?php
    $listC = lesCauses();
    $listCon = lesConsequences();
    $listSo = lesSolutions();
?>
<style>
h1 { color: #77b5fe; }
h2 { color: #77b5fe; }

</style>
<center><h1 class="display-5">Rechauffement climatique</h1></center>

<ul>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <img class="card-img-top" src="images/fon1" alt="Card image cap" width="180" height="180">
    <br></br>
        <p>&emsp;Le climat se réchauffe par l’accroissement inexorable de la concentration dans l’atmosphère des gaz à effet de serre liés aux activités humaines. 
            Une transition écologique est d'autant plus nécessaire lorsque l'on sait qu'un réchauffement de plus de 2°C par rapport aux niveaux préindustriels pourrait avoir des conséquences irrévocables.
            Récapitulatif de la situation en 2022.</p>
        <h2>1. Definition</h2>
        <p><Strong>&emsp;Le réchauffement climatique</Strong>, appelé également réchauffement planétaire
            , est un phénomène qui se caractérise par l’augmentation du niveau moyen de la température à la surface de la Terre</p>
        
        <h2>2. Conséquences</h2>
        <?php foreach($listCon as $t) {  ?>
            <li>
                <ul><?php echo $t['consequence']; ?></ul>
            </li>
        <?php } ?>

        <h2>3. Solutions</h2>
        <?php foreach($listSo as $t) {  ?>
            <li>
                <ul><?php echo $t['solution']; ?></ul>
            </li>
        <?php } ?>
        
        <h2>4. Cause</h2>
        <p>&nbsp;Plusieur causes peut causer <Strong>le réchauffement climatique</Strong>:</p>
        <?php foreach($listC as $t) {  ?>
            <div class="card-deck">
                <div class="card">
                <img class="card-img-top" src="<?php echo $t['sary']; ?>" alt="Card image cap" width="180" height="180">
                <div class="card-body">
                <h5 class="card-title"><?php echo $t['titre']; ?></h5>
                <p class="card-text"><?php echo $t['apropos']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-2"></div>
</ul>



<?php include 'templateBas.php'; ?>