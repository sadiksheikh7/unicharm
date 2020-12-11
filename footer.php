<style>
  .notification-box{
    border:1px solid #eee;
    padding:20px;
  }
  /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 52px;
  height: 25px;
  float:right;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
  .slider.round {
    border-radius: 34px;
  }
  .slider.round:before {
    border-radius: 50%;
  }
</style>
<!-- <footer class="footer">
<div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block mt-3">© 2020 CREDOM, Inc. Patent Pending. All rights reserved.
    </span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> CREDOM®, the CREDOM name, associated trademarks and logos are trademarks of CREDOM, Inc. or related entities. 
    <br>Terms, conditions, <a href="javascript:void(0)" target="_blank">features</a> availability,  <a href="javascript:void(0)" target="_blank">pricing</a> service, assistance and support options are subject to change without notice.</span>
</div>
</footer> -->
<!-- partial -->
</div>


<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>



<!-- Modal -->
<div class="modal custom-modal modal-profile" id="AccountSetting" tabindex="-1" aria-labelledby="AccountSettingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-none">
      <div class="modal-header">
        <h5 class="modal-title" id="AccountSettingLabel">Account And Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pl-0 pr-0">
      <div class="row">
        <div class="col-lg-2">
          <div class="nav flex-column nav-pills tabs-list" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
            <a id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Change Password</a>
            <a id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Notification Settings</a>
            <a id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Setting</a>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              
              <div class="setting-tab-box">
                <div class="setting-tab-box-edit toggletag">
                  <a href="#" class="edit-profile-btn clickme"><i class="fa fa-pencil"></i></a>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <label class="bold">Company Name</label>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-7 toggletag">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label>Company Name</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <label class="label-form">HINDUSTHAN MERCENTILE</label>
                      <input type="text" class="form-control mb-3" value="HINDUSTHAN MERCENTILE">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label class="label-form">Contect Person</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <label class="label-form">SUJIT SINGHANIA</label>
                      <input type="text" class="form-control mb-3" value="SUJIT SINGHANIA">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label class="label-form">Legal name</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <label class="text-light">Same as company name</label>
                      <input type="text" class="form-control mb-3" value="SUJIT SINGHANIA">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label class="label-form">PAN</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="AAEFH9509B">
                      <label class="label-form">AAEFH9509B</label>
                    </div>
                  </div>
                  <!-- row end -->
                  

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label class="label-form">Pin Code</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="781335">
                      <label class="label-form">781335</label>
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row mb-2">
                    <div class="col-md-2">
                      <label class="label-form"></label>
                    </div>
                    <div class="col-md-3">
                      <label class="label-form">User Name</label></div>
                    <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="IN00001995">
                      <label class="label-form">IN00001995</label>
                    </div>
                  </div>
                  <!-- row end -->

                </div>
                <hr>

              <div class="setting-tab-box-edit">
                <a href="#" class="edit-profile-btn"><i class="fa fa-pencil"></i></a>

                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="bold">GST details</label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">GST Number</label></div>
                  <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="18AAEFH9509B1ZI">
                    <label class="label-form">18AAEFH9509B1ZI</label>
                  </div>
                </div>
                <!-- row end -->


              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">GST  State</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="Assam">
                  <label class="label-form">Assam</label>
                </div>
              </div>
              <!-- row end -->

              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">GST State Code</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="18AABCU9603R1ZM">
                  <label class="label-form">18AABCU9603R1ZM</label>
                </div>
              </div>
              <!-- row end -->
                <hr>
                </div>


                <div class="setting-tab-box-edit">
                <a href="#" class="edit-profile-btn"><i class="fa fa-pencil"></i></a>

                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="bold">Official details</label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">ASM Name</label></div>
                  <div class="col-md-7 toggletag">
                    <input type="text" class="form-control mb-3" value="Saurabh Sarmah">
                    <label class="label-form">Saurabh Sarmah</label>
                  </div>
                </div>
                <!-- row end -->


              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">ASM Contact Number</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="9980225248">
                  <label class="label-form">9980225248</label>
                </div>
              </div>
              <!-- row end -->
              
              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">SM Name</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="Assam">
                  <label class="label-form">Assam</label>
                </div>
              </div>
              <!-- row end -->

              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">SM Contact Number</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="9980225248">
                  <label class="label-form">9980225248</label>
                </div>
              </div>
              <!-- row end -->
              

              <div class="row mb-2">
                <div class="col-md-2">
                  <label class="label-form"></label>
                </div>
                <div class="col-md-3">
                  <label class="label-form">Aadhar Card Number</label></div>
                <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="IN00001995">
                  <label class="label-form">IN00001995</label>
                </div>
              </div>
              <!-- row end -->
                <hr>
            </div>

                <div class="setting-tab-box-edit">
                  <a href="#" class="edit-profile-btn"><i class="fa fa-pencil"></i></a>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <label class="bold">Company type</label>
                    </div>
                    <div class="col-md-3">
                      <label class="label-form">Text form</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="-">
                      <label class="label-form">-</label>
                    </div>
                  </div>
                  
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <label class="label-form"></label>
                    </div>
                    <div class="col-md-3">
                      <label class="label-form">Industry</label>
                    </div>
                    <div class="col-md-7 toggletag">
                      <input type="text" class="form-control mb-3" value="-">
                      <label class="label-form">-</label>
                    </div>
                  </div>
                  <!-- row end -->
                  <hr>
                </div>


              <div class="setting-tab-box-edit">
                <a href="#" class="edit-profile-btn"><i class="fa fa-pencil"></i></a>
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="bold">Contact info</label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Company email</label>
                  </div>
                  <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="customercare@unicharm.com">
                    <label class="label-form">customercare@unicharm.com</label>
                  </div>
                </div>
                
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="label-form"></label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Company-facing email</label>
                  </div>
                  <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="customercare@unicharm.com">
                    <label class="label-form">customercare@unicharm.com</label>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="label-form"></label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Company phone</label>
                  </div>
                  <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="9435027627">
                    <label class="label-form">9435027627</label>
                  </div>
                </div>
                
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="label-form"></label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Website</label>
                  </div>
                  <div class="col-md-7 toggletag">
                  <input type="text" class="form-control mb-3" value="http://www.unicharm.co.in/">
                    <label class="label-form">http://www.unicharm.co.in/</label>
                  </div>
                </div>
                <hr>
              </div>
                
              <div class="setting-tab-box-edit">
                <a href="#" class="edit-profile-btn"><i class="fa fa-pencil"></i></a>
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="bold">Address</label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Company address</label>
                  </div>
                  <div class="col-md-7 toggletag">
                    <label class="bold label-form">C/O--SANTOSH RABHA, H/NO--101,BINOVA NAGAR,LUTUMA, GUWAHATI,ASSAM</label>
                  <textarea class="textarea form-control" value="C/O--SANTOSH RABHA, H/NO--101,BINOVA NAGAR,LUTUMA, GUWAHATI,ASSAM"></textarea>
                  </div>
                </div>
                
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="label-form"></label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Company-facing address</label>
                  </div>
                  <div class="col-md-7 toggletag">
                    <textarea class="textarea form-control" value="C/O--SANTOSH RABHA, H/NO--101,BINOVA NAGAR,LUTUMA, GUWAHATI,ASSAM"></textarea>
                    <label class="text-light label-form">Same as company name</label>
                  </div>
                </div>
                
                <div class="row mb-2">
                  <div class="col-md-2">
                    <label class="label-form"></label>
                  </div>
                  <div class="col-md-3">
                    <label class="label-form">Legal address</label>
                  </div>
                  <div class="col-md-7 toggletag">
                    <textarea class="textarea form-control" value="C/O--SANTOSH RABHA, H/NO--101,BINOVA NAGAR,LUTUMA, GUWAHATI,ASSAM"></textarea>
                    <label class="text-light label-form">Same as company name</label>
                  </div>
                </div>
              </div>

              </div>

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              
              <div class="setting-tab-box">
              <div class="setting-tab-box-edit">
                  <a href="#" class="edit-profile-btn clickme"><i class="fa fa-pencil"></i></a>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <label class="bold">Password</label>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-7 toggletag">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label>Old password</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control mb-3" value="***********">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label>New passwored</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control mb-3">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label>Confirm password</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control mb-3">
                    </div>
                  </div>
                  <!-- row end -->

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                      <label><button type="button" class="btn custom-blue">Update password</button></label>
                    </div>
                    <div class="col-md-7">
                      
                    </div>
                  </div>
                  <!-- row end -->
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div class="setting-tab-box">
                <div class="setting-tab-box-edit">
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="notification-box">
                        <h4><b>Notification Settings</b></h4>
                        <hr>
                        <div class="row mb-2">
                          <div class="col-md-10">
                            <label class="label-form">
                              <b>Notifications</b>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label class="switch ">
                              <input type="checkbox" class="primary">
                              <span class="slider round"></span>
                            </label>
                          </div>
                        </div>
                        <!--<div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <b>Unicahrm Updates</b>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label><i class="fa fa-clone" aria-hidden="true"></i> Push</label>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-md-12">
                            <hr>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Product News</span><br>
                              <small>Getting started, new features and the latest product updates on Unicharm</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Unicharm News and Offers</span><br>
                              <small>News, promos and events for you</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-12">
                            <label class="label-form">
                              <span><b>Your Music</b></span><br>
                            </label>
                            <hr>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Add Retailer</span><br>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>New Music</span><br>
                              <small>Fresh tracks from artists you follow or might like</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Playlist Updates</span><br>
                              <small>A playlist you folloe is updated</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Concert Notifications</span><br>
                              <small>Updates about live shows by artists you like, in places near you</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>
                        
                        <div class="row mb-2">
                          <div class="col-md-8">
                            <label class="label-form">
                              <span>Artist Updates</span><br>
                              <small>Hear about artists you listen to</small>
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                          <div class="col-md-2 text-center">
                            <label>
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>      
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
          </div>
        </div>
      </div>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


