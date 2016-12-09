<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    $sql = "SELECT * FROM `course` ORDER BY cdate DESC";
	$sql_finish = "SELECT * FROM `course` WHERE pay=1 ORDER BY cdate DESC";//結案
	$sql_apply = "SELECT * FROM `course` WHERE pay=2 ORDER BY cdate DESC";//請款
    $result = mysql_query($sql);
	$result_finish = mysql_query($sql_finish);
	$result_apply = mysql_query($sql_apply);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include("template/head.php") ?>

<body>

    <div id="wrapper">
        <?php include("template/nav.php"); ?>
        <?php include("courseList.php"); ?>

    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
