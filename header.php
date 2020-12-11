<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UNICHARM</title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="assets/css/shared/dropify.min.css"> -->

    <!-- data table start -->
    <link rel="stylesheet" href="assets/css/vendor/data-table/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/data-table/buttons.bootstrap.min.css"> 
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css">-->
    <!-- data table start -->

    <!-- date picker -->
    <link rel="stylesheet" href="assets/css/vendor/date-picker/bootstrap-datepicker.min.css">

    <link rel="shortcut icon" href="assets/images/logo.png" />
  </head>
  <body>

  <div id="progress" class="waiting">
    <dt></dt>
    <dd></dd>
  </div>

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
            <a class="nav-link btn-white-border" href="javascript:void(0)">
              <i class="fa fa-plus"></i>
              Master
            </a>
          </li>


          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link count-indicator" id="UserDropdown-2" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell"></i>
              <span class="count">7</span> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown-2">
              <div class="notification-dropdown-inner">
                <div class="notification-dropdown-box">
                  <a href="#">
In multi-currency feature, sundry creditors will be created for the company's country only.</a></div>
                <div class="notification-dropdown-box"><a href="#"><label class="label category">New</label>
Sundry debtors and Sundry creditors get new custom field support from masters</a></div>
                <div class="notification-dropdown-box"><a href="#">Release Notes v7.0.79</a></div>
                <div class="notification-dropdown-box"><a href="#">
New date picker implemented in dashboard, vendor, aging report, customer and universal modules....</a></div>
            </div>

            <a href="notification.php" class="btn custom-blue btn-block">View all notification</a>
              </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" href="javascript:void(0)">
              <i class="fa fa-info-circle ml-2" style="font-size: 21px !important;"></i>
            </a>
          </li>

          

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
               
              <div class="admin-name clearfix">HM</div>
              
              <i  class="fa fa-angle-down"></i> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                
                <div class="text-center">
                  <div class="admin-name clearfix">HM</div>
                </div>
                
                  <p class="mb-1 mt-3 font-weight-semibold">HINDUSTHAN MERCENTILE</p>
                </div>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#AccountSetting" class="dropdown-item">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
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
            <div class="form-group input-search">
              <span class="fa fa-search"></span>
              <input type="search" class="form-control" placeholder="Search Here" data-toggle="modal" data-target="#searchModal">
            </div>


        </form>

          <ul class="nav">
            <li class="clearfix">
            <ul class="m-0 list-none mb-3">
              <h5 class="nav-title">Retailers</h5>
              <li class="nav-item <?= (@$title == "Retailers")?"active":""; ?>">
                <a class="nav-link" href="retailers.php">	
                  <span class="menu-title">Retailers</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Add Retailer")?"active":""; ?>">
                <a class="nav-link" href="add-retailer.php">
                  <span class="menu-title">Add Retailer</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Import Retailers")?"active":""; ?>">
                <a class="nav-link" data-toggle="modal" data-target="#importRetailer" href="javascript:void(0)">
                  <span class="menu-title">Import Retailers</span>
                </a>
              </li>
            </ul>
            </li>

            <li class="clearfix">
            <ul class="m-0 list-none mb-3">
              <h5 class="nav-title">Accounts</h5>
              <li class="nav-item <?= (@$title == "Purchases A/C")?"active":""; ?>">
                <a class="nav-link" href="ledger.php">
                  <span class="menu-title">Purchases A/C</span>
                </a>
              </li>
              
              <li class="nav-item <?= (@$title == "Purchase Receipt")?"active":""; ?>">
                <a class="nav-link" href="purchase-receipt.php">
                  <span class="menu-title">Purchase Receipt</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Purchase Payment")?"active":""; ?>">
                <a class="nav-link" href="javascript:void(0)">
                  <span class="menu-title">Add Purchase</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Purchase Return")?"active":""; ?>">
                <a class="nav-link" href="javascript:void(0)">
                  <span class="menu-title">Purchase Return</span>
                </a>
              </li>
            </ul>
            </li>


            <li class="clearfix">
            <ul class="m-0 list-none mb-3">
              <h5 class="nav-title">Billing</h5>
              <li class="nav-item <?= (@$title == "Invoices")?"active":""; ?>">
                <a class="nav-link" href="invoice.php">
                  <span class="menu-title">Invoices</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Create Invoice")?"active":""; ?>">
                <a class="nav-link" href="create-invoice.php">
                  <span class="menu-title">Create Invoice</span>
                </a>
              </li>
              <li class="nav-item <?= (@$title == "Billing Setting")?"active":""; ?>">
                <a class="nav-link" href="javascript:void(0)">
                  <span class="menu-title">Billing Setting</span>
                </a>
              </li>
            </ul>
            </li>

            <li class="clearfix">
            <ul class="m-0 list-none mb-3">
            <h5 class="nav-title">Menus</h5>

            <li class="nav-item <?= (@$title == "Dashboard")?"active":""; ?>">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Products")?"active":""; ?>">
              <a class="nav-link" href="products.php">
                <span class="menu-title">Products</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Inventory")?"active":""; ?>">
              <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title">Inventory</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Company")?"active":""; ?>">
              <a class="nav-link" data-toggle="modal" data-target="#AccountSetting" href="javascript:void(0)">  
                <span class="menu-title">Company</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Manage User")?"active":""; ?>">
              <a class="nav-link" href="manage-user.php">
                <span class="menu-title">Manage User</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Taxes")?"active":""; ?>">
              <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title">Taxes</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Financial Year")?"active":""; ?>">
              <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title">Financial Year</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Claim")?"active":""; ?>">
              <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title">Claim</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Settings")?"active":""; ?>">
              <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title">Settings</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "Reports")?"active":""; ?>">
              <a class="nav-link" href="reports.php">
                <span class="menu-title">Reports</span>
              </a>
            </li>
            <li class="nav-item <?= (@$title == "showMore")?"active":""; ?>">
              <a class="nav-link" href="all-modules.php">
                <span class="menu-title text-cyan bold">Show More..</span>
              </a>
            </li>
            </ul>
            </li>
            
          </ul>

        </nav>



    <div class="main-panel">

    <!-- <div class="top-advertisemen d-flex align-items-center justify-content-between">
      <h4 class="card-title mb-0"><span class="text-blue">Your 15 DAY Trial Plan ended on 23-08-2020. Apply to upgrade your subscription.</span></h4> <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
    </div> -->

    <div class="header-toggle d-flex align-items-center <?= (@$title == "showMore")?"d-none":""; ?>">
     <a href="javascript:void(0)" class="toggle-bar"><i class="fa fa-bars"></i></a> <h4 class="card-title mb-0"><?= (@$title != "")?$title:"Dashboard"; ?></a>
    </div>