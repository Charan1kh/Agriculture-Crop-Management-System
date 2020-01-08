<?php
if (isset($_POST['submit'])){
   $cropname= $_POST['cropname'];
   $fertilizer= $_POST['fertilizer'];
   $duration= $_POST['duration'];
   $insecticide= $_POST['insecticide'];

   $dbconnect=mysqli_connect('localhost','root','','acms');
   $sql=mysqli_query ($dbconnect,"insert into crop_details(slno,fertilizer,duration,insecticide) values( '','$cropname','$fertilizer','$duration','$insecticide')");
    if($sql){

       echo" ...THANKYOU FOR  YOUR INFORMATION ...";
        header("refresh: 2;url=welcome.php");

      

      
    }
  else {
      echo "fail to insert ";
    
  }  
  }   
?> 
