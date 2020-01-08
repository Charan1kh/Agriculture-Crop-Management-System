<?php
$conn= mysqli_connect("localhost","root","","acms");

 if(!$conn)
 	echo 'error';
  else
   		echo 'db connection';
 	?>