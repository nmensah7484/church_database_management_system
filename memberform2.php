<?php
include_once('connection4.php');
?>
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
                        <a class="collapse-item" href="inventoryform.php">View all</a>
                        <a class="collapse-item" href=""></a>
                        
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
if(isset($_POST['submit'])) { 
    $MemberID = $_POST['MemberID'];
    $Title = $_POST['Title'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Gender = $_POST['Gender'];
    $Nationality = $_POST['Nationality'];
    $Date_Of_Birth = $_POST['Date_Of_Birth'];
    $Age = $_POST['Age'];
    $Generational_Groups = $_POST['Generational_Groups'];
    $Hometown_Region = $_POST['Hometown_Region'];
    $Telephone_Nos = $_POST['Telephone_Nos'];
    $Whatsapp_No = $_POST['Whatsapp_No'];
    $GPS_Address = $_POST['GPS_Address'];
    $Residential_Community = $_POST['Residential_Community'];
    $Day_Born = $_POST['Day_Born'];
    $Communicant = $_POST['Communicant'];
    $Employment_Status = $_POST['Employment_Status'];
    $Occupation = $_POST['Occupation'];
    $Marital_Status = $_POST['Marital_Status'];
    $Name_Of_Spouse = $_POST['Name_Of_Spouse'];
    $Number_Of_Children = $_POST['Number_Of_Children'];
    $Service_Groups = $_POST['Service_Groups'];
    $Baptism = $_POST['Baptism'];
    $Email_Address = $_POST['Email_Address'];
    $Parousia_Pal_Name = $_POST['Parousia_Pal_Name'];
    $Parousia_Pal_Contact = $_POST['Parousia_Pal_Contact'];
    $Next_oF_Kin_s_Name = $_POST['Next_oF_Kin_s_Name'];
    $Telephone_Number = $_POST['Telephone_Number'];


    // Create a connection to SQL Server
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn === false) {
        die("Connection failed: " . print_r(sqlsrv_errors(), true));
    }

    // Prepare and execute the INSERT query
    $sql = "INSERT INTO members (MemberID, Title, First_Name, Last_Name, Gender, Nationality, Date_Of_Birth, Age, Generational_Groups, Hometown_Region, Telephone_Nos, Whatsapp_No, GPS_Address, Residential_Community, Day_Born, Communicant, Employment_Status, Occupation, Marital_Status, Name_Of_Spouse, Number_Of_Children, Service_Groups, Baptism, Email_Address, Parousia_Pal_Name, Parousia_Pal_Contact, Next_oF_Kin_s_Name, Telephone_Number) VALUES (?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($MemberID, $Title, $First_Name, $Last_Name, $Gender, $Nationality, $Date_Of_Birth, $Age, $Generational_Groups, $Hometown_Region, $Telephone_Nos, $Whatsapp_No, $GPS_Address, $Residential_Community, $Day_Born, $Communicant, $Employment_Status, $Occupation, $Marital_Status, $Name_Of_Spouse, $Number_Of_Children, $Service_Groups, $Baptism, $Email_Address, $Parousia_Pal_Name, $Parousia_Pal_Contact, $Next_oF_Kin_s_Name, $Telephone_Number);
    $stmt = sqlsrv_prepare($conn, $sql, $params);
    if ($stmt === false) {
        die("Error preparing statement: " . print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_execute($stmt) === false) {
        die("Error executing statement: " . print_r(sqlsrv_errors(), true));
    } else {
        echo "New member record created successfully!";
    }
    // Close the connection
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}
?>


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="form-container">
                                <h2 class="text-center">Personal Information Form</h2>
                                <form action="" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="ID">MemberID:</label>
                                            <input type="number" class="form-control" name="MemberID" id="MemberID" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Title">Title:</label>
                                            <input type="text" class="form-control" name="Title" id="Title" maxlength="9" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="First_Name">First Name:</label>
                                            <input type="text" class="form-control" name="First_Name" id="First_Name" maxlength="22" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Last_Name">Last Name:</label>
                                            <input type="text" class="form-control" name="Last_Name" id="Last_Name" maxlength="16" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="Gender">Gender:</label>
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Nationality">Nationality:</label>
                                            <input type="text" class="form-control" name="Nationality" id="Nationality" maxlength="8" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Date_Of_Birth">Date of Birth:</label>
                                            <input type="date" class="form-control" name="Date_Of_Birth" id="Date_Of_Birth" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Age">Age:</label>
                                            <input type="number" class="form-control" name="Age" id="Age" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                        <label for="Generational_Groups">Generational Groups:</label>
                                        <select class="form-control" name="Generational_Groups" id="Generational_Groups" >
                                            <option value="YPG">YPG</option>
                                            <option value="YAF">YAF</option>
                                            <option value="Men's Fellowship">Men's Fellowship</option>
                                            <option value="Women's Fellowship">Women's Fellowship</option>
                                            <option value="JY">JY</option>
                                            <option value="Children Service">Children Service</option>
                                        </select>
                                    </div>
                                        <div class="form-group col-md-3">
                                            <label for="Hometown_Region">Hometown Region:</label>
                                            <input type="text" class="form-control" name="Hometown_Region" id="Hometown_Region" maxlength="33" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Telephone_Nos">Telephone Numbers:</label>
                                            <input type="text" class="form-control" name="Telephone_Nos" id="Telephone_Nos" maxlength="32" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Whatsapp_No">WhatsApp Number:</label>
                                            <input type="text" class="form-control" name="Whatsapp_No" id="Whatsapp_No" maxlength="22" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="GPS_Address">GPS Address:</label>
                                            <input type="text" class="form-control" name="GPS_Address" id="GPS_Address" maxlength="15" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Residential_Community">Residential Community:</label>
                                            <input type="text" class="form-control" name="Residential_Community" id="Residential_Community" maxlength="39" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Day_Born">Day Born:</label>
                                            <select class="form-control" name="Day_Born" id="Day_Born" >
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Communicant">Communicant:</label>
                                            <select class="form-control" name="Communicant" id="Communicant" >
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="Employment_Status">Employment Status:</label>
                                            <input type="text" class="form-control" name="Employment_Status" id="Employment_Status" maxlength="13" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Occupation">Occupation:</label>
                                            <input type="text" class="form-control" name="Occupation" id="Occupation" maxlength="38" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Marital_Status">Marital Status:</label>
                                            <select class="form-control" name="Marital_Status" id="Marital_Status" >
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widow">Widow</option>
                                                <option value="Widower">Widower</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Name_Of_Spouse">Name of Spouse:</label>
                                            <input type="text" class="form-control" name="Name_Of_Spouse" id="Name_Of_Spouse" maxlength="31" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="Number_Of_Children">Number of Children:</label>
                                            <input type="text" class="form-control" name="Number_Of_Children" id="Number_Of_Children" maxlength="3" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Service_Groups">Service Groups:</label>
                                            <select class="form-control" name="Service_Groups" id="Service_Groups" >
                                                <option value="Technical Team">Technical Team</option>
                                                <option value="BSPG Prayer Tower">BSPG Prayer Tower</option>
                                                <option value="Parousia Voices">Parousia Voices</option>
                                                <option value="Parousia Singing Band">Parousia Singing Band</option>
                                                <option value="Parousia Choir">Parousia Choir</option>
                                                <option value="Ushers">Ushers</option>
                                                <option value="Brigade">Brigade</option>
                                                <option value="Session Members">Session Members</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Baptism">Baptism:</label>
                                            <select class="form-control" name="Baptism" id="Baptism" >
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Email_Address">Email Address:</label>
                                            <input type="email" class="form-control" name="Email_Address" id="Email_Address" maxlength="31" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="Parousia_Pal_Name">Parousia Pal Name:</label>
                                            <input type="text" class="form-control" name="Parousia_Pal_Name" id="Parousia_Pal_Name" maxlength="24" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Parousia_Pal_Contact">Parousia Pal Contact:</label>
                                            <input type="text" class="form-control" name="Parousia_Pal_Contact" id="Parousia_Pal_Contact" maxlength="22" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Next_oF_Kin_s_Name">Next of Kin's Name:</label>
                                            <input type="text" class="form-control" name="Next_oF_Kin_s_Name" id="Next_oF_Kin_s_Name" maxlength="31" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Telephone_Number">Telephone Number:</label>
                                            <input type="text" class="form-control" name="Telephone_Number" id="Telephone_Number" maxlength="37" >
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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



</body>

</html>
