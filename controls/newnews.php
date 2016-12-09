<?php  
    require_once("../../config/connDB.php");
    $title = $_POST["title"];
    $content = nl2br($_POST["content"]);
	$name = $_POST["name"];
    $sql ="INSERT INTO `news`(title,content,date,name)VALUES('$title','$content',NOW(),'$name')";
    mysql_query($sql);
    header("Location:../new-news.php");
?>