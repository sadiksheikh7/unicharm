<!-- header -->
  <?php 
    $title = 'Add User';
      include 'header.php';
  ?>
  
  <style>
    .cancel-btn{padding:6px 12px;}
  </style>
  <!-- partial -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-3">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="Name"/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="Email">Email Id</label>
                    <input type="password" class="form-control" placeholder="Email" id="Email">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="text" class="form-control" placeholder="Mobile number" id="mobile">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="mobile">Roll</label>
                    <select class="form-control">
                      <option>Select Roll</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <button type="buttton" class="btn btn-primary">Add User</button>
              <button type="submit" class="btn btn-danger cancel-btn">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- content-wrapper ends -->
  
  <!-- footer -->
  <?php include 'footer.php';?>
