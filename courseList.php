        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            課程列表 <small>Course List</small>
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
                        <h2>課程列表</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="sieve">
                                <thead>
                                    <tr>
                                        <th>日期</th>
                                        <th>科目</th>
                                        <th>學校</th>
                                        <th>單位</th>
                                        <th>時間</th>
                                        <th>上課老師</th>
                                        <th>鐘點支付</th>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <th colspan="2"></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row=mysql_fetch_assoc($result)){ ?>
                                    <?php
											date_default_timezone_set('Asia/Taipei');
											$now = date("Y-m-d");
											if($row["cdate"]>=$now || $row["pay"]==0){		
									?>
                                    <tr>
                                        <td><?php echo $row["cdate"]; ?></td>
                                        <td><?php echo $row["subject"]; ?></td>
                                        <td><?php echo $row["school"]; ?></td>
                                        <td><?php echo $row["department"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["teacher"]; ?></td>
                                        <td>
										<?php switch($row["pay"]){
											case 0:
											echo "<b style='color:red'>未支付</b>";
											break;
											case 1:
											echo "<b style='color:#27f'>已支付</b>";
											break;
											case 2:
											echo "<b style='color:#0a5'>請款中</b>";
											break;
										}
										?>
                                        </td>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <td><a href="controls/delete.php?cid=<?php echo $row["cid"];?>"onclick="return confirm('確認刪除？')">刪除課程</a></td>
                                        <td><a href="edit.php?cid=<?php echo $row["cid"];?>">編輯課程</a></td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <h2>請款中</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="sieve">
                                <thead>
                                    <tr>
                                        <th>日期</th>
                                        <th>科目</th>
                                        <th>學校</th>
                                        <th>單位</th>
                                        <th>時間</th>
                                        <th>上課老師</th>
                                        <th>鐘點支付</th>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <th colspan="2"></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row_a=mysql_fetch_assoc($result_apply)){ ?>
                                    
                                    <tr>
                                        <td><?php echo $row_a["cdate"]; ?></td>
                                        <td><?php echo $row_a["subject"]; ?></td>
                                        <td><?php echo $row_a["school"]; ?></td>
                                        <td><?php echo $row_a["department"]; ?></td>
                                        <td><?php echo $row_a["time"]; ?></td>
                                        <td><?php echo $row_a["teacher"]; ?></td>
                                        <td>
										<?php switch($row_a["pay"]){
											case 0:
											echo "<b style='color:red'>未支付</b>";
											break;
											case 1:
											echo "<b style='color:#27f'>已支付</b>";
											break;
											case 2:
											echo "<b style='color:#0a5'>請款中</b>";
											break;
										}
										?>
                                        </td>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <td><a href="controls/delete.php?cid=<?php echo $row_a["cid"];?>"onclick="return confirm('確認刪除？')">刪除課程</a></td>
                                        <td><a href="edit.php?cid=<?php echo $row_a["cid"];?>">編輯課程</a></td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <h2>課程已結束</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="sieve">
                                <thead>
                                    <tr>
                                        <th>日期</th>
                                        <th>科目</th>
                                        <th>學校</th>
                                        <th>單位</th>
                                        <th>時間</th>
                                        <th>上課老師</th>
                                        <th>鐘點支付</th>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <th colspan="2"></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row_f=mysql_fetch_assoc($result_finish)){ ?>
                                    <?php
											date_default_timezone_set('Asia/Taipei');
											$now = date("Y-m-d");
											if($row_un["cdate"]<$now){		
									?>
                                    <tr>
                                        <td><?php echo $row_f["cdate"]; ?></td>
                                        <td><?php echo $row_f["subject"]; ?></td>
                                        <td><?php echo $row_f["school"]; ?></td>
                                        <td><?php echo $row_f["department"]; ?></td>
                                        <td><?php echo $row_f["time"]; ?></td>
                                        <td><?php echo $row_f["teacher"]; ?></td>
                                        <td>
										<?php switch($row_f["pay"]){
											case 0:
											echo "<b style='color:red'>未支付</b>";
											break;
											case 1:
											echo "<b style='color:#27f'>已支付</b>";
											break;
											case 2:
											echo "<b style='color:#0a5'>請款中</b>";
											break;
										}
										?>
                                        </td>
                                        <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                                        <td><a href="controls/delete.php?cid=<?php echo $row_f["cid"];?>"onclick="return confirm('確認刪除？')">刪除課程</a></td>
                                        <td><a href="edit.php?cid=<?php echo $row_f["cid"];?>">編輯課程</a></td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        
                        
                    </div>
                    
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
