<?php

if ( ! empty( $_POST ) )
{
$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );
if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
$sql = "INSERT INTO sign (FName,LName,DOB,Email,Phone,Create_Password,Gender,City,Pincode,Address,Security_Questions,Answer_for_sq) VALUES 
(
 '{$mysqli->real_escape_string($_POST['first_name'])}',
 '{$mysqli->real_escape_string($_POST['last_name'])}',
 '{$mysqli->real_escape_string($_POST['dob'])}',
 '{$mysqli->real_escape_string($_POST['email'])}',
 '{$mysqli->real_escape_string($_POST['phone'])}',
 '{$mysqli->real_escape_string($_POST['password1'])}',
 '{$mysqli->real_escape_string($_POST['gender'])}',
 '{$mysqli->real_escape_string($_POST['city'])}',
 '{$mysqli->real_escape_string($_POST['pincode'])}',
 '{$mysqli->real_escape_string($_POST['address'])}',
 '{$mysqli->real_escape_string($_POST['security_questions'])}',
 '{$mysqli->real_escape_string($_POST['answer_for_sq'])}'
 )";

$insert = $mysqli->query($sql);

if ( $insert )
{
echo "Success! Row ID: {$mysqli->insert_id}";

echo '<center><h1 style="font-size:80px;">Congradulation</h1></center>';
echo '<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">';
echo '<center><i class="fa fa-check-circle-o" style="font-size:80px;">Thank You</i></center>';
}
else
{
die("Error: {$mysqli->errno} : {$mysqli->error}");
}
$mysqli->close();
} 
?>








