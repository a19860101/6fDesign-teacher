<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    $sql = "SELECT * FROM `course` ORDER BY cdate DESC";
    $result = mysql_query($sql);

?>
<!DOCTYPE html>
<html lang="en">

    <?php include("template/head.php") ?>

<body>

    <div id="wrapper">
        <?php include("template/nav.php"); ?>
        <?php include("courseList_admin.php"); ?>

    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
