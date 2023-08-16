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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3"><sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
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
                    <i class="fas fa-music"></i>
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
                <div id="sessionmembers" class="collapse" aria-labelledby="headingUtilities"
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
                        <a class="collapse-item" href="inventoryform.php"> Add Inventory</a>
                        
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
                                    src="img/undraw_profile.svg">
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

                <?php
// Assuming you have a database connection established
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    echo "Connection could not be established.";
    die(print_r(sqlsrv_errors(), true));
}
if(isset($_POST['submit'])) {
    // Make sure the names match the form field names
    $itemid = $_POST["ItemID"];
    $itemname = $_POST["ItemName"];
    $description = $_POST["Description"];
    $quantity = $_POST["Quantity"];
    $price = $_POST["Price"];
    $supplier = $_POST["Supplier"];
    $dateadded = $_POST["DateAdded"];
    $category = $_POST["Category"];
   
   

    $sql = "INSERT INTO Members (ItemID, ItemName, Description, Quantity, Price, Supplier, DateAdded, Category)
            VALUES (?, ?, ?, ?, ?, ?, ? ,?)";
    $stmt = sqlsrv_prepare($conn, $sql, array($itemid, $itemname, $description, $quantity, $price, $supplier, $dateadded, $category));
    if ($stmt === false) {
        echo "Error preparing statement: ";
        print_r(sqlsrv_errors());
    } else {
        // Execute the statement
        if (sqlsrv_execute($stmt)) {
            echo "Member added successfully.";
        } else {
            echo "Error executing statement: ";
            print_r(sqlsrv_errors());
        }
    }
}

// Close the connection
sqlsrv_close($conn);
?>
                <div class="container mt-5">
        <h2 class="text-center">Inventory Form</h2>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ItemID">ItemID:</label>
                        <input type="number" class="form-control" name="ItemID" id="ItemID" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ItemName">ItemName:</label>
                        <input type="text" class="form-control" name="ItemName" id="ItemName" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Description">Description:</label>
                        <input type="text" class="form-control" name="Description" id="Description">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Quantity">Quantity:</label>
                        <input type="number" class="form-control" name="Quantity" id="Quantity" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Price">Price:</label>
                        <input type="number" step="0.01" class="form-control" name="Price" id="Price" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Supplier">Supplier:</label>
                        <input type="text" class="form-control" name="Supplier" id="Supplier">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="DateAdded">DateAdded:</label>
                        <input type="date" class="form-control" name="DateAdded" id="DateAdded">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Category">Category:</label>
                        <input type="text" class="form-control" name="Category" id="Category">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="submit">
             </div>
        </form>
    </div>
         

        
















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
   
    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
