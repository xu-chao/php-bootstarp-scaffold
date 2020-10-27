<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
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

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-institution"></i> 全国城市</span>
              <div id="city_index" class="count"></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-tree"></i> 全国公园</span>
              <a href="../all_citypark.php">
              <div id="park_index" class="count"></div></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 投影问题</span>
              <a href="all_touyin.php">
              <div id="touyin_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_touyin" class="green"><i class="fa fa-sort-asc">
              <a href="../near_touyin.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 音响问题</span>
              <a href="all_yinxiang.php">
              <div id="yinxiang_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_yinxiang" class="green"><i class="fa fa-sort-asc">
              <a href="../near_yinxiang.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 灯光问题</span>
              <a href="all_dengguang.php">
              <div id="dengguang_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_dengguang" class="green"><i class="fa fa-sort-asc">
              <a href="../near_dengguang.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 其他问题</span>
              <a href="all_qita.php">
              <div id="qita_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_qita" class="green"><i class="fa fa-sort-asc">
              <a href="../near_qita.php"></i> </i> 个新问题出现</span></a>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>公园一年情况分析 <small>数据仅供参考</small></h3>
                  </div>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                  <!-- <canvas id="lineChart"></canvas> -->
                  <!-- <div id="chart_plot_01" class="demo-placeholder"></div> -->
                   <div id="chart" class="demo-placeholder"></div>
                </div>                
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>最近新文章 <small>New Artical</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">撰写新文章</a>
                        </li>
                        <li><a href="#">More</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                            <a>您真的了解投影机吗？</a>
                            </h2>
                            <div class="byline">
                              <span>1 小时前 </span> by <a>admin</a>
                            </div>
                            <p class="excerpt">说到投影机，很多朋友对它的印象就是“不就是一个能成像的机器嘛，有什么好了解的”其实不然，投影机里面的学问也不少，今天就带领大家了解一下我们最熟悉的“陌生人”——投影机...<a href="#" style="color:red">阅读&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                            <a>音响调音员应具备的基本功？</a>
                            </h2>
                            <div class="byline">
                              <span>5 小时前</span> by <a>许超</a>
                            </div>
                            <p class="excerpt">音响调音是在符合听音标准的声学环境中，根据听音标准要求，运用音响设备和扩声，调音技术，对具有不同特色的声源的音量、音调、音色进行合理的调整，正确连接音响设备并对音响设备进行操作，使听众或观众在一个良好的听音环境中，得到优美声音的享受...<a href="#" style="color:red">阅读&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                            <a>那些你不知道的灯光照明小知识？</a>
                            </h2>
                            <div class="byline">
                              <span>13 小时前</span> by <a>许超</a>
                            </div>
                            <p class="excerpt">在客厅看书、工作的时候，老觉得灯光不够亮。在卫生间梳妆打扮，脸上总是一道暗、一道亮的。料理食材，自己却是挡光的那个。为什么这么惨？因为你只做了基础...<a href="#" style="color:red">阅读&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>



          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                    <h2>故障概要 <small>全国城市故障数量统计</small></h2>
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
                  <?php include '../query_index.php' ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<?php
	
	
		include "footor.php";
?>
      
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="../js/echarts.common.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../build/js/echart.js"></script>
<!--     <script src="../build/js/test.js"></script> -->
    <script src="../build/js/query_all_index.js"></script>
    <script src="../build/js/near_all_index.js"></script>
	
  </body>
</html>
