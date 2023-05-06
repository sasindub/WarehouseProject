<?php
     require_once('partials/connection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $pname = $_POST['pname'];
            $des = $_POST['des'];
            $price = $_POST['price'];
            $qu = $_POST['qu'];
          
           

             $sql = "INSERT INTO product(name, des, quantity, price) values('$pname', '$des', $qu, $price)";
            $result = mysqli_query($con, $sql);

            if($result){
                $adddone = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Added new item successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
               
            }else{
                $adddone = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Something Went Wrong Please contact the developer.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

            

//             header("Location: index.php");
// exit();
       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    







<div class="container mt-5">

<h2 class="mb-5" style="float:left;">Employee</h2>
<a href="logout.php" class="mb-5 btn btn-link btn-secondary text-light" style="float:right;"><i class="fa-solid fa-right-from-bracket"></i></a>


<button class = "btn btn-primary mb-5 w-100" data-bs-toggle="modal" data-bs-target="#addproduct">Add new product</button>

<?php if(isset($adddone)) {echo $adddone;}?>

<div class="row" style="margin-left:48px">
  


<?php 
  
  $sql = "select * from material";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

  <div class="card col-3 me-3 mb-3" style="width: 18rem;">
  <div class="card-header">
    <?php echo $row['name']; ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Packing: <?php echo $row['weight']; ?></li>
    <li class="list-group-item">Quantity: <?php echo $row['quantity']; ?>
    <a href='materialOrder.php'  class='btn btn-success btn-sm ms-5'>Order</a></li>
  </ul>
</div>


<?php }
}else{
  echo "<h2>no data</h2>";
}?>




</div>

</div>


<!-- form -->

<div class="modal" tabindex="-1" id="addproduct">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHead">Add new product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id="eaddform" method="POST" action="worker.php">

      <label>Name: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-box text-light"></i></span>
        </div>
        <select   class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="posi" name="pname">
          <option value="no" disabled selected>Select product name</option>
          <option value="Arabica">Arabica</option>
          <option value="Robusta"> Robusta</option>
          <option value="Excelsa">Excelsa</option>
          <option value="Liberica">Liberica</option>
          <option value="Maragogype">Maragogype</option>
        </select>
        </div>

        <label>Description:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-file-waveform text-light"></i></span>
        </div>
        <input type="text" id="des" name="des" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Descrition [0,5kg, 1kg, 2kg, 5kg pack] ">
        </div>





      

        <label>Quantity:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-list-ol text-light"></i></span>
        </div>
        <input type="number" id="espass" name="qu" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="No. of quantity">
        </div>

        <label>Price ($):</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-dollar-sign text-light"></i></span>
        </div>
        <input type="number" id="espass" name="price" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Product price ($)">
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