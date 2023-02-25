<?php
$connection=mysqli_connect("localhost","root","","mysql8");
$btn=$_POST["btn"];
$sql="DELETE FROM users WHERE id=$btn";
$result=mysqli_query($connection,$sql);
header("Location:index.php")
?>