<!-- import retailers Modal -->
<div class="modal custom-modal modal-profile" id="importRetailer" tabindex="-1" aria-labelledby="importRetailerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-none">
      <div class="modal-header">
        <h5 class="modal-title" id="importRetailerLabel">Import Retailer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pl-0 pr-0">
        
      <div class="import-retailer text-center">
        <p class="mb-05 text-light">Have retailers data in Excel files?</p>
        <p class="text-light">It’s easy to import from your computer</p>
        <h2>Import Retailer</h2>

        <!--  -->
        <div class="main-file-upload">
          <label for="uploadlogo2" class="main-file-upload-label">
            <div class="text-center">
              <img src="assets/images/import-icon.svg" alt="">
              <p>Drop CSV or Excel file to upload</p>
            </div>
            <div class="fileUpload">
              <span>Upload your Organizations logo</span>
              <input type="file" id="uploadlogo2" class="uploadlogo" />
            </div>
          </label>

          <div class="clearfix">
            <a href="#" class="d-inline-block pull-left">Download a sample Excel file </a>
            <a href="#" class="d-inline-block pull-right">Download a sample Csv file </a>
          </div>
        </div>
        <!--  -->
      </div>
        
      </div>
    </div>
  </div>
</div>
<!-- import retailers Modal end -->





