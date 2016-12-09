<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
	$teacher = $_SESSION["NAME"];
    $sql = "SELECT * FROM `course`WHERE teacher='$teacher'";
    $result = mysql_query($sql);
	$total = mysql_num_rows($result);
	
	$sql_news = "SELECT * FROM `news` ORDER BY nid DESC";
	$result_news = mysql_query($sql_news);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include("template/head.php") ?>

<body>

    <div id="wrapper">
        <?php include("template/nav.php"); ?>
        <?php include("dashboard.php"); ?>
    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
