<?php
 require_once('partials/connection.php');
 session_start();

 $id = $_SESSION['id'];
 $sql = "select * from customer where id = '$id'";

 $result = mysqli_query($con, $sql);


 if($result){
     $record = mysqli_fetch_assoc($result);
   
     $fname = $record['firstname'];
     $lname = $record['lastname'];
     $email = $record['email'];
     $phone = $record['phone'];
     $address = $record['address'];

  }


  
?>

<?php
    $id = $_SESSION['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['mobile'];
            $address = $_POST['address'];

            $sql = "update customer set firstname = '$fname', lastname = '$lname', email = '$email', phone = '$phone', address = '$address' where id = '$id'";
            $result = mysqli_query($con, $sql);

      
            header("Location: customer.php");
exit();        
          


            
       
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
    </style>
</head>
<body>
<div class="container">

<section class="" style="">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-3 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="img/pr.jpg"
                alt="Avatar" class="img-fluid my-5 rounded" style="width: 120px;" />
              <h5><?php echo $fname?></h5>
              <p>Customer</p>
              <span  data-bs-toggle="modal" data-bs-target="#addmodal"><i class="far fa-edit mb-5"></i></span>
              <?php include 'formedit.php'?>
            </div>
            <div class="col-md-9">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-3 mb-3">
                    <h6>First Name</h6>
                    <p class="text-muted"><?php echo $fname?></p>
                  </div>
                  <div class="col-3 mb-3">
                    <h6>Last Name</h6>
                    <p class="text-muted"><?php echo $lname?></p>
                  </div>
                  <div class="col-4 mb-1">
                    <h6>Mobile</h6>
                    <p class="text-muted"><?php echo $phone?></p>
                  </div>
                 
                </div>
                <h6>More</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-5 mb-1">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $email?></p>
                  </div>
                  <div class="col-5 mb-1">
                    <h6>Address</h6>
                    <p class="text-muted"><?php echo $address?></p>
                  </div>

                  <div class="col-2 mb-1">
                  <a href="logout.php" class="mb-5 btn btn-sm btn-link btn-primary text-light" style="float:right;"><i class="fa-solid fa-right-from-bracket"></i></h4></a>
                  
                  </div>

                  
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if(isset($done)) {
  echo $done;
}?>

</div>





<!-- card -->
<div class="container" style="padding-left:70px;">

<h3 class="mb-3" style="float:left;">Products</h3>
<button class="btn btn-secondary" style="margin-bottom:50px; margin-left:960px;">My orders</button>

  <div class="row">
  

  <?php 
  
  $sql = "select * from product";

$result = mysqli_query($con, $sql);


if($result->num_rows > 0){
  
    while($row = $result->fetch_assoc()){

    

    
    ?>

  <div class="card col-3 me-3 mb-3" style="width: 18rem;">
  <div class="card-header">
    <?php echo $row['name']; ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Price($): <?php echo $row['price']; ?></li>
    <li class="list-group-item">Description: <?php echo $row['des']; ?></li>
    <li class="list-group-item">Quantity: <?php echo $row['quantity']; ?><a href='addOrder.php?adid=<?php echo $row['name']?>'  class='btn btn-success btn-sm ms-5'>Order</a></li>
  </ul>
</div>


<?php }
}else{
  echo "<h2>no data</h2>";
}?>

  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>