<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UNICHARM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="assets/css/shared/dropify.min.css"> -->

    <!-- data table start -->
    <!-- <link rel="stylesheet" href="assets/css/shared/data-table/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/shared/data-table/buttons.bootstrap.min.css"> -->
    <!-- data table start -->

    <!-- date picker -->
    <!-- <link rel="stylesheet" href="assets/css/shared/date-picker/bootstrap-datepicker.min.css"> -->

    <link rel="shortcut icon" href="assets/images/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="assets/images/logo.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="assets/images/logo.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">

          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block pointer" data-toggle="modal" data-target="#AccountSetting">HINDUSTHAN MERCENTILE <i class="fa fa-angle-down font-16 ml-2"></i></li>
          </ul>

          <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link btn-white-border" href="#">
              <i class="fa fa-plus"></i>
              Master
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" href="#">
              <i class="fa fa-bell"></i>
              <span class="count">7</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" href="#">
              <i class="fa fa-info-circle ml-2" style="font-size: 21px !important;"></i>
            </a>
          </li>

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
               
              <img class="img-xs rounded-circle" src="assets/images/face16.jpg" alt="Profile image"> <i  class="fa fa-angle-down"></i> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/face16.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Sam</p>
                  <p class="font-weight-light text-muted mb-0">Sam@unicharm.com</p>
                </div>
                <a href="profile.php" class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <!-- <a href="upgrade-now.php" class="dropdown-item">Subscription</a>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteAccount" class="dropdown-item">Deactivate Account</a>
                <a href="javascript:void(0)" class="dropdown-item">Desactive Notifications</a> -->
                <a href="login.php" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <form class="ml-auto search-form d-none d-md-block" action="#">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="Search Here">
          </div>
        </form>

          <ul class="nav">
            <!-- <li class="nav-item nav-profile">
              <a href="javascript:void(0)" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/face16.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Justin Thibeault</p>
                  <p class="designation">Admin</p>
                </div>
              </a>
            </li> -->

            <!-- <li>
              <a class="nav-link pb-0" href="javascript:void(0)"><p class="mb-0 semi-bold">Company Profile </p></a>
            </li> -->


            

            
            
            
            <li class="clearfix">
                <ul class="m-0 list-none mb-3">
                  <h5 class="nav-title">Retailer Management</h5>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">
                      <span class="menu-title">Retailers</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Add Retailer</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Import Retailers</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="clearfix">
                <ul class="m-0 list-none mb-3">
                  <h5 class="nav-title">Accounts</h5>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Purchases A/C</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Purchase Order</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Purchase Receipt</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Purchase Payment</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <span class="menu-title">Purchase Return</span>
                    </a>
                  </li>
                </ul>
              </li>
              

              <li class="clearfix">
                <ul class="m-0 list-none mb-3">
                  <h5 class="nav-title">Billing</h5>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Invoices</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Create Invoice</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Billing Setting</span>
                    </a>
                  </li>
                </ul>
              </li>

            <li class="clearfix">
              <ul class="m-0 list-none mb-3">
              <h5 class="nav-title">Menus</h5>

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Products</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Inventory</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Company</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Manage User</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Taxes</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Financial Year</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Claim</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Settings</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title">Reports</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="menu-title text-cyan bold">Show More..</span>
                  </a>
                </li>
              </ul>
            </li>

            
          


            <!-- <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
             <li>
              <a class="nav-link pb-0" href="javascript:void(0)"><p class="mb-0 semi-bold">Budget</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#budget" aria-expanded="false" aria-controls="budget">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Budget</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="budget">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Income</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Expenses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Debit Accounts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Assets</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">liabilities</a>
                  </li>
                </ul>
              </div>
            </li> -->
            
            
          </ul>

        </nav>



    <div class="main-panel">

    <!-- <div class="top-advertisemen d-flex align-items-center justify-content-between">
      <h4 class="card-title mb-0"><span class="text-blue">Your 15 DAY Trial Plan ended on 23-08-2020. Apply to upgrade your subscription.</span></h4> <a href="#"><i class="fa fa-times"></i></a>
    </div> -->

    <div class="header-toggle d-flex align-items-center">
     <a href="javascript:void(0)" class="toggle-bar"><i class="fa fa-bars"></i></a> <h4 class="card-title mb-0">Dashboard</a>
    </div>