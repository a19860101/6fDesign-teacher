        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            講師列表 <small>Lecturer List</small>
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
                        <h2>講師列表  <small>目前講師人數：<?php echo $total;?></small></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="sieve">
                                <thead>
                                    <tr>
                                        <th>講師編號</th>
                                        <th>講師姓名</th>
                                        <th>Email</th>
                                        <th>帳號</th>
                                        <th>遠東銀行帳號</th>
                                        <th>權限</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row=mysql_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $row["mid"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["mail"]; ?></td>
                                        <td><?php echo $row["user"]; ?></td>
                                        <td><?php echo $row["bank"]; ?></td>
                                        <td>
                                            <?php
                                                if($row["level"]==0){ 
                                                echo "管理者";
                                                }else{
                                                    echo "一般講師";
                                                }
                                            ?>
                                        </td>
                                        <td colspan="2">
                                            <a href="controls/levelUpdate.php?mid=<?php echo $row["mid"];?>&level=<?php echo $row["level"];?>">更改權限</a>&nbsp;
                                            <a href="controls/deleteTeacher.php?mid=<?php echo $row["mid"];?>"onclick="return confirm('確認刪除')">刪除講師</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
