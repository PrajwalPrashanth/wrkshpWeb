<?php
include ("mysqldb.php");
$usn = $_POST['usn'];


$db = dbconnect();

$sql ="select * from student where usn like '%$usn%';";
$res = mysqli_query($db,$sql);

if($res)
{
	echo "hello";
	$numrow = mysqli_num_rows($res);
	echo "number of rows ".$numrow."</h1>";
}
else
{
	echo "<h1>data insterted unsuccessfull</h1>";
}
?>