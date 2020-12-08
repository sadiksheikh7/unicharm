<!-- header -->
  <?php 
	$title = 'Retailer';
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
                      <a href="retailer-details.php" class="retailer-name">Netmeds</a>
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
                    <td>netmeds@gmail.com</td>
                    <td>---</td>
                    <td>C-Block, Sector-11, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">Medplus Mart</a>
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
                    <td>medplus@gmail.com</td>
                    <td>---</td>
                    <td>51 st Floor, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">MediDart</a>
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
                    <td>medi_dart@gmail.com</td>
                    <td>---</td>
                    <td>48 , Ashram Road, B/h City Gold, Ashram Road, Ahmedabad</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">BuyDrug</a>
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
                    <td>buy-drug@gmail.com</td>
                    <td>---</td>
                    <td>Sree Ij Patel High School, Behind Chandan Cinema, Juhu,  Mumbai</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">Zigy</a>
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
                    <td>zigy@gmail.com</td>
                    <td>---</td>
                    <td>26  Special Economic Zone, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">mChemist</a>
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
                    <td>mchem@gmail.com</td>
                    <td>---</td>
                    <td>26  Special Economic Zone, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <a href="retailer-details.php" class="retailer-name">Mera Pharmacy</a>
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
                    <td>merapharma@gmail.com</td>
                    <td>---</td>
                    <td>51 st Floor, J S arcade, Sector, Noida</td>
                    <td>
                      <a href="javascript:void(0);" class="text-theme">Create Invoice</a>
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <th>Scheduled: 09</th>
                    <th></th>
                    <th class="text-success">Deposited: 02</th>
                    <th></th>
                    <th>$ 10,800.00</th>
                    <th class="text-success">$ 0.00</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
  <!-- footer -->
  <?php include 'footer.php';?>
