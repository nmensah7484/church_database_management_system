<?php
$serverName = "DESKTOP-DOHVLMQ";
$connectionOptions = array(
    "Database" => "churchdb",
    "Uid" => "",
    "PWD" => ""
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Prepare and execute the query
$query = "SELECT * FROM members";
$result = sqlsrv_query($conn, $query);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Fetch and display the results
while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    // Loop through each column in the row
    foreach ($row as $column => $value) {
        // Convert DateTime objects to strings
        if ($value instanceof DateTime) {
            $value = $value->format('Y-m-d H:i:s');
        }
        echo $column . ": " . $value . "<br>";
    }
    echo "<br>";
}

// Close the connection and free up resources
sqlsrv_free_stmt($result);
sqlsrv_close($conn);
?>
