<!-- header -->
<?php 
  $title = 'Purchases A/C';
    include 'header.php';
?>
  

  

  <!-- partial -->
    <div class="row">
        <div class="col-lg-9 mx-auto">

        <div class="row">
          <div class="col-md-3">
            <div class="form-group input-search">
              <span class="fa fa-search"></span>
              <input type="search" class="form-control" placeholder="Search Ledger">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group input-search input-search-date">
              <span class="fa fa-calendar" data-provide="datepicker"></span>
              <input type="search" class="form-control" data-provide="datepicker" placeholder="Search Ledger">
            </div>
          </div>
          <div class="col-md-3">

          <div class="text-right">
            <a href="#" class="btn-round-icon"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="btn-round-icon"><i class="fa fa-download"></i></a>
          </div>

          </div>
        </div>

        <table class="width-100 table-ledger-head">
          <thead>
            <th class="width-50 pr-3">Reverse Charge is increasing ↑ <span class="pull-right text-light-gray">Dr</span></th>
            <th class="width-50">Reverse Charge is decreasing ↓ <span class="pull-right text-light-gray">Cr</span></th>
          </thead>
        </table>

          <div class="card mb-3">
          <div class="card-body p-0">
            
            <div class="table-responsive">
              <table class="main-ledger-table">
                <tr>
                  <td class="border-b-none width-50">
                    <table class="ledger-inner-table ledger-inner-table-dr">
                      <thead>
                        <tr>
                          <th style="width: 120px;">Date</th>
                          <th>Particular</th>
                          <th class="text-right">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <!-- main td end -->

                  <td class="width-50 border-b-none">
                  <table class="ledger-inner-table">
                  <thead>
                      <tr>
                        <th>Date</th>
                        <th>Particular</th>
                        <th class="text-right">Amount</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                        <tr>
                          <td>08-12-2020</td>
                          <td>To Sales</td>
                          <td class="text-right">10,013.33</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <!-- main td end -->
                </tr>

                
                <tr>
                  <td colspan="2" class="border-t-none p-3">
                    <div class="text-center d-flex flex-column align-items-center">
                    <p>0 transactions, 0 pages</p>
                    <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#">
                          First
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">
                          Previous
                          </a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">
                          Last
                          </a>
                        </li>
                      </ul>
                    </div>
                  </td>
                  </tr>

                <tr>
                  <td class="border-t-none p-3"></td>
                  <td class="p-3 font-14">By Balance C/F: <span class="text-blue">₹0.00</span></td>
                </tr>
                <tr>
                  <td class="p-3 font-14">₹0.00</td>
                  <td class="p-3 font-14">₹0.00</td>
                </tr>

              </table>
            </div>
            
          </div>
          </div>
        </div>
    </div>
  
  <!-- footer -->
  <?php include 'footer.php';?>
