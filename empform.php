<div class="modal" tabindex="-1" id="empaddmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHead"> <i class="fa-sharp fa-solid fa-user-plus me-2"></i>Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id="eaddform" method="POST" action="signupemp.php">

      <label>First:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="efname" name="efname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your first name">
        </div>

        <label>Last:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-user text-light"></i></span>
        </div>
        <input type="text" id="elname" name="elname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your last name">
        </div>





        <label>Position</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-house text-light"></i></span>
        </div>
        <select   class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="posi" name="posi">
          <option value="no" disabled selected>Select your position</option>
          <option value="ceo">CEO</option>
          <option value="admin">Admin</option>
          <option value="worker">Worker</option>
        </select>
        </div>

        <label>Password:</label>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
            <span class="input-group-text bg-dark" id="inputGroup-sizing-sm"><i class="fa-solid fa-lock text-light"></i></span>
        </div>
        <input type="password" id="espass" name="espass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your password">
        </div>

       
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend me-2">
        </div>
        <input type="password" id="ecspass" name="ecspass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Confirm your password">
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