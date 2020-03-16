<html>
<head>
<style>
#table_td
{
table-layout:fixed;
width:2000px;
word-break:break-all;
vertical-align: center;
text-align: center;
border-bottom: 1px solid #ddd;
border-collapse: collapse;
empty-cells: hide;	
}
#table_tda
{
table-layout:fixed;
width:500px;
word-break:break-all;
vertical-align: center;
text-align: center;
border-bottom: 1px solid #ddd;
border-collapse: collapse;
empty-cells: hide;	
}
.table_fit
{

width:150%;
}

body {

background-size: 100%; 
background-repeat:no repeat;
background-attachment:fixed;
background-image: url("Images/landscape-mountains-nature-clouds.jpg");
}
hr
{
border-top-width: 0px;
border-bottom-width: 0px;
padding:1px;
background-color:white;
}
h1
{
color:white;
}
th:first-child {
  border-top-left-radius:10px;
}
 
th:last-child {
  border-top-right-radius:10px;
  border-right:none;
}
th {
  color:#D5DDE5;;
  background:#1b1e24;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  border-top: 1px solid #3e94ec;
}
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
}
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
</style>
<body>

<!--===========================================================================================-->
<?php
/*=============================================================================================*/
$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );

if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
/*=============================================*/

$query="SELECT * from Sign";

$result=mysqli_query($mysqli,$query);

/*=============================================*/

$admin_password = "the";
$username = $_POST['username'];
$password = $_POST['password'];

/*==============================================*/

if( ($username == "MonishNarendra" || $username == "MeghanaSMurthy") && $password == $admin_password )
{
echo '<script language="javascript">alert("Login Successfully !!!")</script>';

echo "<center><h1>Welcome " . $username ."</h1></center>";

echo "<hr>";

/*==============================================*/

echo "<br>";

echo "<table id=table_td>";
echo "<tr>";

	echo "<th style='width: 60px;'>SL NO.</td>";

	echo "<th>First Name</th>";

	echo "<th>Last Name</th>";

	echo "<th style='width: 100px;'>DOB</th>";

	echo "<th style='width: 300px;'>Email ID</th>";

	echo "<th style='width: 120px;'>Phone</th>";

	echo "<th>Created Password</th>";

	echo "<th style='width: 80px;'>Gender</th>";
	
	echo "<th style='width: 100px;'>City</th>";

	echo "<th style='width: 100px;'>Pincode</th>";

	echo "<th style='width: 250px;'>Address</th>";

	echo "<th style='width: 70px;'>Security Questions</th>";

	echo "<th>Answer</th>";

echo "</tr>";
echo "</table>";

/*==============================================*/
echo '<div class ="table_fit">';
echo "<table id=table_td border=1px>";

while ($row=mysqli_fetch_array($result))
{
echo "<tr>";

	echo "<td  style='width: 60px;'>" . $row['ID'] ."</td>";

	echo "<td>" . $row['FName'] ."</td>";

	echo "<td>" . $row['LName'] ."</td>";

	echo "<td style='width: 100px;'>" . $row['DOB'] ."</td>";

	echo "<td style='width: 300px;'>" . $row['Email'] ."</td>";

	echo "<td style='width: 120px;'>" . $row['Phone'] ."</td>";

	echo "<td>" . $row['Create_Password'] ."</td>";

	echo "<td style='width: 80px;'>" . $row['Gender'] ."</td>";

	echo "<td style='width: 100px;'>" . $row['City'] ."</td>";

	echo "<td style='width: 100px;'>" . $row['Pincode'] ."</td>";

	echo "<td style='width: 250px;'>" . $row['Address'] ."</td>";

	echo "<td  style='width: 70px;'>" . $row['Security_Questions'] ."</td>";

	echo "<td>" . $row['Answer_for_sq'] ."</td>";

echo "</tr>";

}

echo "</table>";
/*==============================================*/
$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );

if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
/*=============================================*/

$query="SELECT * from main_page";

$result=mysqli_query($mysqli,$query);

/*=============================================*/
echo "<br>";
echo '<h1 style="color:black">Main Page<h1/>';
echo "<br>";

echo "<table id=table_tda>";
echo "<tr>";

	echo "<th style='width: 10px;'>SL NO.</td>";

	echo "<th style='width: 80px;'>First Name</th>";

	echo "<th style='width: 80px;'>Last Name</th>";

	echo "<th style='width: 80px;'>Email ID</th>";

echo "</tr>";
echo "</table>";



/*==============================================*/
echo '<div class ="table_fit">';
echo "<table id=table_tda border=1px>";

while ($row=mysqli_fetch_array($result))
{
echo "<tr>";

	echo "<td  style='width: 10px;'>" . $row['ID'] ."</td>";

	echo "<td style='width: 80px;'>" . $row['Firstname'] ."</td>";

	echo "<td style='width: 80px;'>" . $row['LastName'] ."</td>";

	echo "<td style='width: 80px;'>" . $row['Email_id'] ."</td>";

echo "</tr>";

}

echo "</table>";
/*==============================================*/
$mysqli = new mysqli( 'localhost', 'root', '', 'm_m' );

if ( $mysqli->connect_error )
{
die('Connect Error:' . $mysqli->connect_error . ':' . $mysqli->connect_error);
}
/*=============================================*/

$query="SELECT * from book_club_get_travel_tips";

$result=mysqli_query($mysqli,$query);


/*==============================================*/

echo '<h3 style="color:black">book Page<h3/>';


echo "<table id=table_tda>";
echo "<tr>";

	echo "<th style='width: 5px;'>SL NO.</td>";

	echo "<th style='width: 50px;'>Full Name</th>";

	echo "<th style='width: 50px;'>Email ID</th>";

echo "</tr>";
echo "</table>";
/*=============================================*/
echo '<div class ="table_fita">';
echo "<table id=table_tda border=1px>";

while ($row=mysqli_fetch_array($result))
{
echo "<tr>";

	echo "<td  style='width: 4px;'>" . $row['ID'] ."</td>";

	echo "<td style='width: 50px;'>" . $row['FName'] ."</td>";

	echo "<td style='width: 50px;'>" . $row['Email'] ."</td>";

echo "</tr>";

}

echo "</table>";
/*==============================================*/
mysqli_close($mysqli);
}
else 
{
echo '<script language="javascript">alert("Login Unsuccessfully")</script>';
echo '<div class ="margin_110px">';
echo "<center><h1>Unsuccessful Login</h1><center>";
echo "<hr>";
echo "<p><h3>Click the button to go back to the Login Page</h3></p>";
echo '<a href="../../Login/Main/Login.html">BACK</a>';
echo "</div>";
}
$password = "theee";
?>
<!--===========================================================================================-->

</body>
</html>
