<?php
$servername = "mysql.hostinger.in";
$username = "u455542552_adf";
$password = "UnwtZT85h0";
$dbname = "u455542552_feedb";

 $name=$_POST['name'];
 $email=$_POST['email'];
 $text=$_POST['text'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

$sql="INSERT INTO  feedback values('$name','$email','$text')";

$result=$conn->query($sql);
if($result)
echo "Thank You for your feedback";
else
echo "Sorry, No feedback is recorded. Please try after sometime.";
$conn->close();
?>