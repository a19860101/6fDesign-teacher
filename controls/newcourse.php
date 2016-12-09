<?php 
	require_once("../../config/connDB.php");
	$date = $_POST["date"];
	$day = $_POST["day"];
	$subject = $_POST["subject"];
	$school = $_POST["school"];
	$department = $_POST["department"];
	$time = $_POST["time"];
	$hour = $_POST["hour"];
	$price = $_POST["price"];
	$locate = $_POST["locate"];
	$contact = $_POST["contact"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
	$teacher = $_POST["teacher"];
	$sql ="INSERT INTO `course`(
			cdate,day,subject,school,department,time,hour,price,locate,contact,phone,email,comment,teacher
 			)VALUES(
			'$date','$day','$subject','$school','$department','$time','$hour','$price','$locate',
			'$contact','$phone','$email','$comment','$teacher')";
	mysql_query($sql);
	header("Location:../new-course.php");

?>