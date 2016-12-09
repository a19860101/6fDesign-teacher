        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
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
                    	<h2 class=" news-title">最新消息</h2>
                    </div>
                </div>
				<div class="row">
               
                        <?php while($row_news=mysql_fetch_assoc($result_news)){?>
                        <div class="col-lg-12">
                        	<h3><?php echo $row_news["title"];?></h2>
                            <p><?php echo $row_news["content"];?></p>
                            <p class="news-name"><?php echo $row_news["name"]?> 於 <?php echo $row_news["date"];?> 發佈</p>
                            <div class="line"></div>
                        </div>
                        <?php }?>
                
                </div>
                
				<div class="row">
                    <div class="col-lg-12">
                    	
                    	<?php if($total==0){ ?>
                            <h2>目前無課程</h2>
                        <?php }else{ ?>
                        
                        <h2>我的課程</h2>
                        <div class="table-responsive">
                        	
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>日期</th>
                                        <th>科目</th>
                                        <th>學校</th>
                                        <th>單位</th>
                                        <th>時間</th>
                                        <th>上課老師</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php while($row=mysql_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $row["cdate"]; ?></td>
                                        <td><a href="javascript:;" class="subject"><?php echo $row["subject"]; ?></a>
                                        	<div class="detail">
                                            	<ul>
                                                	<li>聯絡人：<?php echo $row["contact"];?></li>
                                                    <li>聯絡人電話：<?php echo $row["phone"];?></li>
                                                    <li>上課教室：<?php echo $row["locate"];?></li>
                                                    <li>備註：<?php echo nl2br($row["comment"]);?></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td><?php echo $row["school"]; ?></td>
                                        <td><?php echo $row["department"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["teacher"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php }?>
                    </div>
                    
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
