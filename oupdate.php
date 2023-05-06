<?php
require_once("partials/connection.php");
 if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    
        $sta =   $_POST['status'];
        $upid = $_POST['id'];

       

        $sql = "update orders set status = '$sta' where id = $upid";
        $result = mysqli_query($con, $sql);

        if($result){
                header("Location: admin.php");
exit();        
  
        }
    
   

    
 
   





    

}
?>