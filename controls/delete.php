<?php
	require_once("../../config/connDB.php");
	$sql = "DELETE FROM `course` WHERE cid=".$_GET["cid"];
	mysql_query($sql);
	header("Location:../course.php");
?>