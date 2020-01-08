
<?php
	include_once('connectio.php');
 
	if(isset($_POST['name']))
	{
	  $name = $_POST['name'];
 
	  if(mysql_query("INSERT INTO `crop_details' VALUES('','$name')"))
		echo "Successful Insertion!";
	  else
		echo "Please try again";
	}
 
 
	$res = mysqli_query("SELECT * FROM `crop_details'");
 
 
?>
<html>
<head>
 
<style type="text/css">
 li { list-style-type: none; display: inline; padding: 10px; text-align: center;}
// li:hover { background-color: yellow; }
</style>
 
</head>
<body>
<form action="." method="POST">
Name: <input type="text" name="name"/><br />
<input type="submit" value=" Enter "/>
</form>
 
<h1>List of crops ..</h1>
<ul>
<?php
	while( $row = mysql_fetch_array($res) )
	  echo "<li>$row[id]. <li>$row[name]</li> 
                <li><a href='edit.php?edit=$row[id]'>edit</a></li>
                <li><a href='delete.php?del=$row[id]'>delete</a></li><br/>";
?>
</ul>
</body>
</html>