<?php  
    require_once("../../config/connDB.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $pw = $_POST["pw"];
    $sql ="INSERT INTO `members`(name,mail,user,pw)VALUES('$name','$mail','$mail','$pw')";
    mysql_query($sql);
    header("Location:../new-teacher.php");
?>