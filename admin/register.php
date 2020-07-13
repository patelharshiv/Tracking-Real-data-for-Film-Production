<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
        
         <div class="form-group">
      <label >Username</label>
      <input type="text" name="username" class="form-control"  placeholder="Enter Username">
    </div>

     <div class="form-group">
      <label >Email</label>
      <input type="email" name="email" class="form-control"  placeholder="Enter E-mail">
    </div>

     <div class="form-group">
      <label >Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>

     <div class="form-group">
      <label >Confirm Password</label>
      <input type="Password" name="confirmpassword" class="form-control"  placeholder="Enter Confirm Password">
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>