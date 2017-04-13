<?php
//to count how many times the page has visited
session_start();
if(isset($_SESSION['c']))
{
	$_SESSION['c'] +=1;
}
else
{
	$_SESSION['c']=1;
}
$msg="you have visited this page".$_SESSION['c'] ." times in this session";
?>
<!DOCTYPE html>
<html>
	<body>
		<?php echo $msg; ?>
	</body>
</html>
