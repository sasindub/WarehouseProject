<?php
require_once("partials/connection.php");
 if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    
        $qu =   $_POST['qu'];
        $upid = $_POST['id'];
        $weight = $_POST['weight'];

       

        $sql = "update material set quantity = '$qu', weight = '$weight' where id = $upid";
        $result = mysqli_query($con, $sql);

        if($result){
                header("Location: admin.php");
                exit();        
  
        }
    
   

    
 
   





    

}
?>