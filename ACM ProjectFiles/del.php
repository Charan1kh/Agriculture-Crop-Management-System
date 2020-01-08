 <?php
  $conn= mysqli_connect('localhost','root','');
 
      mysqli_select_db($conn,'acms');


  
  
  $sql = "DELETE FROM `crop_details` WHERE `cropname`='$_GET[cropname]'";
   if(mysqli_query($conn,$sql))
   	{
   	   echo "TABLE IS DELETED";
   	header("refresh:1;url=display.php");
   }
   else
   	echo "not deleted";
   ?>