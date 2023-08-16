<?php

// $serverName = "DESKTOP-DOHVLMQ";
// $database = "ParousiaCongregationdb";
// $uid = "";
// $pass = "";

// $connection = [
// "Database" => $database,
// "Uid" => $uid,
// "PWD" => $pass
// ];

// $conn = sqlsrv_connect($serverName,$connection);
// if(!$conn)
//   die(print_r(sqlsrv_errors(),true));
//    echo 'connection established' 
 
$conn = mysqli_connect('localhost', 'root', '', 'churchdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

// Execute the query
// $sql = "SELECT * FROM members";
// $result = $conn->query($sql);


// if ($result && $result->num_rows > 0) {
    
//     while ($row = $result->fetch_assoc()) {
        
//         echo "ID: " . $row["ID"] . "<br>";
//         echo "Title: " . $row["Title"] . "<br>";
//         echo "First Name: " . $row["First_Name"] . "<br>";
//         echo "Last Name: " . $row["Last_Name"] . "<br>";
//         echo "Gender: " . $row["Gender"] . "<br>";
//         echo "Nationality: " . $row["Nationality"] . "<br>";
//         echo "Date of Birth: " . $row["Date_Of_Birth"] . "<br>";
//         echo "Age: " . $row["Age"] . "<br>";
//         echo "Generational Groups: " . $row["Generational_Groups"] . "<br>";
//         echo "Hometown Region: " . $row["Hometown_Region"] . "<br>";
//         echo "Telephone Nos: " . $row["Telephone_Nos"] . "<br>";
//         echo "Whatsapp No: " . $row["Whatsapp_No"] . "<br>";
//         echo "GPS Address: " . $row["GPS_Address"] . "<br>";
//         echo "Residential Community: " . $row["Residential_Community"] . "<br>";
//         echo "Day Born: " . $row["Day_Born"] . "<br>";
//         echo "Communicant: " . $row["Communicant"] . "<br>";
//         echo "Employment Status: " . $row["Employment_Status"] . "<br>";
//         echo "Occupation: " . $row["Occupation"] . "<br>";
//         echo "Marital Status: " . $row["Marital_Status"] . "<br>";
//         echo "Name of Spouse: " . $row["Name_Of_Spouse"] . "<br>";
//         echo "Number Of Children: " . $row["Number_Of_Children"] . "<br>";
//         echo "Service Groups: " . $row["Service_Groups"] . "<br>";
//         echo "Baptism: " . $row["Baptism"] . "<br>";
//         echo "Email Address: " . $row["Email_Address"] . "<br>";
//         echo "Parousia Pal Name: " . $row["Parousia_Pal_Name"] . "<br>";
//         echo "Parousia Pal Contact: " . $row["Parousia_Pal_Contact"] . "<br>";
//         echo "Next oF Kin s Name: " . $row["Next_oF_Kin_s_Name"] . "<br>";
//         echo "Telephone Number: " . $row["Telephone_Number"] . "<br>";
       
       

//         echo "<br>";
//     }

    
//     $result->free();
// } else {
//     echo "No records found.";
// }


  $conn->close();



?>
