<!-- header -->
  <?php include 'header.php';?>
  <style>
    .table-droppy{
      display:none;
    }
  </style>
  <!-- partial -->
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-body">
            <div class="box-wrap">
              <div class="number">
                <h3 class="text-muted">450</h3>
              </div>
              <div class="content">
                <h5 class=""><b>Total no. of Retailers</b></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-body">
            <div class="box-wrap">
              <div class="number">
                <h3 class="text-muted">225</h3>
              </div>
              <div class="content">
                <h5 class=""><b>Total no. of Active Retailers</b></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-body">
            <div class="number">
                <h3 class="text-muted">105</h3>
              </div>
              <div class="content">
                <h5 class=""><b>Total no. of inactive Retailers</b></h5>
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
                      <a href="javascript:void(0);" class="retailer-name">Netmeds</a>
                      <div class="dropdown float-right table-droppy">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">Medplus Mart</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">MediDart</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">BuyDrug</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">Zigy</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">mChemist</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
                      <a href="javascript:void(0);" class="retailer-name">Mera Pharmacy</a>
                      <div class="dropdown float-right">
                        <a role="button" type="button" data-toggle="dropdown">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
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
