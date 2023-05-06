<?php
require_once("partials/connection.php");
session_start();
$upid = $_GET['upid'];
$des = $_GET['des'];
$price = $_GET['price'];
$qu = $_GET['qu'];
$name = $_GET['name'];
$type = $_GET['type'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
     <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="container">

<!-- product s -->
<div class="modal-body mt-4">
        
        <h3 class="mb-5">Update Product (<?php echo $name?>)</h3>
      <form id="eaddform" method="POST" action="pupdate.php">


        <label>Description:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-file-waveform text-light"></i></span>
        </div>
        <input value=<?php echo $des?> type="text" id="des" name="des" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Descrition [0,5kg, 1kg, 2kg, 5kg pack] ">
        </div>





      <input type="hidden" name="upid" id="" value="<?php echo $upid?>">

        <label>Quantity:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-list-ol text-light"></i></span>
        </div>
        <input value=<?php echo $qu?> type="number" id="espass" name="qu" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="No. of quantity">
        </div>

        <label>Price ($):</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-dollar-sign text-light"></i></span>
        </div>
        <input value=<?php echo $price?> type="number" id="espass" name="price" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Product price ($)">
        </div>

       
    
      

      </div>
      <div class="modal-footer">
      <button type="submit" id="esub" name="esub" class="btn btn-secondary" style="width:100%">Submit</button>
        <a href="admin.php" class="btn btn-danger"  style="width:100%">Close</a> 
      </div>
      </form>
<!-- product e -->
    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>


