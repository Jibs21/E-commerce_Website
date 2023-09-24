<?php

    $servername="localhost";
    $user="root";
    $password="";
    $dbname="1";
    $connect = mysqli_connect($servername,$user,$password,$dbname);

    if(!$connect){
        die("<script> alert('CONNECTION FAILED.')</script>");
    }

?>