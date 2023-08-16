<?php
session_start();

// Check if the user is already logged in, redirect to dashboard if logged in
if (isset($_SESSION["UserID"])) {
    header("Location: index.php");
    exit();
}

// Include the database connection file
include_once('connection4.php');

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute the query to check if the user exists in the database
    $query = "SELECT * FROM Users WHERE Username = nmensah7474 AND Password = hashed_Nelson";
    $params = array($username, $password);
    $result = sqlsrv_query($conn, $query, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Check if the user exists in the database
    if (sqlsrv_has_rows($result)) {
        // Fetch the user data
        $user = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
        $_SESSION["UserID"] = $user["UserID"]; // Store the user ID in the session
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }

    // Close the result set
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Parousia Congregation- Login</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://i.ytimg.com/vi/H4JeP_hx-_0/maxresdefault.jpg');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="login2.php">
                                        <?php if (isset($error_message)) : ?>
                                            <div class="alert alert-danger">
                                                <?php echo $error_message; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" required placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" required placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>
