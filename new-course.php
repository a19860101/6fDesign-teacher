<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    // $sql = "SELECT * FROM `course`";
    // $result = mysql_query($sql);
	$sql_members = "SELECT name FROM `members`";
	$result_members = mysql_query($sql_members);
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
                            新增課程 <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">    
                <form action="controls/newcourse.php" method="post">
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">日期</label>   
                        <input class="col-md-4"type="text" name="date" id="date">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">星期</label>   
                        <input class="col-md-4"type="text"  name="day">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">科目</label>   
                        <select name=" subject">
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
                            <option value="其他">其他</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">學校</label>   
                        <input class="col-md-4"type="text"  name="school">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">科系</label>   
                        <input class="col-md-4"type="text"  name="department">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">時間</label>   
                        <input class="col-md-4"type="text"  name="time">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">時數</label>   
                        <input class="col-md-4"type="text"  name="hour">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">鐘點費</label>   
                        <input class="col-md-4"type="text"  name="price">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">上課地點</label>   
                        <input class="col-md-4"type="text"  name="locate">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">聯絡人</label>   
                        <input class="col-md-4"type="text"  name="contact">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">聯絡電話</label>   
                        <input class="col-md-4"type="text"  name="phone">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">Email</label>   
                        <input class="col-md-4"type="text"  name="email">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">備註</label>   
                        <textarea name="comment"  cols="40" rows="6"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2">授課講師</label>   
                        <select name=" teacher">
                        	<option value="未定">未定</option>
                        <?php while($row=mysql_fetch_assoc($result_members)){ ?>
                            <option value="<?php echo $row["name"]?>"><?php echo $row["name"]?></option>
                        <?php } ?>

                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-md-2"></label>   

                        <input class="" type="submit"value="送出">
                    </div>
                </form>
            </div>
    </div>
    <!-- jQuery -->
    <?php include("template/footer.php"); ?>

</body>

</html>
