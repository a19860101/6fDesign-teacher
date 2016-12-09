<?php 
	require_once("../../config/connDB.php");
    require_once("../../config/config.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:../login.php");
    }
    $sql = "DELETE FROM `news` WHERE nid=".$_GET["nid"];
    mysql_query($sql);
    header("Location:../news.php");
 ?>