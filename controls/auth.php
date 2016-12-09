<?php 
	require_once("../../config/connDB.php");
    require_once("../../config/config.php");
  	session_start();
	if($_POST["user"]==""||$_POST["pw"]==""){
		header("Location:../login.php?error=1");
	}else{
		if(isset($_POST["user"])&&isset($_POST["pw"])){
			$user = $_POST["user"];
			$pw = $_POST["pw"];

			$sql = "SELECT * FROM `members` WHERE user='$user'";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);

			if($pw == $row["pw"]){
				$_SESSION["USER"] = $row["user"];
				$_SESSION["NAME"] = $row["name"];
				$_SESSION["LEVEL"] = $row["level"];
				header("Location:../index.php");

			}else{
				header("Location:../login.php?error=2");
			}
		}
	}
  

?>
