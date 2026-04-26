<?php  

     $server = "localhost";
     $user = "root";
     $password = "";
    $db = "project";

    try {
        $connection  = mysqli_connect($server, $user, $password, $db);
        // echo"successful";
    } catch (\Exception $e) {
        echo "Could not connect to db";
    }

    
 ?>