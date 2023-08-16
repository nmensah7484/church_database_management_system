<?php

include_once('connection4.php'); 
// This is a simple example of a PHP script to generate a report
$reportText = "This is a sample report.\nReport content goes here.";

// Set the content type to plain text
header('Content-Type: text/plain');

// Output the report text
echo $reportText;
?>
