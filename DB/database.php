<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'password';
    $databse = 'Bibliotheque';

    $conn = mysqli_connect($host,$user,$pass, $databse);

    if(!$conn){
        echo "Could not Connect";
    }

?>