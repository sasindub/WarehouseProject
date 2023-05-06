<?php
require_once("partials/connection.php");
session_start();
$delid = $_GET['delid'];


$sql = "delete from orders where id = '$delid'";
$result = mysqli_query($con, $sql);

if($result){
    
header('Location: myorders.php');
}