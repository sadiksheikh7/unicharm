<!-- header -->
<?php 
  $title = 'Add purchase';
    include 'header.php';
?>

<style>
  .cancel-btn{padding:6px 12px;}
  .br-90{border-radius:90px;}
  ::-webkit-scrollbar{height:6px;}
</style>
<!-- partial -->
<div class="clearfix">
  <div class="clearfix">
    <div class="card mb-3">
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="InvReference">Inv Reference</label>
                    <input type="text" class="form-control" placeholder="Inv Reference" id="inv-reference"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bill-number">Company</label>
                    <input type="text" class="form-control" placeholder="Company" id="Company"/>
                  </div>
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bill-number">Supplier</label>
                    <input type="text" class="form-control" placeholder="Supplier" id="supplier"/>
                  </div>
                </div>
              </div>

              
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bill-number">Purchase Order No</label>
                    <input type="text" class="form-control" placeholder="Purchase Order No" id="purchase-order-no"/>
                  </div>
                </div>
              </div>

              
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="purchase-order-no">Purchase Order Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="Order date" id="purchase-order-no">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="company-inv-no">Company Inv No</label>
                    <input type="text" class="form-control" placeholder="Order number" id="company-inv-no">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="order-date">Invoice Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="Invoice date" id="order-date">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" placeholder="Location" id="location">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="transporter">Transporter</label>
                    <input type="text" class="form-control" placeholder="Transporter" id="transporter">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="handling-charges">Handling Charges</label>
                    <input type="text" class="form-control" placeholder="Handling Charges" id="handling-charges">
                  </div>
                </div>
              </div>


            </div>
            <div class="col-lg-4">
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="LR-No">LR No</label>
                    <input type="text" class="form-control" placeholder="LR No" id="LR-No">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="LR-Date">LR Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="LR Date" id="LR-Date">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="Net-Payable">Net Payable</label>
                    <input type="text" class="form-control" placeholder="Net Payable" id="Net-Payable">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="Difference">Difference</label>
                    <input type="text" class="form-control" placeholder="Difference" id="Difference">
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <a href="javascript:void(0);" type="button" class="btn btn-success btn-md float-right" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>
      </div>
      <div class="card-body">
        <div class="table-responsive data-table">
          <table class="table custom-table custom-table-border" id="example">
            <thead class="Table-Header">
            <tr>
                <th rowspan="2">SNo.</th>
                <th rowspan="2">Product Code</th>
                <th rowspan="2">Product Name</th>
                <th rowspan="2">MRP</th>
                <th class="text-center" colspan="2">Invoice Qty	</th>
                <th class="text-center" colspan="2">Received Goods Qty</th>
                <th class="text-center" colspan="2">Damaged Qty	</th>
                <th class="text-center" colspan="2">Sortage Qty	</th>
                <th rowspan="2">LSP</th>
                <th rowspan="2">Tax Value</th>
                <th rowspan="2">Net Rate</th>
                <th rowspan="2">Net Amount</th>
                <th rowspan="2">Discount</th>
                <th rowspan="2">Gross Amount</th>
                <th rowspan="2">Action</th>
              </tr>
              <tr>
                <th>Uom</th>
                <th>Qty</th>
                <th>Uom</th>
                <th>Qty</th>
                <th>Uom</th>
                <th>Qty</th>
                <th>Uom</th>
                <th>Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>8503141</td>
                <td>MamyPoko Pants L4</td>
                <td>
                  <input type="number" class="form-control" value="1320" disabled>

                  
                </td>
                <td>
                  <select class="form-control">
                    <option>Select option</option>
                    <option>Ps</option>
                    <option>Kar</option>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control" value="22">
                </td>
                <td>
                  <select class="form-control">
                    <option>Select option</option>
                    <option>Ps</option>
                    <option>Kar</option>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control" value="22">
                </td>
                <td>
                  <select class="form-control">
                    <option>Select option</option>
                    <option>Ps</option>
                    <option>Kar</option>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control" value="22">
                </td>

                <td>
                  <select class="form-control">
                    <option>Select option</option>
                    <option>Ps</option>
                    <option>Kar</option>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control" value="22">
                </td>
                <td>
                  <input type="number" class="form-control" value="574">
                </td>
                <td>
                  <input type="number" class="form-control" value="2452">
                </td>
                <td>
                  <input type="number" class="form-control" value="454">
                </td>
                <td>
                  <input type="number" class="form-control" value="4545">
                </td>
                <td>
                  <input type="number" class="form-control" value="1424">
                </td>
                <td>
                  <input type="number" class="form-control" value="22">
                </td>

                
                <td>
                  <button type="button" class="btn btn-danger cancel-btn btn-md br-90"><i class="fa fa-trash mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="cash-discount">TCS Tax (1.0%)</label>
                    <input type="text" class="form-control" placeholder="TCS Tax (1.0%)" id="tcs">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="tax">Invoice Qty</label>
                    <input type="text" class="form-control" placeholder="Invoice Qty" id="qty" disabled/>
                  </div>
                </div>
              </div>
              
              
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="sales-value">Total Amount</label>
                    <input type="text" class="form-control" placeholder="1837.75" id="sales-value" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="replacement-diff">Discount</label>
                    <input type="text" class="form-control" placeholder="Discount" id="replacement-diff">
                  </div>
                </div>
              </div>
              
              
            </div>

            <div class="col-lg-4">

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="replacement-diff">Other Charges</label>
                    <input type="text" class="form-control" placeholder="Other Charges" id="other-charges">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="Net-Amount">Net Amount</label>
                    <input type="text" class="form-control" placeholder="Discount" id="Net-Amount">
                  </div>
                </div>
              </div>

            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="btn btn-warning br-90"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
            </div>
            <div class="col-lg-6 text-right">
              <!-- <button type="button" class="btn btn-success br-90"><i class="fa fa-save" aria-hidden="true"></i> Save</button>
              <button type="button" class="btn btn-primary br-90"><i class="fa fa-cloud" aria-hidden="true"></i> Submit</button> -->
              <a href="purchase-receipt.php" class="btn btn-success br-90"><i class="fa fa-save" aria-hidden="true"></i> Save</a>
              <a href="purchase-receipt.php" class="btn btn-primary br-90"><i class="fa fa-cloud" aria-hidden="true"></i> Submit</a>
              <button type="button" class="btn btn-danger cancel-btn br-90"><i class="fa fa-trash" aria-hidden="true"></i> Cancel</button>
            </div>
          </div>
        <form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
  
<!-- footer -->
<?php include 'footer.php';?>

<!-- Add Product Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="table-responsive data-table">
          <table class="table custom-table table-bordered" id="example">
            <thead>
              <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>8503137</td>
                <td>MamyPoko Pants M1Price Off</td>
                <td>
                  <button type="button" class="btn btn-success btn-md br-90"><i class="fa fa-plus mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>8503130</td>
                <td>MamyPoko Pants M1</td>
                <td>
                  <button type="button" class="btn btn-success btn-md br-90"><i class="fa fa-plus mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>3203130</td>
                <td>MamyPoko Pants M1</td>
                <td>
                  <button type="button" class="btn btn-success btn-md br-90"><i class="fa fa-plus mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>3203131</td>
                <td>MamyPoko Pants M3</td>
                <td>
                  <button type="button" class="btn btn-success btn-md br-90"><i class="fa fa-plus mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>8503131</td>
                <td>MamyPoko Pants M4</td>
                <td>
                  <button type="button" class="btn btn-success btn-md br-90"><i class="fa fa-plus mr-0" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>