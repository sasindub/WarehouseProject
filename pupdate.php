<?php
require_once("partials/connection.php");
 if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    
        $des1 = $_POST['des'];
        $qu1 = $_POST['qu'];
        $p1 = $_POST['price'];

        $upid = $_POST['upid'];

        $sql = "update product set des = '$des1', quantity = '$qu1', price = '$p1' where id = '$upid'";
        $result = mysqli_query($con, $sql);

        if($result){
                header("Location: admin.php");
exit();        
  
        }
    
   

    
 
   





    

}
?>