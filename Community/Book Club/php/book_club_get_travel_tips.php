<?php

$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );
if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
$sql = "INSERT INTO book_club_get_travel_tips (FName,Email) VALUES 
(
 '{$mysqli->real_escape_string(isset($_POST['FName_book']))}',
 '{$mysqli->real_escape_string(isset($_POST['Email_book']))}'
)";

$insert = $mysqli->query($sql);

if ( $insert )
{
echo "Success! Row ID: {$mysqli->insert_id}";

/*===============================================================================================================*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../../CSS/style111.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="../../../Title Icon/compass.png">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<title>Thank You</title>

<?php

echo '<script language="javascript">alert("Thank you!!!")</script>';
echo '<script language="javascript">alert("Plz check your mail for confirmation")</script>';
?>
</head>
<body>
<div style="margin-left: 150px;margin-right: 150px;">
<h1 style="font-size:50px"><center>Thank You !!!
<br>
But Wait! Just onemore thing!</h2></center>
<hr>
<center>
<h1>	<p>	
	Before I can send you great travel tips to your inbox, you need to confirm your email address!
	</p></h1>

<h2>	<p>
	Check your inbox and click on the confirmation link in the email.
	</p></h2></center>
<h2>	
	<p>
	In order to prevent spam, I can't send you any information until you click that link.
	Once you confirm your email, you're in and don't need to do anything else!!
	</p>
	
	<p>
	Note: If you don't receive an e-mail within 5 minutes, check your spam folder. Sometimes spam robots
	make mistakes and put my e-mails there. If it's not there, e-mail me directly and I'll confirm you manually!
	</p>
</h2>
</div>
<!-- ============================================================================================================ -->
<footer>
<div class="creds">
<p style="margin-bottom: 5px;margin-top: 5px;">Copyright © 2016 ·</p>
</div>
</footer>

</body>
</html>

<?php
}
else
{
die("Error: {$mysqli->errno} : {$mysqli->error}");
}
$mysqli->close();
 
?>

