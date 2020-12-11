<!-- header -->
<?php 
  $title = 'Create Invoice';
    include 'header.php';
?>

<style>
  .cancel-btn{padding:6px 12px;}
  .br-90{border-radius:90px;}
  ::-webkit-scrollbar{height:6px;}
</style>
<!-- partial -->
<div class="row">
  <div class="col-lg-12">
    <div class="card mb-3">
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="company">Company</label>
                    <select class="form-control" disabled/>
                      <option>Hindustan merchantile</option>
                      <option>Hindustan merchantile</option>
                      <option>Hindustan merchantile</option>
                      <option>Hindustan merchantile</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bill-number">Bill No.</label>
                    <input type="text" class="form-control" placeholder="Bill number" id="bill-number" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bill-date">Bill Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="Bill date" id="bill-date" disabled/>
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
                    <label for="bill-mode">Bill Mode</label>
                    <select class="form-control">
                      <option>Select bill mode</option>
                      <option>Cash</option>
                      <option>Credit</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="order-number">Order No.</label>
                    <input type="text" class="form-control" placeholder="Order number" id="order-number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="order-date">Order Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="Order date" id="order-date">
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
                    <label for="retailer">Retailer</label>
                    <select class="form-control">
                      <option>Select retailer</option>
                      <option>BuyDrug</option>
                      <option>mChemist</option>
                      <option>MediDart</option>
                      <option>Medplus Mart</option>
                      <option>Mera Pharmacy</option>
                      <option>Netmeds</option>
                      <option>Zigy</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="payment-mode">Payment Mode</label>
                    <select class="form-control">
                      <option>Select payment mode</option>
                      <option>Cash</option>
                      <option>Credit card</option>
                      <option>Debit card</option>
                      <option>Cheque</option>
                      <option>Digital payment</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="shipping-date">Shipping Date</label>
                    <div class="input-group">
                      <input type="search" class="form-control" data-provide="datepicker" placeholder="Shipping date" id="shipping-date">
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
                    <label for="shipping-address">Shipping Address</label>
                    <textarea class="form-control" row="8" Placeholder="Shipping address" id="shipping-address"></textarea>
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
          <table class="table custom-table" id="example">
            <thead>
              <tr>
                <th>SNo.</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Uom</th>
                <th>Qty</th>
                <th>Free Qty</th>
                <th>MRP</th>
                <th>Selling Rate</th>
                <th>Special Discount</th>
                <th>GST Rate</th>
                <th>GST Amount</th>
                <th>Gross Rate</th>
                <th>Gross Amount</th>
                <th>Net Rate</th>
                <th>Net Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>8503141</td>
                <td>MamyPoko Pants L4</td>
                <td>
                  <select class="form-control">
                    <option>Select option</option>
                    <option>Ps</option>
                    <option>Kar</option>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control">
                </td>
                <td>0</td>
                <td>1650</td> 
                <td>0</td>
                <td>
                  <input type="text" class="form-control">
                </td>
                <td>0</td>
                <td>0</td>
                <td>1147.36</td>
                <td>1147.36</td>
                <td>1147.36</td>
                <td>1147.36</td>
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
                    <label for="cash-discount">Cash Discount</label>
                    <input type="text" class="form-control" placeholder="Cash discount" id="cash-discount">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="tax">TCS Tax (1.0%)</label>
                    <input type="text" class="form-control" placeholder="TCS Tax" id="tax" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="other-charges">Other Charges</label>
                    <input type="text" class="form-control" placeholder="Other charges" id="other-charges">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="remark">Other Charges Remark</label>
                    <textarea type="text" class="form-control" placeholder="Other charges remark" id="remark" row="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="sales-value">Total Sales Value</label>
                    <input type="text" class="form-control" placeholder="1837.75" id="sales-value" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="replacement-diff">Replacement Diff</label>
                    <input type="text" class="form-control" placeholder="Replacement diff" id="replacement-diff">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="addtion">Total Addtion</label>
                    <input type="text" class="form-control" placeholder="Total addtion" id="addtion" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="deduction">Total Deduction</label>
                    <input type="text" class="form-control" placeholder="Total deduction" id="deduction" disabled/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="GST">Total GST Amount</label>
                    <input type="text" class="form-control" placeholder="Total GST amount" id="GST" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="net-amount">Total Net Amount</label>
                    <input type="text" class="form-control" placeholder="Total net amount" id="net-amount">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="receiveable-amount">Receiveable Net Amt</label>
                    <input type="text" class="form-control" placeholder="Receiveable net amount" id="receiveable-amount" disabled/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="remaining-amount">Remaining Amount</label>
                    <input type="text" class="form-control" placeholder="Remaining amount" id="remaining-amount" disabled/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="quantity">Total Qty</label>
                <input type="text" class="form-control" placeholder="Total quantity" id="quantity" disabled/>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="salesman">Salesman</label>
                <select class="form-control" disabled/>
                  <option>Select salesman</option>
                  <option>Sri Manjunatha Marketing</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="datetime">Datetime</label>
                <div class="input-group">
                  <input type="text" class="form-control" data-provide="datepicker" placeholder="Datetime" id="datetime" disabled/>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="remark">Remark</label>
                <textarea type="text" class="form-control" placeholder="Remark" id="remark"></textarea>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="btn btn-warning br-90"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
            </div>
            <div class="col-lg-6 text-right">
              <button type="button" class="btn btn-success br-90"><i class="fa fa-save" aria-hidden="true"></i> Save</button>
              <button type="button" class="btn btn-primary br-90"><i class="fa fa-cloud" aria-hidden="true"></i> Submit</button>
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