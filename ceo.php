<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEO</title>
      <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="px-5 py-4" style="width:100%; position:fixed; background-color:#EEEEEE;"> 
<h2 class="" style="float:left;">CEO VIEW</h2>
<div style="float:right;">
<a href="#" class="btn btn-sm btn-secondary">Materials</a>
<a href="#p" class="btn btn-sm btn-secondary">Products</a>
<a href="#o" class="btn btn-sm btn-secondary">Orders</a>
<a href="#e" class="btn btn-sm btn-secondary">Employees</a>
<a href="logout.php" class="mb-5 ms-3 btn btn-sm btn-link btn-primary text-light" style="float:right;"><i class="fa-solid fa-right-from-bracket"></i></a>
</div>
</div>
<br><br><br><br><br><br>

<div class="container">

<h3 style="float:left;" >Materials</h3>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Packing</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
     
    </tr>
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