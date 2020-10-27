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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php 
    include "header.php";
    include "icon.php"; ?>                 
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
              <div class="title_left">
                <h3>相关下载</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   <input type="text" class="form-control" placeholder="请输入相关内容...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> 这里会发布最新的下载资料 <small>点击下载</small></h2>
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

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li><a href="#download" data-toggle="tab">下载中心---推荐浏览器点击下载</a>
                        </li>
                        <li class="active"><a href="#MRMS" data-toggle="tab">维修故障记录系统信息点击下载</a>
                        </li>
                        <li><a href="#INFO" data-toggle="tab">乐园大型游乐设备信息点击下载</a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane" id="download">
                          <p class="lead">推荐浏览器下载</p>
                          <p>推荐浏览器下载->32位<a href="../src/ChromeSetup_32.exe"><b style="color:red">   点击下载...</b></a></p>
						  <p>推荐浏览器下载->64位<a href="../src/ChromeSetup_64.exe"><b style="color:red">   点击下载...</b></a></p>
                        </div>
                        <div class="tab-pane active" id="MRMS">
                        <p class="lead">维修故障记录系统信息下载</p>
                        <p>网页故障记录批量上传模板<a href="../src/网页故障记录批量上传模板.xls"><b style="color:red">   点击下载...</b></a></p>
                        </div>
                        <div class="tab-pane" id="INFO">
                        <p class="lead">乐园大型游乐设备信息下载</p>
                        <p>乐园大型游乐设备信息登记表批量上传模板<a href="../src/乐园大型游乐设备信息登记表上传模板.xls"><b style="color:red""">   点击下载...</b></a></p></div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </div>

        <!-- footer content -->
        <?php 
    include "footor.php"; 
    ?>        
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
  
  </body>
    <script src="js/datepicker/date.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
</html>
