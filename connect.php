<?php
    //1.Connect server
    $conn = new mysqli("localhost","root","12345678","school") ;
    if($conn->connect_errno){
        die("Connect failed: ".$conn->connect_error);
    }
?>