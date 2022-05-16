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
        /*
        $host = 'ec2-3-229-11-55.compute-1.amazonaws.com';
        $dbname = 'dm4lhn0slo10c';
        $username = 'iqleyholaitonp';
        $password = 'd6ef3b17ef32a85c3efbaa46c144dbc276538f416445e9a9067e4ff6c6230f99';
 
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
        try{
            $conn = new PDO($dsn);
            
            if($conn){
            //echo "Connecté à $dbname avec succès!";
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }*/
    
?>
