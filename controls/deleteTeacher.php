<?php 
	require_once("../../config/connDB.php");
    require_once("../../config/config.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:../login.php");
    }
    $sql = "DELETE FROM `members` WHERE mid=".$_GET["mid"];
    mysql_query($sql);
    header("Location:../teacher.php");
 ?>