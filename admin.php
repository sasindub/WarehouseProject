<?php
require_once("partials/connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
$qu = $_POST['qu'];
$weight = $_POST['weight'];
$name = $_POST['mname'];


$sql = "INSERT INTO material(name, weight, quantity) VALUES ('$name', '$weight', '$qu')";
$result = mysqli_query($con, $sql);

if($result){
header("Location: admin.php");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
      <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="px-5 py-4" style="width:100%; position:fixed; background-color:#EEEEEE;"> 
<h2 class="" style="float:left;">Admin Panel</h2>
<div style="float:right;">
<a href="#" class="btn btn-sm btn-secondary">Materials</a>
<a href="#p" class="btn btn-sm btn-secondary">Products</a>
<a href="#o" class="btn btn-sm btn-secondary">Orders</a>
<a href="#c" class="btn btn-sm btn-secondary">Customers</a>
<a href="#e" class="btn btn-sm btn-secondary">Employees</a>
<a href="logout.php" class="mb-5 ms-3 btn btn-sm btn-link btn-primary text-light" style="float:right;"><i class="fa-solid fa-right-from-bracket"></i></a>
</div>
</div>
<br><br><br><br><br><br>

<div class="container">

<h3 style="float:left;" >Materials</h3>
<button class="btn btn-sm btn-primary" style="float:right;" data-bs-toggle="modal" data-bs-target="#addmet">Add new materials</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Packing</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $sql = "select * from material";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

    <tr>
      <th scope="row"><?php echo $row['Id']?></th>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['weight']?></td>
      <td><?php echo $row['quantity']?></td>
      <td><a href="deleteAdmin.php?delid=<?php echo $row['Id']?>&type=mdel" class ="btn btn-danger btn-sm">Delete</a>
      <a  href="materialUpdate.php?upid=<?php echo $row['Id']?>&name=<?php echo $row['name']?>&weight=<?php echo $row['weight']?>&qu=<?php echo $row['quantity']?>" class ="btn btn-warning btn-sm">Update</a>
    </td>
    </tr>

    <?php }
    }?>
  </tbody>
</table>


<h3 style="float:left;" id="p" class="mt-5">Products</h3>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Descrption</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php 
  require_once('partials/connection.php');
  session_start();

  $sql = "select * from product";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

    <tr>
      <th scope="row"><?php echo $row['Id']?></th>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['des']?></td>
      <td><?php echo $row['quantity']?></td>
      <td><?php echo $row['price']?></td>
      <td><a href="deleteAdmin.php?delid=<?php echo $row['Id']?>&type=pdel" class ="btn btn-danger btn-sm">Delete</a>
      <a  href="productUpdate.php?upid=<?php echo $row['Id']?>&name=<?php echo $row['name']?>&des=<?php echo $row['des']?>&qu=<?php echo $row['quantity']?>&price=<?php echo $row['price']?>&type=pup" class ="btn btn-warning btn-sm">Update</a>
    </td>
    </tr>

    <?php }
    }?>
  </tbody>
</table>



<h3 style="float:left;" id="o" class="mt-5">Orders</h3>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Date</th>
      <th scope="col">Customer name</th>
      
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php 
  require_once('partials/connection.php');


  $sql = "select * from orders";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['cname']?></td>
      <td><?php echo $row['pname']?></td>
      <td><span class="badge bg-primary"><?php echo $row['status']?></span></td>
      <td><a href="deleteAdmin.php?delid=<?php echo $row['id']?>&type=odel" class ="btn btn-danger btn-sm">Delete</a>
      <a  href="orderUpdate.php?upid=<?php echo $row['id']?>&status=<?php echo $row['status']?>&cname=<?php echo $row['cname']?>&date=<?php echo $row['date']?>" class ="btn btn-warning btn-sm">Update</a>
    </td>
    </tr>

    <?php }
    }?>
  </tbody>
</table>



<h3 style="float:left;" class="mt-5" id="c">Customers</h3>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $sql = "select * from customer";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['firstname']?></td>
      <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['phone']?></td>
      <td><a href="deleteAdmin.php?delid=<?php echo $row['id']?>&type=cdel" class ="btn btn-danger btn-sm">Delete</a>
     
    </td>
    </tr>

    <?php }
    }?>
  </tbody>
</table>



<h3 style="float:left;" id="e" class="mt-5">Employees</h3>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Position</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $sql = "select * from employee";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['firstname']?></td>
      <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['position']?></td>
      <td><a href="deleteAdmin.php?delid=<?php echo $row['id']?>&type=edel" class ="btn btn-danger btn-sm">Delete</a>
     
    </td>
    </tr>

    <?php }
    }?>
  </tbody>
</table>

</div>




<!-- form -->

<div class="modal" tabindex="-1" id="addmet">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHead">Add new material</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id="eaddform" method="POST" action="admin.php">

      <label>Name: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-box text-light"></i></span>
        </div>
        <select   class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="posi" name="mname">
          <option value="no" disabled selected>Select product name</option>
          <option value="Arabica">Arabica</option>
          <option value="Robusta"> Robusta</option>
          <option value="Excelsa">Excelsa</option>
          <option value="Liberica">Liberica</option>
          <option value="Maragogype">Maragogype</option>
        </select>
        </div>

      

        <label>Quantity in stock:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-list-ol text-light"></i></span>
        </div>
        <input type="number" id="espass" name="qu" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="No. of quantity">
        </div>


        <label>Packing:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-list-ol text-light"></i></span>
        </div>
        <input type="text" id="espass" name="weight" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="packing (0,5kg, 1kg, 2kg, 5kg)">
        </div>


       
    
      

      </div>
      <div class="modal-footer">
      <button type="submit" id="esub" name="esub" class="btn btn-secondary" style="width:100%">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="width:100%">Close</button> 
      </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>