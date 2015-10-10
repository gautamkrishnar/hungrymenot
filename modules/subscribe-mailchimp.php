<?php

$success_message = 'Success!'; 
$email = isset( $_REQUEST['email'] ) ? $_REQUEST['email'] : '';
$servername = "mysql.hostinger.in";
$username = "u455542552_adf";
$password = "UnwtZT85h0";
$dbname = "u455542552_feedb";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

$sql = "INSERT INTO `mailinglist`(`email`) VALUES (\'".$email."\')";

$res=$conn->query($sql);
if($res)
{
$result['message'] = $success_message;
}
else
{
$result['message'] = "Error! try again later! ";
}
$conn->close();

// Send output
if ( ! empty( $_REQUEST[ 'ajax' ] ) ) {
	// called via AJAX
	echo json_encode( $result );
} else {
	// no AJAX
	if ( array_key_exists( 'status', $result ) && $result['status'] == 'error' ) {
		echo 'Error: ' . $result['error'];
	} else {
		echo 'Success';
	}
}