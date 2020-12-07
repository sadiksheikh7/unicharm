<!-- header -->
  <?php include 'header.php';?>
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
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" placeholder="9C2EAA15EF" id="code" disabled/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="password" class="form-control" placeholder="name" id="name">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="pwd">Contact Person</label>
                    <input type="text" class="form-control" placeholder="Contact person" id="contact-person">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="text" class="form-control" placeholder="Mobile number" id="mobile">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="emergency">Emergency No</label>
                    <input type="text" class="form-control" placeholder="Emergency number" id="emergency">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" placeholder="Email" id="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="4" placeholder="Address" id="address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="pincode">Pin Code</label>
                    <input type="text" class="form-control" placeholder="Pincode" id="pincode">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="text" class="form-control" placeholder="Phone number" id="phone">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="gst">GST Number</label>
                    <input type="text" class="form-control" placeholder="GST" id="gst">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" placeholder="State" id="state">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="state-code">State Code</label>
                    <input type="text" class="form-control" placeholder="State code" id="state-code">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="pan">PAN Card Number</label>
                    <input type="text" class="form-control" placeholder="PAN Number" id="pan">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="aadhaar">Aadhaar Card Number</label>
                    <input type="text" class="form-control" placeholder="aadhaar" id="aadhaar">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="distributor">Distributor</label>
                    <input type="text" class="form-control" placeholder="Distributor" id="distributor">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="Retailer Type">Retailer Type</label>
                    <select class="form-control">
                      <option></option>
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="aadhaar">Birth Date</label>
                    <input type="text" class="form-control" placeholder="aadhaar" id="aadhaar">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="distributor">Anniversary Date</label>
                    <input type="text" class="form-control" placeholder="Distributor" id="distributor">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="Retailer Type">Active Status</label>
                    <select class="form-control">
                      <option>Not Set</option>
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="buttton" class="btn btn-primary">Create</button>
              <button type="submit" class="btn btn-danger cancel-btn">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- content-wrapper ends -->
  
  <!-- footer -->
  <?php include 'footer.php';?>
