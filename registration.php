<html>
<body align=center>
<br><br><br><br>
<h2>
<?php
	$a=$_GET['t1'];
	$b=$_GET['t2'];
    $c=$_GET['t3'];
	$d=$_GET['t4'];
    $e=$_GET['t5'];
    $f=$_GET['t6'];
    $g=$_GET['t7'];
 
	$conn=mysqli_connect('localhost','root','prabhas@#$123','userdb');
	mysqli_query($conn,"insert into institute values('$a','$b','$c','$d','$e','$f','$g')");
	echo"Registered";

?>
</h2>
</body>
</html>