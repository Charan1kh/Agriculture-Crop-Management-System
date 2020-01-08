<?php 
 
$host="localhost";
$user="root";
$password="";
$db="acms";
 
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($db);
 
if(isset($_POST['submit'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql= "SELECT * FROM `register` where email='$email' && password='$password'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>