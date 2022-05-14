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

    
?>
