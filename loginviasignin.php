<?php
// Database configuration
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'student-corner');


// Create connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];


$sql=mysqli_query($con,"INSERT INTO loginviasign (email, password) values('$email','$password')");

// Execute the statement
if($sql) {
    echo "New record created successfully";
} else {
    echo "Error ";
}
?>