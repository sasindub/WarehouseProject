<?php
require_once("partials/connection.php");
session_start();
$upid = $_GET['upid'];
$name = $_GET['name'];
$weight = $_GET['weight'];
$qu = $_GET['qu'];


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
        
        <h3 class="mb-5">Update Materials (<?php echo $name?>)</h3>
      <form id="eaddform" method="POST" action="mupdate.php">

  <input type="hidden" name="id" id="" value=<?php echo $upid?>>
        <label>Name:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-file-waveform text-light"></i></span>
        </div>
        <input value=<?php echo $name?> type="text" id="des" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
        </div>





      <input type="hidden" name="upid" id="" value="<?php echo $upid?>">

    

        <label>Packing:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-dollar-sign text-light"></i></span>
        </div>
        <input value=<?php echo $weight?> type="number" id="espass" name="weight" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <label>Quantity:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-dollar-sign text-light"></i></span>
        </div>
        <input value=<?php echo $qu?> type="number" id="espass" name="qu" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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


