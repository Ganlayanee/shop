<?php
    $host= "localhost";
    $user = "root";
    $pw = "";
    $db = "shop";

    $conn = new mysqil($host,$user,$pw,$db,);

    if ($conn->connect_error){
        die("connect fail: " . $conn->connect_error);
    }
    echo"Connect Successfully";
    mysail_set_charset($conn, "utf8");
?>   