<?php 
ob_start();
error_reporting(0);
session_start();

require_once ("../config.php");

if (!isset ($_SESSION['mod']) && !isset($_SESSION['admin'])) {

echo "please login";

}

else

{

if (isset($_SESSION['admin']) === TRUE)
{
include("header.php");
?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Protection</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">


<?php

$user = $_POST['user'];
$email = $_POST['email'];
$vali = $_POST['validate'];
$udid = $_POST['udid'];

mysql_query("INSERT INTO `protect` (
`user` ,
`email`,
`validate`,
`udid`,
`entry`

)
VALUES (
'$user', '$email', '$vali', '$udid', NOW()
);")
 or die(mysql_error());  

echo "UDID accepted!";
       

$result = mysql_query("SELECT * FROM protect ORDER BY validate ASC");
?>

<?PHP
//echo "<div style='float:left; overflow-x:Scroll; width:920px;'>";
echo "<table border='1' align='center' overflow-x:Scroll>";
echo "<tr> <th> user </th> <th> email </th> <th> entry </th> <th> validate </th> <th> udid </th> </tr>";

while($row = mysql_fetch_array($result)) {

$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<tr> <td> '.$row[user].' </td> <td> '.$row[email].' </td> <td> '.$row[entry].' </td> <td> '.$row[validate].' </td> <td> '.$row[udid].' </td> </tr>';

}

echo "</table>"
//echo "</div>";



	?>

   
     
<?php
include("footer.php");
 }

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Protection</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">


<?php

$user = $_POST['user'];
$email = $_POST['email'];
$vali = $_POST['validate'];
$udid = $_POST['udid'];

mysql_query("INSERT INTO `protect` (
`user` ,
`email`,
`validate`,
`udid`,
`entry`

)
VALUES (
'$user', '$email', '$vali', '$udid', NOW()
);")
 or die(mysql_error());  

echo "UDID accepted!";
       

$result = mysql_query("SELECT * FROM protect ORDER BY validate ASC");
?>

<?PHP
//echo "<div style='float:left; overflow-x:Scroll; width:920px;'>";
echo "<table border='1' align='center' overflow-x:Scroll>";
echo "<tr> <th> user </th> <th> email </th> <th> entry </th> <th> validate </th> <th> udid </th> </tr>";

while($row = mysql_fetch_array($result)) {

$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<tr> <td> '.$row[user].' </td> <td> '.$row[email].' </td> <td> '.$row[entry].' </td> <td> '.$row[validate].' </td> <td> '.$row[udid].' </td> </tr>';

}

echo "</table>"
//echo "</div>";



	?>

   
     
<?php
include("footer.php");
}


}
ob_end_flush();

?>



