<?php
	function dbconnect()
	{
		$db = mysqli_connect("localhost","root","","sjbit") or die("no db");

		return $db;

	}
?>