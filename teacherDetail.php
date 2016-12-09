<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
	$teacher = $_SESSION["NAME"];
    $sql = "SELECT * FROM `members`WHERE name='$teacher'";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
	$total = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include("template/head.php") ?>

<body>

    <div id="wrapper">
        <?php include("template/nav.php"); ?>
                <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            講師個人資料 <small>Lecturer Info</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li>姓名：<?php echo $row["name"];?></li>
                            <li>Email：<?php echo $row["mail"];?></li>
                            <li>帳號：<?php echo $row["user"];?></li>
                            <li>密碼：<?php echo $row["pw"];?></li>
                            <li>遠東銀行帳號：<?php echo $row["bank"];?></li>
                        </ul>  
                  		<a href="teacherUpdate.php?mid=<?php echo $row["mid"];?>">修改資料</a>
                    </div>
                    
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>

    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
