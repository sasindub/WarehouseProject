<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My orders</title>
     <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="container mt-5">
<h2 class="mb-5" style="float:left;">My Orders</h2>
<a href="customer.php" class="mb-5" style="float:right;">Products</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Order No.</th>
      <th scope="col">Product</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php 
  
  require_once('partials/connection.php');
  session_start();
 

  $id = $_SESSION['id'];
   $sql = "select * from orders where cid = '$id'";

   $result = mysqli_query($con, $sql);
   
   
   if($result->num_rows > 0){
     
       while($row = $result->fetch_assoc()){
   
  ?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['pname']?></td>
      <td><?php echo $row['date']?></td>
      <td><span class="badge bg-warning text-dark"><?php echo $row['status']?></span></td>
      <td> <a href="delete.php?delid=<?php echo $row['id']?>" class ="btn btn-danger btn-sm">Delete</a> </td>
    </tr>

    <?php }
    }?>
    
  </tbody>
</table>

</div>   

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>