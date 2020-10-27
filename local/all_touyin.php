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

    <title><?php echo $_SESSION['cityname']; ?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	
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
        <?php include "header.php";include "icon.php";?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
              <div class="title_left">
                <h3>数据表格详细页</h3>
              </div>
            </div>
          <!-- /top tiles -->
          
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>查询结果处理 <small>投影数据仅供参考</small></h2>
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
                   <div class="x_content"> 
                     <table id="datatable-buttons_touyin" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>录入时间</th>
                          <th>所属项目</th>
                          <th>是否疏散</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>详细描述</th>                         
                          <th>更换零件名称</th>
                          <th>零件型号</th>
                          <th>更换数量</th>
                          <th>设备故障时间</th>
                          <th>维修结束时间</th>
                          <th>维修持续时间</th>
                          <th>负责人</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>结论</th>                          
                          <th>中断时长</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>录入时间</th>
                          <th>所属项目</th>
                          <th>是否疏散</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>详细描述</th>                         
                          <th>更换零件名称</th>
                          <th>零件型号</th>
                          <th>更换数量</th>
                          <th>设备故障时间</th>
                          <th>维修结束时间</th>
                          <th>维修持续时间</th>
                          <th>负责人</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>结论</th>                          
                          <th>中断时长</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
                          </tr>
                      </tfoot>                                      
                    </table>  
                  </div> 
                </div>
              </div>
            </div> 

        <!-- footer content -->
        <?php include "footor.php";?> 
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<!--     <script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
	<script src="js/datepicker/date.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
  
  </body>
</html>
