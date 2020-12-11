<!-- header -->
<?php 
  $title = 'Manage User';
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
        <a href="add-user.php" type="button" class="btn btn-success btn-md mb-3 float-right"><i class="fa fa-plus" aria-hidden="true"></i> Add User</a>
        <div class="table-responsive data-table">
          <table class="table custom-table" id="example">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>SRI MANJUNATHA MARKETING</td>
              <td>manjunathashri@gmail.com</td>
              <td>9437677207</td>
              <td>
              <button type="button" class="btn btn-success btn-md mr-1"><i class="fa fa-pencil mr-1" aria-hidden="true"></i> Edit</button>
                <button type="button" class="btn btn-danger btn-md mr-1"><i class="fa fa-trash mr-1" aria-hidden="true"></i> Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>TRADE N TRADE</td>
              <td>tradeintradi@gmail.com</td>
              <td>9435027627</td>
              <td>
              <button type="button" class="btn btn-success btn-md mr-1"><i class="fa fa-pencil mr-1" aria-hidden="true"></i> Edit</button>
              <button type="button" class="btn btn-danger btn-md mr-1"><i class="fa fa-trash mr-1" aria-hidden="true"></i> Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>M/s J P Enterprises</td>
              <td>nterprises@gmail.com</td>
              <td>9437764101</td>
              <td>
                <button type="button" class="btn btn-success btn-md mr-1"><i class="fa fa-pencil mr-1" aria-hidden="true"></i> Edit</button>
                <button type="button" class="btn btn-danger btn-md mr-1"><i class="fa fa-trash mr-1" aria-hidden="true"></i> Delete</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>PRADIP ENTERPRISE</td>
              <td>pradip@gmail.com</td>
              <td>7908620190</td>
              <td>
              <button type="button" class="btn btn-success btn-md mr-1"><i class="fa fa-pencil mr-1" aria-hidden="true"></i> Edit</button>
                <button type="button" class="btn btn-danger btn-md mr-1"><i class="fa fa-trash mr-1" aria-hidden="true"></i> Delete</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>HINDUSTHAN MERCENTILE</td>
              <td>sujitsinghania@gmail.com</td>
              <td>9437677207</td>
              <td>
                <button type="button" class="btn btn-success btn-md mr-1"><i class="fa fa-pencil mr-1" aria-hidden="true"></i> Edit</button>
                <button type="button" class="btn btn-danger btn-md mr-1"><i class="fa fa-trash mr-1" aria-hidden="true"></i> Delete</button>
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