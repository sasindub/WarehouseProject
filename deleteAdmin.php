<?php
require_once("partials/connection.php");
session_start();
$delid = $_GET['delid'];
$type = $_GET['type'];


switch($type)

{
case 'pdel':
$sql = "delete from product where id = '$delid'";
break;

case 'odel';
$sql = "delete from orders where id = '$delid'";
break;

case 'mdel';
$sql = "delete from material where id = '$delid'";
break;

case 'edel';
$sql = "delete from employee where id = '$delid'";
break;

case 'cdel';
$sql = "delete from customer where id = '$delid'";
break;

}


$result = mysqli_query($con, $sql);

if($result){
    
header('Location: admin.php');
}