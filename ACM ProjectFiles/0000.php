<html>
<body>
<?php

$dbhost ='localhost';
$dbuser ='root';
$dbpassword='';
$dbname='acms';


$conn =mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

$sql="SELECT * FROM `crop_details`";
$resultset=mysqli_query($conn,$sql);

?>
<table bgcolor="orange" border="2" align="center">

<?php
while($row=mysqli_fetch_assoc($resultset))
{
	echo "<tr>";
	echo "<td>".$row['slno']."</td>";
	 echo "<td>".$row['cropname']."</td>";
	 echo "<td>".$row['soiltype']."</td>";
	 echo "<td>".$row['duration']."</td>";
	 echo "<td>".$row['fertilizer']."</td>";
	 echo "<td>".$row['insecticide']."</td>";
	  
echo "</tr>";

	 
}
?>
</table>
</body>
</html>