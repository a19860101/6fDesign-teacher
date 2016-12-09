<?php 
	require_once("../../config/connDB.php");
    require_once("../../config/config.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:../login.php");
    }
    $sql = "SELECT * FROM `members`WHERE mid=".$_GET["mid"];
    $result = mysql_query($sql);

    if(isset($_GET["level"])&&$_GET["level"]==1){
        mysql_query("update `members` set level=0 where mid=".$_GET["mid"]);
        header("Location:../teacher.php");
    }else if(isset($_GET["level"])&&$_GET["level"]==0){
        mysql_query("update `members` set level=1 where mid=".$_GET["mid"]);
         header("Location:../teacher.php");
    }
 ?>