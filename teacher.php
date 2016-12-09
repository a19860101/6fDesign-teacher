<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:login.php");
    }
    $sql = "SELECT * FROM `members`";
    $result = mysql_query($sql);
	$total = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include("template/head.php") ?>

<body>

    <div id="wrapper">
        <?php include("template/nav.php"); ?>
        <?php include("teacherList.php"); ?>

    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>

