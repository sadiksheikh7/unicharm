<!-- header -->
<?php 
  $title = 'Products';
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
      <div class="table-responsive data-table">
          <table class="table custom-table" id="example">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Category</th>
                <th>HSN Code</th>
                <th>MRP</th>
                <th>LSP (TT)</th>
                <th>LSP (SS)</th>
                <th>Status(Active/ Inactive)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MamyPoko Pants M1</td>
                <td>8503130</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1560</td>
                <td>1084.77970627503</td>
                <td>1063.11988066888</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M3</td>
                <td>3203131</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1560</td>
                <td>1084.77970627503</td>
                <td>1063.11988066888</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M9</td>
                <td>3203132</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1320</td>
                <td>917.890520694259</td>
                <td>899.562975950593</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M9</td>
                <td>8503132</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1320</td>
                <td>917.890520694259</td>
                <td>899.562975950593</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M20</td>
                <td>3203133</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1410</td>
                <td>980.473965287049</td>
                <td>960.896815219951</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M44+4</td>
                <td>3213134</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1996</td>
                <td>1387.96172674677</td>
                <td>1360.24825757377</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L1Price Off</td>
                <td>8503147</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1440</td>
                <td>1001.33511348465</td>
                <td>981.341428309737</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L1</td>
                <td>8503140</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1680</td>
                <td>1168.22429906542</td>
                <td>1144.89833302803</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L4</td>
                <td>8503141</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1650</td>
                <td>1147.36315086782</td>
                <td>1124.45371993824</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L8</td>
                <td>3203142</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1320</td>
                <td>917.890520694259</td>
                <td>899.562975950593</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L20</td>
                <td>3203143</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1590</td>
                <td>1105.64085447263</td>
                <td>1083.56449375867</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants L38</td>
                <td>3203144</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1996</td>
                <td>1387.96172674677</td>
                <td>1360.24825757377</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants XL1Price Off</td>
                <td>8503157</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1920</td>
                <td>1335.11348464619</td>
                <td>1308.45523774632</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants XL1</td>
                <td>3203150</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>2160</td>
                <td>1502.00267022697</td>
                <td>1472.01214246461</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants XL7</td>
                <td>3203152</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1500</td>
                <td>1043.05740987984</td>
                <td>1022.23065448931</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants XL16</td>
                <td>3203153</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>2200</td>
                <td>1529.81753449043</td>
                <td>1499.27162658432</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants S1Price Off</td>
                <td>8503120</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1080</td>
                <td>751.001335113485</td>
                <td>736.006071232303</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M20 (R1)</td>
                <td>8503231</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>1880</td>
                <td>1307.29862038273</td>
                <td>1360.24825757377</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants XL1 (R1)</td>
                <td>8503252</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>2160</td>
                <td>1502.00267022697</td>
                <td>1472.01214246461</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>MamyPoko Pants M 64</td>
                <td>8503138</td>
                <td>Baby Care</td>
                <td>96190030</td>
                <td>2097</td>
                <td>1458.19425901202</td>
                <td>1022.23065448931</td>
                <td><span class="badge badge-success">Active</span></td>
                <td>
                  <button type="button" class="btn btn-secondary btn-md mr-3 br-90"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                  <button type="button" class="btn btn-danger cancel-btn btn-md mr-3 br-90"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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
