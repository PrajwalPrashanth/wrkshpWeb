<?php
include ("mysqldb.php");
$usn = $_POST['usn'];
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$un = $_POST['usrname'];
$ps = $_POST['pass'];
$cn = $_POST['cname'];

$db = dbconnect();
//mysqli_select_db("sjbit");
$sql ="INSERT INTO student VALUES ('$usn','$ln','$fn','$un','$ps','$cn');";
$res = mysqli_query($db,$sql);

if($res)
{
	echo "<h1>data insterted successfull</h1>";
}
else
{
	echo "<h1>data insterted unsuccessfull</h1>";
}
?>