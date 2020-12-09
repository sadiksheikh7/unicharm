<!-- header -->
<?php include 'header.php';?>
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
        <a href="create-invoice.php" type="button" class="btn btn-success btn-md mb-3 float-right"><i class="fa fa-plus" aria-hidden="true"></i> New Invoice</a>
        <div class="table-responsive data-table">
          <table class="table custom-table" id="example">
            <thead>
              <tr>
                <th>Date</th>
                <th>No</th>
                <th>Retailers</th>
                <th>Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>05-12-2020</td>
                <td>YQG22HOIJI0U</td>
                <td>BuyDrug</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 1,27,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>05-12-2020</td>
                <td>HR3DHH3ZVVNE</td>
                <td>mChemist</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 5,10,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>08-12-2020</td>
                <td>BN2000003</td>
                <td>MediDart</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 3,00,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>08-12-2020</td>
                <td>BN2000004</td>
                <td>Medplus Mart</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 81,835.00</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>

              <tr>
                <td>05-12-2020</td>
                <td>YQG22HOIJI0U</td>
                <td>BuyDrug</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 1,27,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>05-12-2020</td>
                <td>HR3DHH3ZVVNE</td>
                <td>mChemist</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 5,10,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>08-12-2020</td>
                <td>BN2000003</td>
                <td>MediDart</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 3,00,835.78</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
                </td>
              </tr>
              
              <tr>
                <td>08-12-2020</td>
                <td>BN2000004</td>
                <td>Medplus Mart</td>
                <td><i class="fa fa-rupee" aria-hidden="true"></i> 81,835.00</td>
                <td>
                  <a href="javascript:void(0);" class="mr-3">Edit</a>
                  <a href="javascript:void(0);" class="mr-0">Print</a>
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