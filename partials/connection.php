<?php

$con = mysqli_connect("localhost","root","","warehouse");

//check the connection

if(mysqli_connect_errno()){
    echo "Failed to connect" . $mysqli_connect_error();
    exit();
}