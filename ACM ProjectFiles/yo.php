<?php
$conn=mysqli_connect('localhost','root','','acms');
$set=$_POST['submit'];
 if($set){
  $show = "SELECT * FROM `crop_details` WHERE cropname='$set'";
  $result=mysqli_query($conn,$show);
  while($rows=mysqli_fetch_array($result)){
                     echo $row['slno'];
                     echo $row['cropname'];
                     echo $row['soiltype'];
                     echo $row['duration'];
                     echo $row['fertilizer'];
                     echo $row['insecticide'];


  }
 }
   else {
     echo"item not found";
     
}

?>  
