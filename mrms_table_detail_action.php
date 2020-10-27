<?php
  include "db_config.php";
  include "warning.php";

  $city=$_REQUEST['city'];
  $park=$_REQUEST['park'];

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>数据图表--柱状图</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/base.css">
    <script src="js/echarts.min.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/sanji.js"></script>
    <script src="js/cloud.js" type="text/javascript"></script>
    <script language="javascript">
    $(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    $(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
    </script>
</head>
<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">

    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>

    <div class="logintop">    
    <span>欢迎进入数据柱状图</span>    
    <ul>
    <li><a href="index.php">返回首页</a></li>
    <li><a href="help.html">帮助</a></li>
    <li><a href="about.html">关于</a></li>
    </ul>    
    </div>

    <div style="margin-top:2cm;">
    <form id="form1" onsubmit="return false" action="##" method="post">
    城市：
    <select id='s1' style="width:200" name="city"></select>
    公园：
    <select id='s2' style="width:200" name="park"></select>
    <input type="button" value="确定" onclick="tb()" class="btn">&nbsp;
    <input type="reset" value="重置">
    </form>
    </div>

    <div id="main" style="width:100%;height:100%;overflow-y:auto"></div>
    <script type="text/javascript">
    function tb(){
              var myChart = echarts.init(document.getElementById('main'));
              var option = {
                    textStyle:{
                        color: '#A23400'
                    },
                    grid: {
                                left: '10%',
                                bottom:'35%'
                    },
                    color: ['#3bcec6'],
                    tooltip: {
                        type: 'line',
                        show: true
                    },
                    legend: {
                       data:[0]
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
                                        url : "json.php",
                                        data :$('#form1').serialize(),
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
                            name :'故障数'
                        }
                    ],
                    series : [
                        {
                            "name":"故障数",
                            "U_ID":"city",
                            "type":"bar",
                            "data":(function(){
                                        var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "json.php",
                                        data :$('#form1').serialize(),
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
                        }
                    ]
                };
        myChart.setOption(option,true);
        myChart.off();
        myChart.on('click', function (params) {
        if(params.componentType == "xAxis"){
            alert("单击了"+params.value+"x轴标签");
        }else{
            //window.open('https://www.baidu.com/s?wd=' + encodeURIComponent(params.name));
            window.open('mrms_table_detail.php?name='+ params.name);
            //alert("单击了"+params.seriesIndex+"x轴标签");
        }
    }); 
             }
    </script>
</body>
</html>