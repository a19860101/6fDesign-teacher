<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:login.php");
    }
    $sql = "SELECT * FROM `members`";
    $result = mysql_query($sql);
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
                            新增講師 <small>New Teacher</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">    
                <form action="controls/newteacher.php" method="post">
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">講師姓名</label>   
                        <input class="col-md-4"type="text" name="name" id="name">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">Email</label>   
                        <input class="col-md-4"type="text"  name="mail" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">密碼</label>   
                        <input class="col-md-4"type="password"  name="pw">
                    </div>
                   <div class="col-md-12 form-group">
                        <label class="col-md-2"></label>   

                        <input class="" type="submit"value="送出">
                        <input class="" type="button"value="取消" onclick="history.back();">
                    </div>
                </form>
            </div>
    </div>

    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>

