
<div class="modal" tabindex="-1" id="addmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHead">EDIT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      <form  method="POST" action="customer.php">
        

      <label>First:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="fname" name="fname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your first name" value=<?php echo $fname?>>
        </div>

        <label>Last:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="lname" name="lname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your last name" value=<?php echo $lname?>>
        </div>


        <label>Email: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-envelope text-light"></i></span>
        </div>
        <input type="text" id="email" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="example@gmail.com" value=<?php echo $email?>>
        </div>


        <label>Mobile: </label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-phone text-light"></i></span>
        </div>
        <input type="mobile" id="mobile" name="mobile" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ex: 0774186335"    value=<?php echo $phone?>    >
        </div>


        <label>Address:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-house text-light"></i></span>
        </div>
        <input type="address" id="address" name="address" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your address.." value=<?php echo $address?>>
        </div>


      </div>
      <div class="modal-footer">
      <button type="submit" id="edsub" name="edsub" class="btn btn-secondary" style="width:100%">Update</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="width:100%">Close</button> 
      </div>
      </form>
    </div>
  </div>
</div>