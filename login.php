<html>
<head>
<style>
#y{
	color:green;
}
#n{
	color:red;
}
</style>
</head>
<body align=center>
<br><br><br><br>
<h2>
<?php
	$c=$_GET['t3'];
	$b=$_GET['t2'];
	$conn=mysqli_connect('localhost','root','prabhas@#$123','userdb');
	$rows=mysqli_query($conn,"select  * from institute where Email='$c' and Password='$b'");
	$row=mysqli_fetch_row($rows);
	$count=isset($row[0]);
	if($count==0)
	echo"<div id='n'>invalid credentials</div>";

	else 
	echo"<div id='y'>Signin Success</div>";
    header('location: course.html');
?>
</h2>
</body>
</html>