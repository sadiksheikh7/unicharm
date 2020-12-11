<!-- header -->
  <?php 
	$title = 'Retailers';
    include 'header.php';
  ?>
  <style>
    .text-gray-300 {color: #dddfeb!important;}
    .text-gray-800 {color: #5a5c69!important;}
    .font-weight-bold {font-weight: 700!important;}
    .text-md{font-size:1.5rem;}
    .border-left-primary {border-left: .25rem solid #4e73df!important;}
    .border-left-success {border-left: .25rem solid #1cc88a!important;}
    .border-left-warning {border-left: .25rem solid #f6c23e!important;}
  </style>
  <!-- partial -->
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-3 border-left-primary py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-md font-weight-bold text-gray-800 mb-1">450</div>
                <div class="font-weight-bold text-uppercase mb-0">Total no. of Retailers</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-3 border-left-success py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-md font-weight-bold text-gray-800 mb-1">275</div>
                <div class="font-weight-bold text-uppercase mb-0">Total no. of Active Retailers</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-user-plus fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-3 border-left-warning py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-md font-weight-bold text-gray-800 mb-1">175</div>
                <div class="font-weight-bold text-uppercase mb-0">Total no. of Inactive Retailers</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-user-times fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="card mb-3">
          <div class="card-body">
            <a href="add-retailer.php" type="button" class="btn btn-success btn-md mb-3 float-right"><i class="fa fa-plus" aria-hidden="true"></i> Add Retailer</a>
            <div class="table-responsive data-table">
              <table class="table custom-table" id="example">
                <thead>
                  <tr>
                    <th>Retailer Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>GSTIN</th>
                    <th>Address</th>
                    <th>Create Invoice</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="first-column">
                      <a href="retailer-details.php" class="retailer-name">Dunzo Customer</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+81-705-5513-953</td>
                    <td>dunzo@gmail.com</td>
                    <td>---</td>
                    <td>C-Block, Sector-11, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">KARMANYAM TRADE AND WORKING AGENCY</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-755-5491-507</td>
                    <td>karmanyam@gmail.com</td>
                    <td>---</td>
                    <td>51 st Floor, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">PAWAN PHARMACEUTICALS  SURGICAL</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-855-5480-129</td>
                    <td>pawan-pharma@gmail.com</td>
                    <td>---</td>
                    <td>48 , Ashram Road, B/h City Gold, Ashram Road, Ahmedabad</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">GAYSHREE PHARMACEUTICALS  SURGICAL	</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-975-5591-888</td>
                    <td>gayshree@gmail.com</td>
                    <td>---</td>
                    <td>Sree Ij Patel High School, Behind Chandan Cinema, Juhu,  Mumbai</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">J KTRADERS</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-855-5798-315</td>
                    <td>jk_traders@gmail.com</td>
                    <td>---</td>
                    <td>26  Special Economic Zone, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">PICK ME STATIONERY</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-855-5903-050</td>
                    <td>pick_stationary@gmail.com</td>
                    <td>---</td>
                    <td>26  Special Economic Zone, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">NEW KANAK STORE</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="javascript:void(0);">
                            <span><b>AMIT BARFA</b></span>
                            <i class="fa fa-edit float-right text-muted" aria-hidden="true"></i>
                          </a>
                          <a class="dropdown-item" href="javascript:void(0);">Go to Ledger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send SMS</a>
                          <a class="dropdown-item" href="javascript:void(0);">Send Email</a>
                        </div>
                      </div>
                    </td>
                    <td>+91-855-5772-100</td>
                    <td>newkanak@gmail.com</td>
                    <td>---</td>
                    <td>51 st Floor, J S arcade, Sector, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
  <!-- footer -->
  <?php include 'footer.php';?>
