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
        <?php include "header.php";include "icon.php";?>         <!-------------------------左标签  头标签  尾标签------------------------->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="page-title">
              <div class="title_left">
                <h3>添加维修记录</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入维修记录信息...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          <!-- /top tiles -->          
            <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>维修记录录入 <small>*为必填项</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">维修记录管理</a>
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
                     action="../insert_problem.php" method="post">
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">录入时间
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker3">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="PDTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">设备故障时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="RepairTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">维修结束时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker2">
                            <input type="datetime" class="form-control"
                            placeholder="YYYY-MM-DD HH:MM" name="EndTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="ProblemType">
                            <option value="投影">投影</option>
                            <option value="音响">音响</option>
                            <option value="灯光">灯光</option>
                            <option value="机械">机械</option>
                            <option value="电气">电气</option>
                            <option value="软件">软件</option>
                            <option value="液压">液压</option>
                            <option value="效果">效果</option>
							<option value="电脑">电脑</option>
                            <option value="其他">其他</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">问题概要
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="七号小车出现问题"
                          required="required" name="Problem">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">详细描述
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Info" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">负责人
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：张三"
                          required="required" name="Engineer">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">零件更换名称
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：安卓盒子"
                          required="required" name="Product">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">零件型号
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：SONY LMP-F330"
                          required="required" name="ProType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">更换数量
                      <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="text" class="form-control" placeholder="例如：2个"
                       required="required" name="Mount">
                      </div>
                      </div>                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">维修持续时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：15天"
                          required="required" name="LastingTime">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">维修人员
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：许超"
                          required="required" name="RepairPer">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">原因分析
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Reason" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                       </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">结论
                      <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Note" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12">是否疏散
                       <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
							 <select class="select2_single form-control" tabindex="-1"
                              required="required" name="Evacuate">
                              <option value="是">是</option>
                              <option value="否">否</option>
                             </select>
                         </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">中断时长
                          <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
						    <input type="text" class="form-control" placeholder="例如：10"
                             required="required" name="DoSolve">
                            <!--<select class="select2_single form-control" tabindex="-1"
                              required="required" name="DoSolve">
                              <option value="1">是</option>
                              <option value="2">否</option>
                             </select>-->
                          </div>
                      </div>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s3" class="select2_single form-control" tabindex="-1"
                           required="required" name="ProjectName">
                          </select>
                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">取消</button>
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
                    <h2>全国公园 <small>公园列表详情示例</small></h2>
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
                    <table id="datatable-buttons_problem" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>设备故障时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>更换数量</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>是否疏散</th>
                          <th>中断时长</th>
                          <th>所属项目</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
						  <th>问题ID</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>设备故障时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>更换数量</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>是否疏散</th>
                          <th>中断时长</th>
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
        </div>
      </div>
    </div>

        <!-- footer content -->
        <?php include "footor.php";?>         <!-------------------------左标签  头标签  尾标签------------------------->
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
        format: 'YYYY-MM-DD HH:mm'
/*      format: 'YYYY.MM.DD',
        language:  'zh-CN',  //日期
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0*/
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
		useCurrent: false
/*      format: 'YYYY.MM.DD',
        language:  'zh-CN',  //日期
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0*/
    });
	$("#myDatepicker").on("dp.change", function(e) {
        $('#myDatepicker2').data("DateTimePicker").minDate(e.date);
    });
    $("#myDatepicker2").on("dp.change", function(e) {
        $('#myDatepicker').data("DateTimePicker").maxDate(e.date);
    });
    $('#myDatepicker3').datetimepicker({
        format: 'YYYY-MM-DD HH:mm'
/*      format: 'YYYY.MM.DD',
        language:  'zh-CN',  //日期
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0*/
    });
    </script>  
  </body>
</html>
