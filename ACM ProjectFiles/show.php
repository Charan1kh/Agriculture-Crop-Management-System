<?php
include"connectio.php";


$cropname=$_POST['cropname'];
echo "$cropname";
$disp = mysqli_query( "select cropname,soiltype,duration,fertilizer,insecticide from crop_details where cropname='$cropname'");
$result =mysql_fetch_array($disp,mysql_fetch_assoc);


while($result = mysql_fetch_array($disp, mysql_fetch_assoc)
 {
echo "<br> cropname: " . $result['cropname'];
echo "<br> soiltype: " . $result['soiltype'];
echo "<br> duration: " . $result['duration'];
echo "<br> fertilizer: " . $result['fertilizer'];
echo "<br> insecticide: " . $result['insecticide'];

}







?>