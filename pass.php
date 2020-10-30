<?php

    $username = "Renaldy";
    $password = "webpro";
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
        
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO operators(username,password)
         VALUES ('$username','$pass')");
?>