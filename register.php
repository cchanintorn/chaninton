<?php

 $con = mysqli_connect("localhost", "root", "5834100107", "stock check");
		mysqli_set_charset($con,"utf8");

		$username = $_GET["username"];
		$password = $_GET ["password"];
		$email = $_GET ["email"];


		$query = "INSERT INTO login VALUES ('','$username','$password','$email')";
		//echo $query;

		mysqli_query($con, $query);
		header("Location:login.php");
		echo "บันทึกข้อมูลเรียบร้อย"
?>		