<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$status=$_POST['status'];
$created_at=$_POST['created_at'];
// echo $question;
$sql = 'UPDATE `feedback_analysis` SET `status`= "'.$status.'" WHERE `created_at`="'.$created_at.'"';
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>