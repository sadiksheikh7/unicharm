<!-- header -->
  <?php 
	  $title = 'Retailer Details';
    include 'header.php';
  ?>
  <style>
    .cancel-btn{padding:6px 12px;}
    #note-div{display:none;}
    .no-gutter{padding:0px;}
    .br-90{border-radius:90px;}
    #side-drawer {height: 100vh;width: 250px;top: 134px;right: -336px;z-index: 1032;transition: right 0.25s ease;box-shadow:0px 0px 5px 0px rgba(0,0,0,0.05);max-height: calc(100vh - 125px);overflow-y: scroll;}
    #side-drawer a{max-width: 250px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
    #side-drawer-void {height: 100%;width: 100%;top: 0;z-index: 1031;}
    .p-20{padding:20px;}
    .bg-theme{background-color:#1a237e;}
    /*#side-drawer ul{max-height: calc(100vh - 125px);overflow-y: scroll;}*/
    #side-drawer ul a{padding: 12px;color: #000;border-bottom: 1px solid #eee!important;}
    #side-drawer ul a:hover{text-decoration:none;color:#1a237e;}
    .bordered{border-bottom:1px solid #eee;}
  </style>
  <!-- partial -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="profile-wrap">
                  <h3>Hindustan Merchantile</h3>
                  <p class="text-pink mb-0">Code : 9C2EAA15EF</p>
                  <p>51 st Floor, J S arcade, Sector, Noida</p>
                  <a href="javascript:void(0);" onclick="myFunction()" id="note-label">
                    <small>Add Note</small>
                  </a>
                  <div id="note-div" class="col-lg-4 col-12 no-gutter">
                    <textarea class="form-control" placeholder="Add note..."></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 text-right">
                <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                <button type="button" class="btn btn-success btn-md mr-3 br-90"><i class="fa fa-plus" aria-hidden="true"></i> Create Invoice</button>
                <button type="button" class="btn btn-warning btn-md br-90" class="navbar-toggler" onclick="openSideDrawer()"><i class="fa fa-address-book" aria-hidden="true"></i> Retailer Directory</button>
                <div class="balance-stats mt-3">
                  <span><b>Opening Balance :</b>&nbsp; <i class="fa fa-rupee" aria-hidden="true"></i> 3,20,000.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs mb-3">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#retailer">Retailer Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#transaction">Trasaction List</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="retailer">
                <form>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="pwd">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Contact person" id="contact-person">
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
                        <label for="emergency">Emergency No</label>
                        <input type="text" class="form-control" placeholder="Emergency number" id="emergency">
                      </div>
                    </div>
                    <div class="col-lg-3">
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
                </form>
              </div>
              <div class="tab-pane fade" id="transaction">
              <div class="table-responsive data-table">
                  <table class="table custom-table" id="example">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Number</th>
                        <th>Memo</th>
                        <th>Due Date</th>
                        <th>Balance</th>
                        <th>Total Balance</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>05/05/2020</td>
                        <td>Sales Receipt</td>
                        <td>1026</td>
                        <td>---</td>
                        <td>25/05/2020</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 3,45,000.20</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 7,20,000.00</td>
                        <td><span class="badge badge-success text-white">Paid<span></td>
                        <td class="first-column">
                          <div class="dropdown table-droppy">
                            <a role="button" type="button" data-toggle="dropdown">
                              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td>05/05/2020</td>
                        <td>Sales Receipt</td>
                        <td>1026</td>
                        <td>---</td>
                        <td>25/05/2020</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 3,45,000.20</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 7,20,000.00</td>
                        <td><span class="badge badge-success text-white">Paid<span></td>
                        <td class="first-column">
                          <div class="dropdown table-droppy">
                            <a role="button" type="button" data-toggle="dropdown">
                              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>05/05/2020</td>
                        <td>Sales Receipt</td>
                        <td>1026</td>
                        <td>---</td>
                        <td>25/05/2020</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 3,45,000.20</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 0.00</td>
                        <td><i class="fa fa-rupee" aria-hidden="true"></i> 7,20,000.00</td>
                        <td><span class="badge badge-success text-white">Paid<span></td>
                        <td class="first-column">
                          <div class="dropdown table-droppy">
                            <a role="button" type="button" data-toggle="dropdown">
                              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div id="side-drawer" class="position-fixed">
          <div class="bg-white">
              <div class="action-wrap p-20 bg-theme">
                <div class="d-md-flex align-items-center">
                  <div class="text-white">Retailers Directory</div>
                  <div class="ml-auto align-items-center">
                    <div class="dl">
                      <a href="javascript:void(0);" class="btn btn-secondary br-90">
                        <i class="fa fa-plus mr-0" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Side Drawer Title -->
              <form class="search-form p-20 bordered">
                <div class="form-group mb-0">
                  <input type="search" class="form-control br-90" placeholder="Filter by name">
                </div>
              </form>
              <!-- Side Drawer Links -->
              <ul id="links" class="list-group p-20 pt-0" onclick="closeSideDrawer()">
                <a href="retailer-details.php" class="border-0 rounded-0 active">
                  <span>BuyDrug</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>mChemist</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>MediDart</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Medplus Mart</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Mera Pharmacy</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Netmeds</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Zigy</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>D'Mart</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Mymedical</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>MediBazaar</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>MetroOnline</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>BigBazaar</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Medplus Mart</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>BuyDrug</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Mera Pharmacy</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>MediBazaar</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>MetroOnline</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>BigBazaar</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Medplus Mart</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>BuyDrug</span>
                </a>
                <a href="retailer-details.php" class="border-0 rounded-0">
                  <span>Mera Pharmacy</span>
                </a>
              </ul>
          </div>
        </div>
        <div id="side-drawer-void" class="position-fixed d-none" onclick="closeSideDrawer()"></div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  <!-- footer -->
  <?php include 'footer.php';?>
  <script>
    //* Add note js retailer details page
    function myFunction() {
      var x = document.getElementById("note-div");
      var y = document.getElementById("note-label");
      if (x.style.display === "block") {
        x.style.display = "none";
        y.style.display = "block";
      } else {
        x.style.display = "block";
        y.style.display = "none";
      }
    }
    //* Sidebar js retailer details page
    function openSideDrawer() {
      document.getElementById("side-drawer").style.right ="0";
      document.getElementById("side-drawer-void").classList.add("d-block");
      document.getElementById("side-drawer-void").classList.remove("d-none");
    }
    function closeSideDrawer() {
      document.getElementById("side-drawer").style.right ="-336px";
      document.getElementById("side-drawer-void").classList.add("d-none");
      document.getElementById("side-drawer-void").classList.remove("d-block");
    }
  </script>
