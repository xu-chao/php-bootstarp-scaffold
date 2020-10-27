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
        <?php
		include "header.php";
		include "icon.php";	
        ?>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
              <div class="title_left">
                <h3>添加城市</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入城市名...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          <!-- /top tiles -->
          
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                    <h2>故障代码录入 <small>切记不要胡乱添加故障代码</small></h2>
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
                  <br />
                    <form  class="form-horizontal form-label-left"
                     action="../insert_city.php" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_group form-control">
                            <optgroup label="投影">
                              <option value="AK">TY-KS-DP-01</option>
                              <option value="HI">TY-SN-DP-01</option>
                              <option value="HI">TY-SX-DP-01</option>
                              <option value="HI">TY-APS-DP-01</option>
                            </optgroup>
                            <optgroup label="音响">
                              <option value="CA">YX-JBL-LB-01</option>
                              <option value="NV">YX-JBL-LB-01</option>
                              <option value="OR">YX-JBL-LB-01</option>
                              <option value="WA">YX-JBL-LB-01</option>
                            </optgroup>
                            <optgroup label="灯光">
                              <option value="AZ">DG-PD-DP-01</option>
                              <option value="CO">DG-PD-DP-01</option>
                              <option value="ID">DG-PD-DP-01</option>
                              <option value="MT">DG-PD-DP-01</option>
                              <option value="NE">DG-PD-DP-01</option>
                              <option value="NM">DG-PD-DP-01</option>
                              <option value="ND">DG-PD-DP-01</option>
                              <option value="UT">DG-PD-DP-01</option>
                              <option value="WY">DG-PD-DP-01</option>
                            </optgroup>
                            <optgroup label="特技">
                              <option value="AL">TJ-PLC-DX-01</option>
                              <option value="AR">TJ-PLC-DX-01</option>
                              <option value="IL">TJ-PLC-DX-01</option>
                              <option value="IA">TJ-PLC-DX-01</option>
                              <option value="KS">TJ-PLC-DX-01</option>
                              <option value="KY">TJ-PLC-DX-01</option>
                              <option value="LA">TJ-PLC-DX-01</option>
                              <option value="MN">TJ-PLC-DX-01</option>
                              <option value="MS">TJ-PLC-DX-01</option>
                              <option value="MO">TJ-PLC-DX-01</option>
                              <option value="OK">TJ-PLC-DX-01</option>
                              <option value="SD">TJ-PLC-DX-01</option>
                              <option value="TX">TJ-PLC-DX-01</option>
                              <option value="TN">TJ-PLC-DX-01</option>
                              <option value="WI">TJ-PLC-DX-01</option>
                            </optgroup>
                            <optgroup label="室外">
                              <option value="CT">SW-DG-DP-01</option>
                              <option value="DE">SW-DG-DP-01</option>
                              <option value="FL">SW-DG-DP-01</option>
                              <option value="GA">SW-DG-DP-01</option>
                              <option value="IN">SW-DG-DP-01</option>
                              <option value="ME">SW-DG-DP-01</option>
                              <option value="MD">SW-DG-DP-01</option>
                              <option value="MA">SW-DG-DP-01</option>
                              <option value="MI">SW-DG-DP-01</option>
                              <option value="NH">SW-DG-DP-01</option>
                              <option value="NJ">SW-DG-DP-01</option>
                              <option value="NY">SW-DG-DP-01</option>
                              <option value="NC">SW-DG-DP-01</option>
                              <option value="OH">SW-DG-DP-01</option>
                              <option value="PA">SW-DG-DP-01</option>
                              <option value="RI">SW-DG-DP-01</option>
                              <option value="SC">SW-DG-DP-01</option>
                              <option value="VT">SW-DG-DP-01</option>
                              <option value="VA">SW-DG-DP-01</option>
                              <option value="WV">SW-DG-DP-01</option>
                            </optgroup>
                            <optgroup label="其他">
                              <option value="AK">QT-ZM-DP-01</option>
                              <option value="HI">QT-ZM-DP-01</option>
                              <option value="HI">QT-ZM-DP-01</option>
                              <option value="HI">QT-ZM-DP-01</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">输入标签
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="text" class="tags form-control" value="小车, PLC, JBL" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
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
              

          <!-- <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                    <h2>全国城市 <small>城市列表详情示例</small></h2>
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
                    <table id="datatable-buttons_city" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>城市名</th>
                          <th>地理位置</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>城市名</th>
                          <th>地理位置</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- footer content -->
		<?php	
		include "footor.php";
        ?>         <!-------------------------左标签  头标签  尾标签------------------------->
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
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
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
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
  
  </body>
    <script src="js/datepicker/date.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
</html>
