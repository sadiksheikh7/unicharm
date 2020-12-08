<!-- header -->
  <?php include 'header.php';?>

  <!-- partial -->

  <div class="row">
    <div class="col-md-9">
    <div class="row">
        <div class="col-lg-4">
          <div class="card mb-3">
          <div class="card">
            <div class="p-3 pr-3 border-bottom bg-light d-flex justify-content-between  align-items-center">
              <h4 class="card-title mb-0">Total Purchase </h4>
              <a href="javascript:void(0)" class="ml-2"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="card-body d-flex flex-column dashboard-box">
              <canvas class="my-auto" id="doughnutChart" height="100"></canvas>
              <div class="d-flex mt-5 py-2">
                <h5 class="mb-0">Total Purchase </h5>
                <h5 class="mb-0 ml-auto text-pink">₹2,464</h5>
              </div>
              <div class="d-flex pb-2">
                <p class="mb-0">Invoices</p>
                <p class="mb-0 ml-auto">₹0.00</p>
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card mb-3">
          <div class="card">
            <div class="p-3 pr-3 border-bottom bg-light d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Profit & Loss </h4>
              <a href="javascript:void(0)" class="ml-2"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="card-body d-flex flex-column dashboard-box">
              
              <div class="d-flex mt-5 py-2">
                <p class="mb-0">Net Profit/Loss</p>
                <p class="mb-0 ml-auto">₹0,00</p>
              </div>
              <div class="d-flex pb-2">
                <p class="mb-0">Total Income</p>
                <p class="mb-0 ml-auto text-warning">₹0.00</p>
              </div>
              <div class="d-flex pb-2">
                <p class="mb-0">Total Expenses</p>
                <p class="mb-0 ml-auto text-primary">₹0.00</p>
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card mb-3">
          <div class="card">
            <div class="p-3 pr-3 border-bottom bg-light d-flex justify-content-between  align-items-center">
              <h4 class="card-title mb-0">Expenses</h4>
              
              <div class="dropdown">
                <button class="btn icon-btn p-0" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-angle-down font-18"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                </div>
              </div>

            </div>
            <div class="card-body d-flex flex-column dashboard-box">
              <h4 class="bold mb-0">₹0</h4>
              <p>This month</p>
              
            </div>
          </div>
          </div>
        </div>
    </div>
    
    
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          
            <div class="row">
              <div class="col-md-8">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center pb-4">

                  <div class="d-flex">
                    <h4 class="card-title mb-0">Income</h4>

                    <div class="dropdown ml-2">
                      <button class="btn icon-btn p-0" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-angle-down font-18"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                      </div>
                    </div>
                  </div>

                  <div id="line-traffic-legend"></div>


                </div>
                
                <canvas id="lineChart" style="height:50px"></canvas>
              </div>

            </div>

            <div class="col-md-4 main-total-details">
                <div class="total-details">
                  <p>Total income (this week)</p>
                  <h3>₹0.00</h3>
                </div>

                <div class="total-details">
                  <p>Total income (last week)</p>
                  <h3>₹0.00</h3>
                </div>

                <div class="total-details">
                  <p>Highest income</p>
                  <h3>₹0.00</h3>
                </div>

                <div class="total-details">
                  <p>Lowest income</p>
                  <h3>₹0.00</h3>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>

          
    </div>
  </div>
  
  <!-- footer -->
  <?php include 'footer.php';?>
