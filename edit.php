<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    $sql = "SELECT * FROM `course` WHERE cid=".$_GET["cid"];
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
	$sql_members = "SELECT name FROM `members`";
	$result_members = mysql_query($sql_members);

    if(isset($_POST["update"])){
        $date = $_POST["date"];
        $day = $_POST["day"];
        $subject = $_POST["subject"];
        $school = $_POST["school"];
        $department = $_POST["department"];
        $time = $_POST["time"];
        $hour = $_POST["hour"];
        $price = $_POST["price"];
        $locate = $_POST["locate"];
        $contact = $_POST["contact"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
        $teacher = $_POST["teacher"];
		$pay = $_POST["pay"];
        $sql_update = 
                    "UPDATE `course` 
                    SET 
                            cdate='$date',
                            day='$day',
                            subject='$subject',
                            school='$school',
                            department='$department',
                            time='$time',
                            hour='$hour',
                            price='$price',
                            locate='$locate',
                            contact='$contact',
                            phone='$phone',
                            email='$email',
                            comment='$comment',
                            teacher='$teacher',
							pay='$pay'
                    WHERE
                        cid=".$_GET["cid"];
        mysql_query($sql_update);
        header("Location:course.php");

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
                            編輯課程 <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Edit
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">    
                <form action="" method="post">
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">日期</label>   
                        <input class="col-md-4"type="text" name="date" id="date" value="<?php echo $row["cdate"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">星期</label>   
                        <input class="col-md-4"type="text"  name="day" value="<?php echo $row["day"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">科目</label>   
                        <select name=" subject">
                            <option value="<?php echo $row["subject"];?>"><?php echo $row["subject"];?></option>
                            <option value="ACA PS CS6">ACA PS CS6</option>
                            <option value="ACA FL CS6">ACA FL CS6</option>
                            <option value="ACA DW CS6">ACA DW CS6</option>
                            <option value="ACA PR CS6">ACA PR CS6</option>
                            <option value="ACA PS CC">ACA PS CC</option>
                            <option value="ACA AI CC">ACA AI CC</option>
                            <option value="ACA ID CC">ACA ID CC</option>
                            <option value="ACA FL CC">ACA FL CC</option>
                            <option value="ACA DW CC">ACA DW CC</option>
                            <option value="ACA PR CC">ACA PR CC</option>
                            <option value="ACA PS CC 2015">ACA PS CC 2015</option>
                            <option value="ACA AI CC 2015">ACA AI CC 2015</option>
                            <option value="ACA ID CC 2015">ACA ID CC 2015</option>
                            <option value="ACA FL CC 2015">ACA FL CC 2015</option>
                            <option value="ACA DW CC 2015">ACA DW CC 2015</option>
                            <option value="ACA PR CC 2015">ACA PR CC 2015</option>
                            <option value="MOS WORD 2010">MOS WORD 2010</option>
                            <option value="MOS EXCEL 2010">MOS EXCEL 2010</option>
                            <option value="MOS PPT 2010">MOS PPT 2010</option>
                            <option value="MOS OUTLOOK 2010">MOS OUTLOOK 2010</option>
                            <option value="MOS ACCESS 2010">MOS ACCESS 2010</option>
                            <option value="MOS WORD 2013">MOS WORD 2013</option>
                            <option value="MOS EXCEL 2013">MOS EXCEL 2013</option>
                            <option value="MOS PPT 2013">MOS PPT 2013</option>
                            <option value="MOS OUTLOOK 2013">MOS OUTLOOK 2013</option>
                            <option value="MOS ACCESS 2013">MOS ACCESS 2013</option>
                            <option value="IC3 GS3">IC3 GS3</option>
                            <option value="IC3 GS4">IC3 GS4</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">學校</label>   
                        <input class="col-md-4"type="text"  name="school"value="<?php echo $row["school"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">科系</label>   
                        <input class="col-md-4"type="text"  name="department"value="<?php echo $row["department"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">時間</label>   
                        <input class="col-md-4"type="text"  name="time"value="<?php echo $row["time"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">時數</label>   
                        <input class="col-md-4"type="text"  name="hour"value="<?php echo $row["hour"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">鐘點費</label>   
                        <input class="col-md-4"type="text"  name="price"value="<?php echo $row["price"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">上課地點</label>   
                        <input class="col-md-4"type="text"  name="locate"value="<?php echo $row["locate"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">聯絡人</label>   
                        <input class="col-md-4"type="text"  name="contact"value="<?php echo $row["contact"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">聯絡電話</label>   
                        <input class="col-md-4"type="text"  name="phone"value="<?php echo $row["phone"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">Email</label>   
                        <input class="col-md-4"type="text"  name="email"value="<?php echo $row["email"];?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">備註</label>   
                        <textarea name="comment"  cols="40" rows="6"><?php echo $row["comment"]; ?>
                        </textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">授課講師</label>   
                  		<select name=" teacher">
                        	<option value="<?php echo $row["teacher"];?>"><?php echo $row["teacher"];?></option>
                        <?php while($row=mysql_fetch_assoc($result_members)){ ?>
                            <option value="<?php echo $row["name"]?>"><?php echo $row["name"]?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">鐘點支付</label>  
                  		<select name="pay">
                        	<option value="<?php echo $row["pay"];?>" selected></option>
                            <option value="0">未支付</option>
                            <option value="1">已支付</option>
                            <option value="2">請款中</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2"></label>   

                        <input class="" type="submit"value="送出"name="update">
                        <input class="" type="button"value="取消"onclick="location.href='course.php'">
                    </div>
                </form>
            </div>
    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
