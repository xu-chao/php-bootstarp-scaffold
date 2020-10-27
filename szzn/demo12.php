<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>MRMS</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="images/logo2.png"
               style="margin-left:12%">
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
                      <li><a href="detail.html">相关下载</a></li>
                      <li><a href="detail.html">关于我们</a></li>
                      <li><a href="../index.php">返回系统首页</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> 数据添加 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="user.php">用户录入</a></li>
                      <li><a href="city.php">城市录入</a></li>
                      <li><a href="park.php">公园录入</a></li>
                      <li><a href="project.php">项目录入</a></li>
                      <li><a href="problem.php">详细问题录入</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> 数据查询 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="query.php">详细查询</a></li>
                      <li><a href="#">总体查询</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> 数据分析 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inquery.php">图样展示</a></li>
                      <li><a href="zzt.php">图样分析</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt=""><?php include '../exit.php' ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> 个人信息</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>设置</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">帮助</a></li>
                    <li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                  </ul>
                </li>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
              <div class="title_left">
                <h3>数据表格详细页</h3>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>查询结果处理 <small>数据仅供参考</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="btn-group operation">
                    <button id="btn_add" type="button" class="btn bg-primary">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>新增
                    </button>
                    <button id="btn_edit" type="button" class="btn bg-info">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>修改
                    </button>
                    <button id="btn_delete" type="button" class="btn btn-success">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>删除
                    </button>
                  </div>
                  <?php include 'add.php';
                        include 'edit.php';
                        include 'delete.php'; ?>
                   <div class="x_content">
                     <table id="problems" class="table table-hover table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>录入时间</th>
                          <th>维修开始时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>详细描述</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>零件型号</th>
                          <th>更换数量</th>
                          <th>维修结束时间</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>备注</th>
                          <th>疏散次数</th>
                          <th>是否解决</th>
                          <th>所属项目</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
                          <th>问题ID</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>录入时间</th>
                          <th>维修开始时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>详细描述</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>零件型号</th>
                          <th>更换数量</th>
                          <th>维修结束时间</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>备注</th>
                          <th>疏散次数</th>
                          <th>是否解决</th>
                          <th>所属项目</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
                          <th>问题ID</th>
                          </tr>
                      </tfoot> 
                    </table>  
                  </div> 
                </div>
              </div>
            </div> 

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            fangte.applinzi.com <a href="https://fangte.applinzi.com">方特万事屋</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<!--     <script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../js/option1.js"></script>
    <script src="../js/option2.js"></script>
    <script src="../build/js/test.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
    <script>
    $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker3').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker4').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker5').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker6').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    </script>
  </body>
</html>
