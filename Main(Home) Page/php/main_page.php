<?php

if ( ! empty( $_POST ) )
{
$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );
if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
$sql = "INSERT INTO main_page (	Firstname,LastName,Email_id) VALUES 
(
 '{$mysqli->real_escape_string($_POST['Firstname'])}',
 '{$mysqli->real_escape_string($_POST['LastName'])}',
 '{$mysqli->real_escape_string($_POST['Email_id'])}'
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








