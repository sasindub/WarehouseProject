<?php
require_once("partials/connection.php");
session_start();
$addid = $_GET['adid'];

$id = $_SESSION['id'];
$name = $_SESSION['userName'];
$date = date("Y-m-d");


$sql = "INSERT INTO orders(date,cid,cname,status,pname) values('$date',$id, '$name', 'waiting', '$addid');";
$result = mysqli_query($con, $sql);

if($result){
header("Location: myorders.php");
}