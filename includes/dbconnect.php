<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'bmu_bank';

    $con = mysqli_connect($server, $user, $password, $db);

    if(!$con){
        
        die('Could not connect');
    }

?>