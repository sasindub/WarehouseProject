<?php
     require_once('partials/connection.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $user = $_POST['uname'];
            $pass = $_POST['pass'];

            $sql = "select pass, id, firstname from customer where firstname = '$user'";
            $result = mysqli_query($con, $sql);

         
            if($result){
                $record = mysqli_fetch_assoc($result);
              
                if($record['pass'] == $pass){
                    $_SESSION['id'] = $record['id'];
                    $_SESSION['userName'] = $record['firstname'];
                    header("Location: customer.php");
                    exit();
                   
                }else{
                    $error = '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    Invalid user name or password! 
                  </div> ';
                }
            }


       

            
       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse | Login</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="container" style="margin-top:100px;">


<section >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/i.png"
          class="img-fluid rounded" style="height:500px;" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

      <img src="img/p.png"
          class="img-fluid" style="height:70px; margin-bottom: 50px;" alt="Sample image">

        <form method="POST" action="index.php">

        <?php if(isset($error) ) {echo $error;} session_destroy();?>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address or user name: </label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address or user name" name="uname" id="uname" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password: </label>
            <input type="password"  class="form-control form-control-lg"
              placeholder="Enter password" id="pass" name="pass"/>
           
          </div>

          <div class="d-flex justify-content-between align-items-center">
           

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" id="lsub" name="lsub" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger" data-bs-toggle="modal" data-bs-target="#addmodal">Customer</a>
                <a href="emplog.php"
                class="" style="margin-left:65px;">Employee login</a>
              </p>
          </div>

        </form>
      </div>
    </div>
  </div>
 
</section>

</div>

<?php include 'form.php'?>
<?php include 'empform.php'?>



<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script> $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 });</script>

</body>
</html>