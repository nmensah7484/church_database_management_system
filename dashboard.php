<?php include_once('connection4.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parousia Congregation - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Include Font Awesome CSS for the icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3"><sup></sup>PAROUSIA CONGREGATION </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#member"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>Church Members</span>
                </a>
                <div id="member" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h class="collapse-header"></h6>
                        <a class="collapse-item" href="membertable.php">View all church member</a>
                        <a class="collapse-item" href="memberform2.php">Add Member</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#womens"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Women's Fellowship</span>
                </a>
                <div id="womens" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="womenstable.php">View all members</a>
                        <a class="collapse-item" href="womensform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mens"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Men's Fellowship</span>
                </a>
                <div id="mens" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="menstable.php">View all members</a>
                        <a class="collapse-item" href="mensform.php">Add members</a>
                        
                    </div>
                </div>
            </li>




            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Technicalteam"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Technical Team</span>
                </a>
                <div id="Technicalteam" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Tteamtable.php">View all members</a>
                        <a class="collapse-item" href="Tteamform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Singing Band</span>
                </a>
                <div id="collapse" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Sbandtable.php">View all members</a>
                        <a class="collapse-item" href="Sbandform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#parousiavoices"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Parousia Voices</span>
                </a>
                <div id="parousiavoices" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Pvoicestable.php">View all members</a>
                        <a class="collapse-item" href="Pvoicesform.php">Add members</a>
                        
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Parousiachoir"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Parousia Choir</span>
                </a>
                <div id="Parousiachoir" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Pchoirtable.php">View all members</a>
                        <a class="collapse-item" href="Pchoirform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Sessionmembers"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Session members</span>
                </a>
                <div id="Sessionmembers" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Smemberstable.php">View all members</a>
                        <a class="collapse-item" href="Smembersform.php">Add members</a>
                        
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brigade"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Brigade</span>
                </a>
                <div id="brigade" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Brigadetable.php">View all members</a>
                        <a class="collapse-item" href="Brigadeform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bspg"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>B.S.P.G Prayer Tower</span>
                </a>
                <div id="bspg" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Bspgtable.php">View all members</a>
                        <a class="collapse-item" href="Bspgform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ushers"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Ushers</span>
                </a>
                <div id="ushers" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="Usherstable.php">View all members</a>
                        <a class="collapse-item" href="ushersform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jy"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>JY</span>
                </a>
                <div id="jy" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="jytable.php">View all members</a>
                        <a class="collapse-item" href="jyform.php">Add members</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#inventory"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class=""></i>
                    <span>Inventory</span>
                </a>
                <div id="inventory" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="inventorytable.php">View all</a>
                        <a class="collapse-item" href="inventoryform.php">Add inventory</a>
                        
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Parousia Admin</span>
                                <img class="img-profile rounded-circle"
                                     src="https://e0.365dm.com/23/07/2048x1152/skysports-lionel-messi-inter-miami_6230632.jpg" alt="Profile Image">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <button id="generateReportBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
                    </div>

                    <script>
        document.getElementById('generateReportBtn').addEventListener('click', function() {
            // Call the server-side script to generate the report
            // In this example, we'll use a PHP script to generate a simple text report
            fetch('generate_report.php')
                .then(response => response.text())
                .then(reportText => {
                    // Create a Blob (binary large object) with the report text
                    const blob = new Blob([reportText], { type: 'text/plain' });

                    // Create a URL for the Blob
                    const url = URL.createObjectURL(blob);

                    // Create a download link
                    const downloadLink = document.createElement('a');
                    downloadLink.href = url;
                    downloadLink.download = 'report.txt';
                    downloadLink.click();

                    // Clean up
                    URL.revokeObjectURL(url);
                });
        });
    </script>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Members</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">254</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-users fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="membertable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>
                        


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Women's Fellowship</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">71</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fa fa-female fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="womenstable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Men's Fellowship</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">28</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fa fa-male fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="menstable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Technical Team</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-form fa-2x text-gray-300"></i>
                                            <i class="fas fa-cogs fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Tteamtable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Singing Band</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-microphone-alt fa-3x fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Sbandtable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Parousia Choir</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-microphone-alt fa-3x fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Pchoirtable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Parousia Voices
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">6</div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-microphone-alt fa-3x fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Pvoicestable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JY </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">1</div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-users fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Jytable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Session Members
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-users fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Smemberstable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Brigade</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class=" fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Brigadetable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                B.S.P.G Prayer Tower</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-pray fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Bspgtable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>




                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Ushers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-Form fa-2x text-gray-300"></i>
                                            <i class="fas fa-users fa-3x"></i>

                                        </div>
                                    </div>
                                    <a class="collapse-item" href="Usherstable.php" style="font-size: 12px;">View details</a>

                                </div>
                            </div>
                        </div>
                    </div>
                        
                         
                        


                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Member's Activity</h6>
                        </div>
                        <div class="card-body">
                          <canvas id="activityChart"></canvas>
                        </div>
                      </div>
                      
                      


                     

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Meetings</h6>
                                </div>
                                <div class="card-body">
                                <ol>
                                    <li><h4 class="small font-weight-bold">YPG MEETING <span
                                            class="float-right"></span>-Sundays 5:00pm - 7:0pm</h4>
                                    
                                    <li><h4 class="small font-weight-bold">MEN'S FELLOWSHIP <span
                                            class="float-right"></span>-Sundays 5:00pm - 6:00pm</h4>
                                    
                                    <li><h4 class="small font-weight-bold">WOMEN'S FELLOWSHIP <span
                                            class="float-right"></span>-Wednesdays 5:00pm - 6:00pm</h4>
                                    
                                    <li><h4 class="small font-weight-bold">BSPG <span
                                            class="float-right"></span>-Mondays 6:00pm - 7:00pm</h4>
                                    
                                    <li><h4 class="small font-weight-bold">YAF <span
                                            class="float-right"></span>-Sundays 5:00pm - 6:00pm</h4>
                                <ol>    
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                
                                
                    
                                
                                
                                
                                
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Upcoming Events</h6>
                                </div>
                                <div class="card-body">
                                  <div id="upcomingEvents"></div>
                                </div>
                              </div>
                              <script>
  // Sample data for upcoming events (replace with your own data)
  const upcomingEventsData = [
    {
      title: 'Christfest',
      date: 'December 28, 2023',
      location: 'Church Auditorium',
    },
    {
      title: 'Worship Night',
      date: 'July 15, 2023',
      location: 'Church Auditorium',
    },
    {
      title: 'Chorale Fest',
      date: 'October 20, 2023',
      location: 'Church Auditorium',
    },
  ];

  // Get the container element to display upcoming events
  const upcomingEventsContainer = document.getElementById('upcomingEvents');

  // Generate HTML for each upcoming event
  const upcomingEventsHTML = upcomingEventsData
    .map((event) => {
      return `
        <div class="event">
          <h5 class="event-title">${event.title}</h5>
          <p class="event-details">
            <span class="event-date">${event.date}</span>
            <span class="event-location">${event.location}</span>
          </p>
        </div>
      `;
    })
    .join('');

  // Populate the upcoming events container with the generated HTML
  upcomingEventsContainer.innerHTML = upcomingEventsHTML;
</script>



                              
                              

                            <!-- Approach -->
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© 2023 PCG Parousia Congregation. All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>