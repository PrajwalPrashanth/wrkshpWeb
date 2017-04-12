<?php
#phpinfo();
$hide = $_POST['hide'];
$fn = $_POST['firstname'];
$mn = $_POST['middlename'];
$ln = $_POST['lastname'];
$gen = $_POST['gender'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$usr = $_POST['mail'];
$pss = $_POST['pssd'];
$rep = $_POST['pssdre'];
$langs = $_POST['langs'];
$des = $_POST['description'];
echo "<h1>HELLO ".$fn."</h1>" ; 

$values= array('hid' => $hide , );
 
?>
