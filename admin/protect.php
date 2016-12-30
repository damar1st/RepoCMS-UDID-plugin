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


  echo " <br /> ";

  
  echo " <br /> ";
  
  
  


  echo "<form action='protect2.php' method='post'>";




  
  
echo "Username";
  
echo " <br /> ";
	
echo " <br /> ";

echo "<input type='text' name='user' >";
echo " <br /> ";
  
echo " <br /> ";
 
 echo "Email";
 
   echo " <br /> ";

  echo "<input type='email' name='email' >";
  echo " <br /> ";



  echo "validate";
  
   echo " <br /> ";

  echo "<input type='date' name='validate' >";
  echo " <br /> ";
  
 
  
  
  echo "udid";
  
   echo " <br /> ";

  echo "<input type='text' name='udid' >";
  echo " <br /> ";

   
   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";


$abfrage = "SELECT * FROM protect ORDER BY ID"; 
$ergebnis = mysql_query($abfrage); 
?> 
<form action="" method="post"><table border="1" align="center" overflow-x:Scroll> 
<?php  
    
	echo "<tr> <th> delete </th> <th> user </th> <th> email </th> <th> entry </th> <th> validate </th> <th> udid </th>   </tr>";

while($row = mysql_fetch_object($ergebnis)) 
    { 
    echo '<tr><td align="left"><input type="checkbox" name="t[]" value="'.$row->id.'"></td><td>'.$row->user.'</td> <td>'.$row->email.'</td> <td>'.$row->entry.'</td> <td>'.$row->validate.'</td> <td>'.$row->udid.'</td></tr>';
 
    }  
?> 
</table><center><input type="hidden" value="1" name="st"><input type="submit" value="Delete" name="submit"></center></form> 
<?php  
$delete = $_POST["t"]; 
$send = $_POST['st']; 
if ($send == 1) 
{ 
    $anzahl=count($delete); 
    for($i=0;$i<$anzahl;$i++) 
    { 

$deltext = "DELETE FROM protect WHERE ID = '".intval($delete[$i])."'";

        $del = mysql_query($deltext); 
    } 
    if($i == $anzahl) 
    { 
        echo '<head><meta http-equiv="refresh" content="0; url=protect.php"></head>'; 
    } 
} 
mysql_close(); 


?>
                             <h1>&nbsp;</h1>
						<div class="clearfix"></div>
				  </div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
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


  echo " <br /> ";

  
  echo " <br /> ";
  
  
  


  echo "<form action='protect2.php' method='post'>";




  
  
echo "Username";
  
echo " <br /> ";
	
echo " <br /> ";

echo "<input type='text' name='user' >";
echo " <br /> ";
  
echo " <br /> ";
 
 echo "Email";
 
   echo " <br /> ";

  echo "<input type='email' name='email' >";
  echo " <br /> ";



  echo "validate";
  
   echo " <br /> ";

  echo "<input type='date' name='validate' >";
  echo " <br /> ";
  
 
  
  
  echo "udid";
  
   echo " <br /> ";

  echo "<input type='text' name='udid' >";
  echo " <br /> ";

   
   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";



$abfrage = "SELECT * FROM protect ORDER BY ID"; 
$ergebnis = mysql_query($abfrage); 
?> 
<form action="" method="post"><table border="1" align="center" overflow-x:Scroll> 
<?php  
    
	echo "<tr> <th> delete </th> <th> user </th> <th> email </th> <th> entry </th> <th> validate </th> <th> udid </th>   </tr>";

while($row = mysql_fetch_object($ergebnis)) 
    { 
    echo '<tr><td align="left"><input type="checkbox" name="t[]" value="'.$row->ID.'"></td><td>'.$row->user.'</td> <td>'.$row->email.'</td> <td>'.$row->entry.'</td> <td>'.$row->validate.'</td> <td>'.$row->udid.'</td></tr>';
 
    }  
?> 
</table><center><input type="hidden" value="1" name="st"><input type="submit" value="Delete" name="submit"></center></form> 
<?php  
$delete = $_POST["t"]; 
$send = $_POST['st']; 
if ($send == 1) 
{ 
    $anzahl=count($delete); 
    for($i=0;$i<$anzahl;$i++) 
    { 

$deltext = "DELETE FROM protect WHERE ID = '".intval($delete[$i])."'";

        $del = mysql_query($deltext); 
    } 
    if($i == $anzahl) 
    { 
        echo '<head><meta http-equiv="refresh" content="0; url=protect.php"></head>'; 
    } 
} 
mysql_close(); 


?>
                             <h1>&nbsp;</h1>
						<div class="clearfix"></div>
				  </div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
<?php
include("footer.php");
}


}
ob_end_flush();

?>