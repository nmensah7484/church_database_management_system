<?php
session_start();


$errors = array();


$serverName = "DESKTOP-DOHVLMQ";
$connectionOptions = array(
    "Database" => "churchdb",
    "Uid" => "",
    "PWD" => ""
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

 

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

if (isset($_POST['login_user'])) {
    $userID = $_POST['userID'];
    $PIN = $_POST['PIN'];

    $sql = "SELECT * FROM logins WHERE userid =$userID  AND pin =$PIN ";
    $params = array($userID, $PIN);

    $stmt = sqlsrv_prepare($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_execute($stmt) === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Check if the user exists and the PIN is correct
    if (sqlsrv_has_rows($stmt)) {
        // User authentication successful
        echo "Login successful!";
        header("Location: dashboard.php");
        exit(); 
    } else {
        // User authentication failed
        echo "Invalid credentials. Please try again.";
    }

    sqlsrv_free_stmt($stmt);



// Handle the HTTP request
}
sqlsrv_close($conn);
?>

  
  
  


