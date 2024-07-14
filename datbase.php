
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
$name = $_POST['name'];
$email = $_POST['email'];

$feedback = $_POST['feedback'];
$sql=mysqli_query($con,"INSERT INTO contact (name, email, feedback) values('$name','$email','$feedback')");

// Execute the statement
if($sql) {
    echo "New record created successfully";
} else {
    echo "Error ";
}
?>