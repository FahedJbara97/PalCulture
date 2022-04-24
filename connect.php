<?php       
                
                $dbhost = "localhost";
                $dbuser = "c85_master";
                $dbpass = "123456789";
                $dbname = "c85dbschema_1151736_sql";

                // create PDO Object:
                $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

                if(!$pdo ) {
                die("Could not connect to database");
                echo "1";
                } 
            
?>