<!-- Search Modal -->
<div class="modal custom-modal search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-none">
      <div class="modal-body pl-0 p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="inner-search-modal">
          <input class="custom-search" type="text" placeholder="Search.." autofocus>

          <?php 
            include 'search.php';
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Search Modal end -->


  <!-- <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/js/shared/off-canvas.js"></script>
  <script src="assets/js/shared/misc.js"></script>
  <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>

  <script src="assets/js/shared/dropify.min.js"></script> -->


<script type="text/javascript" src="assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/popper.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/animate/wow.min.js"></script>

<!-- date picker -->
<script src="assets/js/vendor/date-picker/bootstrap-datepicker.min.js"></script>


  <!-- data table js start -->
<script src="assets/js/vendor/data-table/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/vendor/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/vendor/data-table/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="assets/js/vendor/data-table/vfs_fonts.js"></script>
<script src="assets/js/vendor/data-table/buttons.html5.min.js"></script>
<script src="assets/js/vendor/data-table/buttons.print.min.js"></script>

<!-- select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- select2 end -->


<!-- data table js end -->
<script src="assets/js/custom.js"></script>

<!-- chart js -->
<script src="assets/js/vendor/chart/vendor.bundle.base.js"></script>
<script src="assets/js/vendor/chart/misc.js"></script>
<script src="assets/js/vendor/chart/chart.js"></script> 
<!-- chart js end -->



</body>
</html>
