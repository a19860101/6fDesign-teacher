<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo TEACHER_TITLE; ?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["NAME"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="teacherDetail.php"><i class="fa fa-fw fa-user"></i> 使用者</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/teacher/controls/logout.php?logout=true"><i class="fa fa-fw fa-power-off"></i> 登出</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="course.php"><i class="fa fa-fw fa-table"></i> 課程列表</a>
                    </li>
                    <li >
                        <a href="file.php"><i class="fa fa-fw fa-download"></i> 檔案下載</a>
                    </li>

                    <?php if(isset($_SESSION["LEVEL"])&&$_SESSION["LEVEL"]==0){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#course"><i class="fa fa-fw fa-gears"></i> 課程管理 <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="course" class="collapse">
                            
                            <li>
                                <a href="new-course.php">新增課程</a>
                            </li>
                            <li>
                                <a href="course_admin.php">課程列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#teacher"><i class="fa fa-fw fa-group"></i> 講師管理 <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="teacher" class="collapse">
                            
                            <li>
                                <a href="new-teacher.php">新增講師</a>
                            </li>
                            <li>
                                <a href="teacher.php">講師列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-comments-o"></i> 訊息管理 <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            
                            <li>
                                <a href="new-news.php">新增訊息</a>
                            </li>
                            <li>
                                <a href="news.php">訊息列表</a>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>