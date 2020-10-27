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

    <title><?php echo $_SESSION['cityname']; ?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
	<?php
		include "gonggao.php";				
        ?>
      <div class="main_container">
        <?php include "header.php";include "icon.php";?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-institution"></i> 本地公园</span>
              <div id="park_index" class="count"></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-tree"></i> 本地项目</span>
              <a href="../all_citypark.php">
              <div id="project_index" class="count"></div></a>
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
              <span class="count_top"><i class="fa fa-times-circle"></i> 机械问题</span>
              <a href="all_jixie.php">
              <div id="jixie_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_jixie" class="green"><i class="fa fa-sort-asc">
              <a href="../near_jixie.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 电气问题</span>
              <a href="all_dianqi.php">
              <div id="dianqi_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_dianqi" class="green"><i class="fa fa-sort-asc">
              <a href="../near_dianqi.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 软件问题</span>
              <a href="all_ruanjian.php">
              <div id="ruanjian_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_ruanjian" class="green"><i class="fa fa-sort-asc">
              <a href="../near_ruanjian.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 液压问题</span>
              <a href="all_yeya.php">
              <div id="yeya_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_yeya" class="green"><i class="fa fa-sort-asc">
              <a href="../near_yeya.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 效果问题</span>
              <a href="all_xiaoguo.php">
              <div id="xiaoguo_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_xiaoguo" class="green"><i class="fa fa-sort-asc">
              <a href="../near_xiaoguo.php"></i> </i> 个新问题出现</span></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-times-circle"></i> 电脑问题</span>
              <a href="all_diannao.php">
              <div id="diannao_index" class="count red"></div></a>
              <span class="count_bottom">
              <i id="near_diannao" class="green"><i class="fa fa-sort-asc">
              <a href="../near_diannao.php"></i> </i> 个新问题出现</span></a>
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
            <div class="col-md-6 col-sm-4 col-xs-12">
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
                            <a id="Title_index_A1"></a>
                            </h2>
                            <div class="byline">
                            <span id="WTime_index_A1"></span> by <a id="UserName_index_A1"></a>
                            </div>
                            <span class="excerpt" id="SmallTitle_index_A1">
                            </span>...
                            <a href="artical_detail_a1.php" style="color:red">阅读&nbsp;More</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                            <a id="Title_index_A2"></a>
                            </h2>
                            <div class="byline">
                            <span id="WTime_index_A2"></span> by <a id="UserName_index_A2"></a>
                            </div>
                            <span class="excerpt" id="SmallTitle_index_A2">
                            </span>...
                            <a href="artical_detail_a2.php" style="color:red">阅读&nbsp;More</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <a id="Title_index_A3"></a>
                            </h2>
                            <div class="byline">
                            <span id="WTime_index_A3"></span> by <a id="UserName_index_A3"></a>
                            </div>
                            <span class="excerpt" id="SmallTitle_index_A3">
                            </span>...
                            <a href="artical_detail_a3.php" style="color:red">阅读&nbsp;More</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>



          <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
			<div style=" width:100%;height:340px; overflow:scroll;">
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
                  <?php include '../query_index_city.php' ?>
                </div>
				</div>
              </div>
            </div>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="../js/echarts.common.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
	<!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <!-- <script src="../build/js/echart_wuhu.js"></script> -->
    <script type="text/javascript">
              //cityname = <?php echo $_SESSION['cityname']; ?>; 
              var myChart = echarts.init(document.getElementById('chart'));
              var option = {
                    textStyle:{
                        color: '#A23400'
                    },
                    title:{
                        text: '公园数据',
                        //subtext: '数据参考',
                        left: '10%'
                    },
                    grid: {
                        left: '10%',
                        bottom:'12%'
                    },
                    color: ['#3bcec6'],
                    toolbox: {
                        show: true,
                        itemSize: 32,
                        feature: {
                        //dataZoom: {
                        //yAxisIndex: 'none'
                        //},
                        //dataView: {readOnly: false},
                        //magicType: {type: ['line', 'bar', 'stack', 'tiled']},
                        //restore: {},
                        saveAsImage: {icon:'image://../images/download.png'}
                        },
                        right:'10%'
                    },
                    tooltip: {
                        type: 'line',
                        show: true
                    },
                    legend: {
                       data:['故障数-柱状图','故障数-折线图'],
					   selected: {
                           '故障数-折线图' : false
                       }
                    },
                    xAxis : [
                        {
                            triggerEvent : true,
                            type : 'category',
                            data : (function(){
                                    var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "../json.php",
                                        data :{city:'<?php echo $_SESSION['cityname']; ?>'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                              console.log(result);
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].city);
                                                  arr.push(result[i].city);
                                                }
                                        }

                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   });
                                   return arr;
                                })(),
                                axisLabel: {  
                                      interval:0,  
                                      rotate:30,
                                      fontSize:15 
                                },
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            name : '故障数'
                        }
                    ],
                    series : [
                        {
                            "name":"故障数-柱状图",
                            "U_ID":"city",
                            "type":"bar",
                            "data":(function(){
                                        var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "../json.php",
                                        data :{city:'<?php echo $_SESSION['cityname']; ?>'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].U_ID);
                                                  arr.push(result[i].U_ID);
                                                }
                                        }
                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   });
                                  return arr;
                            })(),
                    itemStyle: {
                    normal: {
                        color: function(params) {
                            var colorList = [
                               '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                               '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                               '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0',
                               '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                               '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                               '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0',
                               '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                               '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD'
                            ];
                            return colorList[params.dataIndex]
                        },
                        label: {
                            show: true,
                            position: 'top',
                            formatter: '{c}'
                        }
                    }
                },
                                      barWidth:40
                        },
                {
                       name: "故障数-折线图",
                       data: (function(){
                                        var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "../json.php",
                                        data :{city:'<?php echo $_SESSION['cityname']; ?>'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].U_ID);
                                                  arr.push(result[i].U_ID);
                                                }
                                        }
                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   });
                                  return arr;
                            })(),
                            itemStyle : {  /*设置折线颜色*/
                                normal : {
                                    color:'#A23400'
                                }
                            },
                            type: 'line',
                            smooth: true,
                            barWidth:40
                }
                    ]
                };
        myChart.setOption(option,true);
        myChart.off();
        myChart.on('click', function (params) {
        if(params.componentType == "xAxis"){
            alert("单击了"+params.value+"x轴标签");
        }else{
            alert("单击了"+params.value+"y轴标签");
        }
    }); 
    </script>
    <script src="../build/js/near_all_index_problem_touyin.js"></script>
    <script src="../build/js/near_all_index_problem_yinxiang.js"></script>
    <script src="../build/js/near_all_index_problem_dengguang.js"></script>
    <script src="../build/js/near_all_index_problem_jixie.js"></script>
	<script src="../build/js/near_all_index_problem_dianqi.js"></script>
    <script src="../build/js/near_all_index_problem_ruanjian.js"></script>
    <script src="../build/js/near_all_index_problem_yeya.js"></script>
    <script src="../build/js/near_all_index_problem_xiaoguo.js"></script>
    <script src="../build/js/near_all_index_problem_diannao.js"></script>
    <script src="../build/js/near_all_index_problem_qita.js"></script>
    <script src="../build/js/query_index_park.js"></script>
    <script src="../build/js/query_index_project.js"></script>
    <script src="../build/js/query_index_all_problem_touyin.js"></script>
    <script src="../build/js/query_index_all_problem_yinxiang.js"></script>
    <script src="../build/js/query_index_all_problem_dengguang.js"></script>
    <script src="../build/js/query_index_all_problem_jixie.js"></script>
	<script src="../build/js/query_index_all_problem_dianqi.js"></script>
    <script src="../build/js/query_index_all_problem_ruanjian.js"></script>
    <script src="../build/js/query_index_all_problem_yeya.js"></script>
    <script src="../build/js/query_index_all_problem_xiaoguo.js"></script>
    <script src="../build/js/query_index_all_problem_diannao.js"></script>
    <script src="../build/js/query_index_all_problem_qita.js"></script>
	<script src="../build/js/query_index_artical.js"></script>
	
  </body>
</html>
