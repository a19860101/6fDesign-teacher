<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
	$teacher = $_SESSION["NAME"];
    $sql = "SELECT * FROM `members`WHERE name='$teacher'";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
	$total = mysql_num_rows($result);
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $pw = $_POST["pw"];
		$bank = $_POST["bank"];
        $sql_update = "update `members` set name='$name',mail='$mail',pw='$pw',bank='$bank' WHERE mid=".$_GET["mid"];
        mysql_query($sql_update);
        header("Location:login.php?msg=update");
    }
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
                            修改個人資料 <small>Lecturer Info Update</small>
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
                        <form action="" method="post">
                            <div class="col-md-12 form-group">
                                <label class="col-md-2">講師姓名</label>   
                                <input class="col-md-4"type="text" name="name" id="name"value="<?php echo $row["name"];?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-md-2">Email</label>   
                                <input class="col-md-4"type="text"  name="mail"value="<?php echo $row["mail"];?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-md-2">密碼</label>   
                                <input class="col-md-4"type="password"  name="pw"value="<?php echo $row["pw"];?>">
                            </div>
                             <div class="col-md-12 form-group">
                                <label class="col-md-2">遠東銀行帳號</label>   
                                <input class="col-md-4"type="text"  name="bank"value="<?php echo $row["bank"];?>">
                            </div>
                           <div class="col-md-12 form-group">
                                <label class="col-md-2"></label>   

                                <input class="" type="submit"value="送出" name="submit">
                                <input class="" type="button"value="取消" onclick="history.back();">
                            </div>
                        </form> 
                  
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
