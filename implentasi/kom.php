<!DOCTYPE html>
<html>
<head>
	<title>connect server</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
$link= mysqli_connect($_POST['username'],$_POST['password'])or die
("Connect Error: ".mysqli_error());

print "Seccessfully connected.\n";



?>
</body>
</html>