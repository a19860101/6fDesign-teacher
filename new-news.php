<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    if($_SESSION["LEVEL"]!=0){
        header("Location:login.php");
    }
    $sql = "SELECT * FROM `news`";
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
                            新增訊息 <small>New Teacher</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">    
                <form action="controls/newnews.php" method="post">
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">標題</label>   
                        <input class="col-md-4"type="text" name="title" id="title">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">內容</label>   
                    </div>
                    <div class="col-md-12 form-group">
                        
                        <textarea class=" ckeditor"type="content"  name="content" required></textarea>
                    </div>
                     <div class="col-md-12 form-group">
                        <label class="col-md-2">發佈者</label>   
                        <input class="col-md-4"type="text" name="name" id="name" value="<?php echo $_SESSION["NAME"]?>">
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

