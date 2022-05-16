<?php include 'templateHaut.php';
?>
<?php
    $listC = lesCauses();
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
        <p>Le <strong>changement climatique</strong> modifie l’équilibre thermique de la Terre et a de nombreuses conséquences sur l’homme et l’environnement. 
        On distingue les conséquences directes des conséquences indirectes du changement climatique. Des points de bascule dans le système climatique aux conséquences imprévisibles et irrévocables pourraient bientôt être atteints</p>

        <p> Les conséquences directes du changement climatique provoqué par l’activité humaine sont les suivantes :</p>
        <p>- augmentation des crises alimentaires et de l’eau, notamment dans les pays en voie de développement </p>
        <p>- menace d’existences en raison d’inondations et d’incendies de forêt </p>
        <p>- risques sanitaires en raison de la hausse de la fréquence et de l’intensité de vagues de canicule</p>
        <p>- conséquences économiques pour l’élimination des conséquences climatiques </p>
        <p>- acidification des océans due aux concentrations de HCO3 élevées dans l’eau en raison de la hausse des concentrations de CO2</p>
        <p>- perte de la biodiversité en raison de la capacité et de la vitesse d’adaptation limitées de la faune et de la flore</p>
        
        <h2>3. Solutions</h2>
        <ul>
            <li>Économiser l’énergie à la maison</li>
            <p>Notre électricité et notre chauffage proviennent en grande partie du charbon, du pétrole et du gaz. Il est possible de réduire sa consommation d’énergie en diminuant le chauffage et la climatisation, 
            en optant pour des ampoules LED et des appareils électriques à faible consommation, en lavant son linge à l’eau froide ou en le suspendant pour le faire sécher au lieu d’utiliser un sèche-linge</p>

            <li>Se déplacer à pied, à vélo ou en transports en commun</li>
            <p>Partout dans le monde, les routes sont surchargées de véhicules, dont la plupart roulent au diesel ou à l’essence. Privilégier la marche ou le vélo à la voiture permet de réduire les émissions de gaz à effet de serre et contribue à une meilleure santé et à une meilleure forme physique. 
                Pour les longues distances, pensez à prendre le train ou le car. Enfin, pratiquez le covoiturage chaque fois que cela est possible</p>

            <li>Consommer plus d’aliments d’origine végétale</li>
            <p>En consommant plus de légumes, de fruits, de céréales complètes, de légumineuses, de noix et de graines, et moins de viande et de produits laitiers, on peut réduire considérablement son impact sur l’environnement.
                La production d’aliments d’origine végétale entraîne généralement moins d’émissions de gaz à effet de serre et nécessite moins d’énergie, de terres et d’eau</p>

        </ul>        
        <h2>4. Cause</h2>
        <p>&nbsp;Plusieur causes peut causer <Strong>le réchauffement climatique</Strong>:</p>
        <?php foreach($listC as $t) {  ?>
            <div class="card-deck">
                <div class="card">
                <img class="card-img-top" src= "http://rechauffement-climatique/TP-S6-P13-Web-design-Mai-2022/Back%20Office/<?php echo $t['sary']; ?>" alt="Card image cap" width="180" height="180">
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