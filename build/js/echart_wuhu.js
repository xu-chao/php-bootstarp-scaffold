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
                        bottom:'10%'
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
                                        url : "../json.php",
                                        data :{city:'芜湖'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                              console.log(result);
                                               for(var i=0;i<result.length;i++){
                                                  //console.log(result[i].city);
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
                                        data :{city:'芜湖'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                               for(var i=0;i<result.length;i++){
                                                  //console.log(result[i].U_ID);
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
                                        data :{city:'芜湖'},
                                        dataType : "json", 
                                        success : function(result) {
                                        if (result) {
                                               for(var i=0;i<result.length;i++){
                                                  //console.log(result[i].U_ID);
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