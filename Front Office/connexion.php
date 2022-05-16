<?php
        /*$host = 'localhost';
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
        }*/
        
        $host = 'ec2-52-86-115-245.compute-1.amazonaws.com';
        $dbname = 'd9kiu43f8cvns6';
        $username = 'ewodqjpfhwowsr';
        $password = '520d34b9f0b56bd6bfac6107b39a88d755ed49007b4bb66a1c5cc9c1f85c802d';
 
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
        try{
            $conn = new PDO($dsn);
            
            if($conn){
            //echo "Connecté à $dbname avec succès!";
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    
?>
