


<div class="modal" tabindex="-1" id="addmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHead"> <i class="fa-sharp fa-solid fa-user-plus me-2"></i>Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      <form id="addform" method="POST" action="signup.php">
        

      <label>First:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="fname" name="fname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your first name">
        </div>

        <label>Last:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="lname" name="lname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your last name">
        </div>


        <label>Email: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-envelope text-light"></i></span>
        </div>
        <input type="text" id="email" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="example@gmail.com">
        </div>


        <label>Mobile: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-phone text-light"></i></span>
        </div>
        <input type="mobile" id="mobile" name="mobile" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ex: 0774186335"        >
        </div>


        <label>Address:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-house text-light"></i></span>
        </div>
        <input type="address" id="address" name="address" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your address..">
        </div>

        <label>Password:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-lock text-light"></i></span>
        </div>
        <input type="password" id="spass" name="spass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your password">
        </div>

       
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
        </div>
        <input type="password" id="cspass" name="cspass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Confirm your password">
        </div>
      

      </div>
      <div class="modal-footer">
      <button type="submit" id="sub" name="sub" class="btn btn-secondary" style="width:100%">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="width:100%">Close</button> 
      </div>
      </form>
    </div>
  </div>
</div>