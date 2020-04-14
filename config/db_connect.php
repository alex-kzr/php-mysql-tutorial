<?php

    // connect to DB
    $conn = mysqli_connect('localhost', 'ninja', 'Test123456@$*', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>