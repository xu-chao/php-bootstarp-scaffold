<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><img src="images/logo2.png" style="margin-left:12%">
                <span style="margin-left:10%">MRMS</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>你好,</span>
                <h2><?php include '../exit.php' ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>维修记录管理系统</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> 首页 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.php">首页信息</a></li>
                            <li><a href="artical.php">发布文章</a></li>
                            <li><a href="download.php">相关下载</a></li>
                            <li><a href="test.php">测试页面</a></li>
                            <li><a href="../index.php">返回系统首页</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> 数据添加 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="user.php">用户录入</a></li>
                            <li><a href="city.php">城市录入</a></li>
                            <li><a href="park.php">公园录入</a></li>
                            <li><a href="project.php">项目录入</a></li>
                            <li><a href="code.php">故障代码录入</a></li>
                            <li><a href="detail.html">设备清单录入</a></li>
                            <li><a href="problem.php">数据录入</a></li>
							<li><a href="upload.php">批量导入</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> 数据查询 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="query.php">详细查询</a></li>
                            <li><a href="all.php">总体查询</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> 数据分析 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="inquery.php">图样展示</a></li>
                            <li><a href="zzt.php">图样分析</a></li>
                        </ul>
                    </li>
					<li><a><i class="fa fa-cubes"></i> 设备信息 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="equipment.php">全部信息</a></li>
                            <li><a href="info.php">信息录入</a></li>
                            <li><a href="infoupload.php">批量导入</a></li>
                        </ul>
                    </li>
					<li><a><i class="fa fa-slack"></i> 设备清单 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="device.php">全部设备清单</a></li>
                            <li><a href="deviceinfo.php">设备清单录入</a></li>
                            <li><a href="deviceinfoupload.php">设备清单批量导入</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
