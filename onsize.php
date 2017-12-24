<?php

 $con = mysqli_connect("localhost", "root", "5834100107", "stock check");
		mysqli_set_charset($con,"utf8");

		$shirt = $_GET ["shirt"];
		$Longarm = $_GET ["Longarm"];
		$color = $_GET ["color"];


		$query = "INSERT INTO stock VALUES ('$shirt','$Longarm','$color')";
		//echo $query;

		mysqli_query($con, $query);
		// header("Location:login.php");
		echo $a;
		echo "บันทึกข้อมูลเรียบร้อย"
?>		