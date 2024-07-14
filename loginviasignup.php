<?php
//Database Configuration
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','student-corner');

//Create Connection
$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//CHECK CONNECTION

if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL:" .mysqli_connect_error();
    
}

//Get form data
$Username=$_POST['Username'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];

$sql=mysqli_query($con,"INSERT INTO loginviasignup (Username, mail, pass) values('$Username','$mail','$pass')");

//Execute the statement
if($sql)
{
    echo "Form submited successfully";

}

else{

    echo "Error";

}

?>