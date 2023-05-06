<?php 
if(isset($_SESSION['position'])){
    session_destroy();
    header("Location: emplog.php");
    exit();
}else{
    session_destroy();
    header("Location: index.php");
    exit();
}
?>