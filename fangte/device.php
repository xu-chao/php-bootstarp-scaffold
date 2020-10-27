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
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
				  <div class="ln_solid"></div>
                  <?php include 'add_device.php';
                        include 'edit_device.php';
                        include 'delete_device.php'; ?>
                   <div class="x_content"> 
                     <table id="devices" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
						  <th>是否到货</th>
						  <th>提单状态</th>
                          <th>公园</th>
                          <th>项目</th>
                          <th>系统分类</th>
                          <th>系统名称</th>
                          <th>地址</th>						  
                          <th>单位</th>
                          <th>数量</th>						  
                          <th>规格型号</th> 						  
                          <th>部门</th>
                          <th>备注</th>                          
                          <th>提单日期</th>
                          <th>需到货日</th>
                          <th>申请人</th>
                          <th>采购单号</th>
                          <th>采购人</th>
                          <th>合同状态</th>
                          <th>合同厂家</th>
                          <th>生产状态</th>
                          <th>城市</th>						  
                          <th>ID</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>是否到货</th>
						  <th>提单状态</th>
                          <th>公园</th>
                          <th>项目</th>
                          <th>系统分类</th>
                          <th>系统名称</th>
                          <th>地址</th>						  
                          <th>单位</th>
                          <th>数量</th>						  
                          <th>规格型号</th> 						  
                          <th>部门</th>
                          <th>备注</th>                          
                          <th>提单日期</th>
                          <th>需到货日</th>
                          <th>申请人</th>
                          <th>采购单号</th>
                          <th>采购人</th>
                          <th>合同状态</th>
                          <th>合同厂家</th>
                          <th>生产状态</th>
                          <th>城市</th>						  
                          <th>ID</th>
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
	<!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
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
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
    <script src="../js/option1.js"></script>
    <script src="../build/js/device.js"></script>
    <script>
    $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker3').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker4').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    </script>
  </body>   
</html>
