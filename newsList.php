        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            訊息列表 <small>News List</small>
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
                        <h2>訊息列表  </h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="sieve">
                                <thead>
                                    <tr>
                                        <th>訊息編號</th>
                                        <th>標題</th>
                                        <th>內容</th>
                                        <th>發佈日期</th>
                                        <th>發佈者</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row=mysql_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $row["nid"]; ?></td>
                                        <td><?php echo $row["title"]; ?></td>
                                        <td><?php echo $row["content"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td>
                                        	<a href="controls/deleteNews.php?nid=<?php echo $row["nid"]?>"onclick="return confirm('確認刪除？')">刪除</a>
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
