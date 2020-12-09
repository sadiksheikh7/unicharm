<!-- header -->
<?php 
  $title = 'Purchase Receipt';
    include 'header.php';
?>

<style>
  .cancel-btn{padding:6px 12px;}
  .br-90{border-radius:90px;}
  .cancel-btn{padding:6px 12px;}
</style>
<!-- partial -->

    
<div class="row">
  <div class="col-lg-12">
    <div class="card mb-3">
      <div class="card-body">
      <a href="add-retailer.php" type="button" class="btn btn-success btn-md mb-3 float-right"><i class="fa fa-plus" aria-hidden="true"></i> Add Purchase Receipt</a>

      <div class="table-responsive data-table">

      <table class="table custom-table" id="example">
        <thead class="Table-Header">

         <tr>
            <th rowspan="2">Product Code*...</th>
            <th rowspan="2">Product Name</th>
            <th rowspan="2">Batch*...</th>
            <th rowspan="2">MRP</th>
            <th colspan="2" class="text-center">Order Qty</th>
            <th colspan="2" class="text-center">Invoice Qty</th>
            <th colspan="2" class="text-center">Rcvd. GOod Qty</th>
            <th rowspan="2">Net Amount</th>
         </tr>

         <tr>

          <th class="text-center">Uom</th>

          <th class="text-center">Qty</th>
          <th class="text-center">Uom</th>
          <th class="text-center">Qty</th>
          <th class="text-center">Uom</th>
          <th class="text-center">Qty</th>

         </tr>

        </thead>
      
            <tbody>
              
               <tr>
                <td>IN00001995</td>
                <td>HINDUSTHAN MERCENTILE</td>
                <td>1231</td>
                <td>1056</td>
                <td>2097</td>
                <td>1458.34</td>
                <td>8989.43</td>
                <td>9898.43</td>
                <td>989.334</td>
                <td>324.324</td>
                <td>1022.23065448931</td>
              </tr>

              
               <tr>
                <td>IN00001995</td>
                <td>HINDUSTHAN MERCENTILE</td>
                <td>1231</td>
                <td>1056</td>
                <td>2097</td>
                <td>1458.34</td>
                <td>8989.43</td>
                <td>9898.43</td>
                <td>989.334</td>
                <td>324.324</td>
                <td>1022.23065448931</td>
              </tr>
              <tr>
                <td>IN00001995</td>
                <td>HINDUSTHAN MERCENTILE</td>
                <td>1231</td>
                <td>1056</td>
                <td>2097</td>
                <td>1458.34</td>
                <td>8989.43</td>
                <td>9898.43</td>
                <td>989.334</td>
                <td>324.324</td>
                <td>1022.23065448931</td>
              </tr>
              <tr>
                <td>IN00001995</td>
                <td>HINDUSTHAN MERCENTILE</td>
                <td>1231</td>
                <td>1056</td>
                <td>2097</td>
                <td>1458.34</td>
                <td>8989.43</td>
                <td>9898.43</td>
                <td>989.334</td>
                <td>324.324</td>
                <td>1022.23065448931</td>
              </tr>
              <tr>
                <td>IN00001995</td>
                <td>HINDUSTHAN MERCENTILE</td>
                <td>1231</td>
                <td>1056</td>
                <td>2097</td>
                <td>1458.34</td>
                <td>8989.43</td>
                <td>9898.43</td>
                <td>989.334</td>
                <td>324.324</td>
                <td>1022.23065448931</td>
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
