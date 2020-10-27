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
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
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
                <h3>添加乐园大型游乐设备信息</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <!--<input type="text" class="form-control" placeholder="请输入乐园大型游乐设备信息...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>-->
                  </div>
                </div>
              </div>
            </div>
          <!-- /top tiles -->          
            <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>乐园大型游乐设备信息录入 <small>*为必填项</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">乐园大型游乐设备信息管理</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left"
                     action="../insert_info.php" method="post">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s1" class="select2_single form-control" tabindex="-1"
                           required="required" name="CityName">
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s2" class="select2_single form-control" tabindex="-1"
                           required="required" name="ParkName">
                          </select>
                        </div>
                      </div>
					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属设备项目
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s3" class="select2_single form-control" tabindex="-1"
                           required="required" name="ProjectName">
                          </select>
                          </div>
                        </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备类型
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：陀螺类"
                          required="required" name="EquipmentType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备级别
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：A级"
                          required="required" name="EquipmentLevel">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">型号规格
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：JS-I"
                          required="required" name="EquipmentModel">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">使用寿命
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：15年"
                          required="required" name="WorkingLife">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备重量
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                          required="required" name="EquipmentWeight">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">出厂编号
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：20108025"
                          required="required" name="FactoryNum">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备制造单位
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Manufactor" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">制造日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD" name="ProductionDate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">注册登记号
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：64104302002011060001"
                          required="required" name="RegistrationNum">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">安装日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker2">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="InstallDate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">下次检验日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker3">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="NextDate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">设备到期日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker4">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="EndDate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">是否在用
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：在用"
                          required="required" name="UseOrNo">
                        </div>
                      </div>                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">重置</button>
                          <button type="submit" class="btn btn-success">提交</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>大型游乐设备信息 <small>设备信息列表详情示例</small></h2>
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
                    <table id="datatable-buttons_info" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>城市</th>
                          <th>公园</th>
                          <th>设备名称</th>
                          <th>设备类型</th>
                          <th>设备级别</th>
                          <th>型号规格</th>                         
                          <th>使用寿命</th>
                          <th>设备重量</th>
                          <th>出厂编号</th>
                          <th>设备制造单位</th>
                          <th>制造日期</th>
                          <th>注册登记号</th>
                          <th>安装日期</th>
                          <th>下次检验日期</th>
                          <th>设备到期日期</th>
                          <th>是否在用</th>
                          <th>信息ID</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>城市</th>
                          <th>公园</th>
                          <th>设备名称</th>
                          <th>设备类型</th>
                          <th>设备级别</th>
                          <th>型号规格</th>                         
                          <th>使用寿命</th>
                          <th>设备重量</th>
                          <th>出厂编号</th>
                          <th>设备制造单位</th>
                          <th>制造日期</th>
                          <th>注册登记号</th>
                          <th>安装日期</th>
                          <th>下次检验日期</th>
                          <th>设备到期日期</th>
                          <th>是否在用</th>
                          <th>信息ID</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../js/option1.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>

    <!-- 自定义mydatepicker -->
    <script>
    $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm'
    });
    $('#myDatepicker3').datetimepicker({
        format: 'YYYY-MM-DD HH:mm'
    });
    $('#myDatepicker4').datetimepicker({
        format: 'YYYY-MM-DD HH:mm'
    });
    </script>  
  </body>
</html>
