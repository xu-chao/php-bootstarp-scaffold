<?php
  include "db_config.php";
  include "warning.php";
  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>数据图表--柱状图</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/base.css">
    <script src="js/echarts.common.min.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/sanji.js"></script>
    <script language="javascript">
    $(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    $(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
    </script>
</head>
<body style="background-color:#657180;">
    <div class="logintop">    
    <span>欢迎进入数据柱状图</span>    
    <ul>
    <li><a href="index.php">返回首页</a></li>
    <li><a href="help.html">帮助</a></li>
    <li><a href="about.html">关于</a></li>
    </ul>    
    </div>

    <div style="margin-top:2cm;">
    <form id="form1" onsubmit="return true" action="##" method="post">
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
                    title:{
                        text: '公园数据',
                        //subtext: '数据参考',
                        left: '10%'
                    },
                    grid: {
                        left: '10%',
                        bottom:'35%'
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
                        saveAsImage: {icon:'image://images/download.png'}
                        },
                        right:'10%'
                    },
                    tooltip: {
                        type: 'line',
                        show: true
                    },
                    legend: {
                       data:['故障数-柱状图','故障数-折线图']
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
                        },
                {
                       name: "故障数-折线图",
                       data: (function(){
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
            var C=document.getElementById('s1').value;
            var P=document.getElementById('s2').value;
            if(C&&P){
            //window.open('https://www.baidu.com/s?wd=' + encodeURIComponent(params.name));
            //alert("单击了"+C+P+"x轴标签");
                 window.open('mrms_table_detail.php?project='+params.name+'&park='+P+'&city='+C);
            }else if(C){
                window.open('mrms_table_detail.php?project='+params.name+'&city='+C);
            }else{
                window.open('mrms_table_detail.php?city='+params.name);
            }
        }
    }); 
             }
    </script>
</body>
</html>