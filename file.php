<?php 
    require_once("../config/connDB.php");
    require_once("../config/config.php");
    include("controls/forbidden.php");
    //$sql = "SELECT * FROM `course` ORDER BY cdate DESC";
    //$result = mysql_query($sql);
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
                            檔案下載 <small>File Download</small>
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
                         <h2>下載列表</h2>
                        <div class="table-responsive">
                        <h3>Mos題目檔與範例檔</h3>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td>Mos Access 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos PowerPoint 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos Word 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos Excel 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos Outlook 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
								</tr>
                             </table>
                             <h3>Mos解題影片</h3>
                             <table  class="table table-bordered table-hover">
                                <tr>
                                    <td>Mos Access 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos PowerPoint 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos Word 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>Mos Excel 2010</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                </table>
                                <h3>ACA題目檔與練習檔</h3>
                             <table  class="table table-bordered table-hover">
                                <tr>
                                    <td>ACA Photoshop CS6</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>ACA Illustrator CC</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>ACA Dreamweaver CS6</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                                <tr>
                                    <td>ACA Flash CS6</td>
                                    <td><a href="">下載</a></td>
                                    <td>2014-10-05</td>
                                </tr>
                            </table>
                        </div>
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
