<?php
        $host = 'localhost';
        $dbname = 'rechauffement-climatique';
        $username = 'postgres';
        $password = 'tantely10';
 
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
        try{
            $conn = new PDO($dsn);
            
            if($conn){
            //echo "Connecté à $dbname avec succès!";
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        /*$dsn = 'mysql:host=localhost;dbname=rechauffement_climatique;port=3306;charset=utf8';

        // Création et test de la connexion

        try {
        
        $conn = new PDO($dsn, 'root' , '');

        }
        catch (PDOException $exception) {
        
        mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
        exit('Erreur de connexion à la base de données');
        
        }*/
    
?>
