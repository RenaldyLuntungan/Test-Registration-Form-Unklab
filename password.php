<?php

    $pass = password_hash("myPassword", PASSWORD_BCRYPT);
    echo $pass;

    if(password_verify("myPassword", $pass)){
        echo "Password is correct. welcome.";
    }
    else {
        echo"your password is INCORRECT. try again.";
    }
?>