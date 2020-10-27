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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="images/logo2.png"
               style="margin-left:12%">
              <span style="margin-left:10%">全国公园</span></a>
            </div>

          <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>你好,</span>
                <h2><?php include 'auth.php' ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>维修记录管理系统</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> 全国公园-芜湖 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="index.php">返回首页</a></li>
                      <li><a><i class="fa fa-list-ul"></i>东方神画</a>
                        <ul class="nav child_menu">
                          <li><a><i class="fa fa-folder-open-o"></i>01.牛郎织女</a>
                            <ul class="nav child_menu">
                              <!-- <li><a href="#">1.投影灯光系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <!-- <li><a href="#">牛郎织女</a></li> -->
        <p><a href="">1.投影灯光系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">01.投影系统</a></dt>
              <dd>
              <em><a href="#">001.投影机</a></em>
              <em><a href="#">002.投影机镜头</a></em>
              <em><a href="#">003.投影机灯泡</a></em>
              <em><a href="#">004.偏振镜</a></em>
              <em><a href="#">005.滤网</a></em>
              <em><a href="#">006.银幕</a></em>
              <em><a href="#">007.影片</a></em>
              </dd>
              <dt><a href="#">02.音响系统</a></dt>
              <dd>
              <em><a href="#">031.音箱</a></em>
              <em><a href="#">032.声卡</a></em>
              <em><a href="#">033.数字音频处理器</a></em>
              <em><a href="#">034.音箱管理器</a></em>
              <em><a href="#">035.电源时序器</a></em>
              <em><a href="#">036.话筒</a></em>
              </dd>
              <dt><a href="#">03.灯光系统</a></dt>
              <dd>
              <em><a href="#">061.成像灯</a></em>
              <em><a href="#">062.PAR灯</a></em>
              <em><a href="#">063.筒灯</a></em>
              <em><a href="#">064.聚光灯</a></em>
              <em><a href="#">065.水纹灯</a></em>
              <em><a href="#">066.火纹灯</a></em>
              <em><a href="#">067.螺纹灯</a></em>
              <em><a href="#">068.频闪灯</a></em>
              <em><a href="#">069.摇头灯</a></em>
              <em><a href="#">070.地脚壁灯/射灯</a></em>
              <em><a href="#">071.色纸</a></em>
              <em><a href="#">072.图案片</a></em>
              <em><a href="#">073.灯光控制台</a></em>
              <em><a href="#">074.灯控卡</a></em>
              <em><a href="#">075.信号分配器</a></em>
              <em><a href="#">076.信号放大器</a></em>
              <em><a href="#">077.无线信号收发器</a></em>
              </dd>
              <dt><a href="#">04.电视/LED屏</a></dt>
              <dd>
              <em><a href="#">091.电视机</a></em>
              <em><a href="#">092.安卓/小米盒子</a></em>
              <em><a href="#">093.LED显示屏</a></em>
              </dd>              
            </dl>           
          </div>
          <div class="cat-right">
          <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·以播放机IP定位</a></span>
                <br />
                <br />
                <span><a href="#">·以音源IP定位</a></span>
                <br />
                <span><a href="#">·以机柜编号定位</a></span>
                <br />
                <span><a href="#">·总控室</a></span>
                <br />
                <br />
                <span><a href="#">·预演厅、主演厅</a></span>
                <br />
                <br />
                <span><a href="#">·预演厅</a></span>
             </dd>
            </dl> 
          </div>
        </div>
      </div>
    </div>
                              <!-- <li><a href="#">2.计算机软件网络通讯系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <p><a href="">2.计软网络通讯系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">05.计算机/软件系统</a></dt>
              <dd>
              <em><a href="#">101.显示器</a></em>
              <em><a href="#">102.显卡</a></em>
              <em><a href="#">103.内存条</a></em>
              <em><a href="#">104.硬盘</a></em>
              <em><a href="#">105.处理器</a></em>
              <em><a href="#">106.计算机整机</a></em>
              <em><a href="#">107.CIG软件</a></em>
              <em><a href="#">108.投影控制软件</a></em>
              <em><a href="#">109.总控软件</a></em>
              <em><a href="#">110.远程软件</a></em>
              <em><a href="#">111.网格软件</a></em>
              <em><a href="#">112.轨道上电软件</a></em>
              <em><a href="#">113.室内外灯光上电软件</a></em>
              <em><a href="#">114.遥控点播软件</a></em>
              <em><a href="#">115.二维码支付软件</a></em>
              </dd>
              <dt><a href="#">06.网络通讯系统</a></dt>
              <dd>
              <em><a href="#">151.交换机</a></em>
              <em><a href="#">152.网络模块</a></em>
              <em><a href="#">153.路由器</a></em>
              <em><a href="#">154.西门子客户端788</a></em>
              <em><a href="#">155.西门子客户端748</a></em>
              <em><a href="#">156.串口模块</a></em>
              <em><a href="#">157.串口卡</a></em>
              </dd>             
            </dl>           
          </div>
          <div class="cat-right">
            <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·操作台、机柜</a></span>
                <br />
                <br />
                <span><a href="#">·机柜</a></span>
                <br />
                <span><a href="#">·CJ01---CJ10(场景顺序)</a></span>
                <br />
                <span><a href="#">·XC01---XC20(小车编号顺序)</a></span>
                <br />
                <span><a href="#">·TJ01---TJ40（上站台到下站台特技顺序）</a></span>
             </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
                              <!-- <li><a href="#">3.车船系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <p><a href="">3.车船系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">07.行走系统</a></dt>
              <dd>
              <em><a href="#">201.行走电机</a></em>
              <em><a href="#">202.行走变频器</a></em>
              <em><a href="#">203.条码阅读器</a></em>
              <em><a href="#">204.激光扫描仪</a></em>
              <em><a href="#">205.防撞条</a></em>
              <em><a href="#">206.防撞检测开关</a></em>
              <em><a href="#">207.RFID读卡器</a></em>
              <em><a href="#">208.磁导航</a></em>
              <em><a href="#">209.导向/驱动轮</a></em>
              <em><a href="#">210.螺旋桨</a></em>
              </dd>
              <dt><a href="#">08.车体结构/灯光音响系统</a></dt>
              <dd>
              <em><a href="#">251.功放</a></em>
              <em><a href="#">252.MP3</a></em>
              <em><a href="#">253.喇叭</a></em>
              <em><a href="#">254.震动喇叭</a></em>
              <em><a href="#">255.车载灯具</a></em>
              <em><a href="#">256.安全指示灯</a></em>
              <em><a href="#">257.轴承/十字节</a></em>
              <em><a href="#">258.安全带</a></em>
              <em><a href="#">259.安全压杆</a></em>
              <em><a href="#">260.车门</a></em>
              <em><a href="#">261.玻璃钢</a></em>
              </dd>  
              <dt><a href="#">09.旋转摇摆/液压系统</a></dt>
              <dd>
              <em><a href="#">351.车体旋转电机</a></em>
              <em><a href="#">352.旋转变频器</a></em>
              <em><a href="#">353.液压站电机</a></em>
              <em><a href="#">354.液压泵</a></em>
              <em><a href="#">355.液压缸</a></em>
              <em><a href="#">356.总逻辑阀</a></em>
              <em><a href="#">357.液压锁</a></em>
              <em><a href="#">358.比例阀</a></em>
              <em><a href="#">359.压力/温度传感器</a></em>
              <em><a href="#">360.编码器</a></em>
              <em><a href="#">361.蓄能器</a></em>
              <em><a href="#">362.液压油路</a></em>
              </dd> 
              <dt><a href="#">10.控制系统</a></dt>
              <dd>
              <em><a href="#">411.PLC/程序</a></em>
              <em><a href="#">412.开关电源</a></em>
              <em><a href="#">413.CAN转232通讯模块</a></em>
              <em><a href="#">414.继电器</a></em>
              <em><a href="#">415.接触器</a></em>
              <em><a href="#">416.断路器</a></em>
              <em><a href="#">417.安全继电器</a></em>
              <em><a href="#">418.大功率继电器</a></em>
              <em><a href="#">419.数码显示器</a></em>
              <em><a href="#">420.编码器</a></em>
              <em><a href="#">421.按钮/开关</a></em>
              <em><a href="#">422.车载电脑</a></em>
              </dd>
              <dt><a href="#">11.动力系统</a></dt>
              <dd>
              <em><a href="#">511.电流传感器</a></em>
              <em><a href="#">512.电压传感器</a></em>
              <em><a href="#">513.滑触线</a></em>
              <em><a href="#">514.集电器</a></em>
              <em><a href="#">515.铅蓄电池</a></em>
              <em><a href="#">516.锂电池</a></em>
              <em><a href="#">517.电池巡检仪</a></em>
              <em><a href="#">518.绝缘检测仪</a></em>
              <em><a href="#">519.充电桩</a></em>
              <em><a href="#">520.触摸屏</a></em>
              <em><a href="#">521.电位器</a></em>
              <em><a href="#">522.UPS电源</a></em>
              <em><a href="#">523.取电小车</a></em>
              </dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·XC01---XC20(小车编号顺序)</a></span>
                <br />
                <br />
                <span><a href="#">·XC01---XC20(小车编号顺序)</a></span>
                <br />
                <br />
                <span><a href="#">·XC01---XC20(小车编号顺序) /液压机房</a></span>
                <br />
                <br />
                <span><a href="#">·XC01---XC20(小车编号顺序)</a></span>
                <br />
                <br />
                <span><a href="#">·XC01---XC20(小车编号顺序)</a></span>
             </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
                              <!-- <li><a href="#">4.平台系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <p><a href="">4.平台系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">12.升降系统</a></dt>
              <dd>
              <em><a href="#">561.液压锁</a></em>
              <em><a href="#">562.比例阀</a></em>
              <em><a href="#">563.压力传感器</a></em>
              <em><a href="#">564.温度传感器</a></em>
              <em><a href="#">565.蓄能器</a></em>
              <em><a href="#">566.液压站</a></em>
              <em><a href="#">567.平台升降电机</a></em>
              <em><a href="#">568.卷扬机</a></em>
              <em><a href="#">569.钢缆</a></em>
              </dd>
              <dt><a href="#">13.旋转/控制系统</a></dt>
              <dd>
              <em><a href="#">611.PLC/程序</a></em>
              <em><a href="#">612.安全确认操作盒</a></em>
              <em><a href="#">613.急停按钮</a></em>
              <em><a href="#">614.继电器</a></em>
              <em><a href="#">615.接触器</a></em>
              <em><a href="#">616.变频器</a></em>
              <em><a href="#">617.伺服驱动器</a></em>
              <em><a href="#">618.平台旋转电机</a></em>
              <em><a href="#">619.二维码读码器</a></em>
              <em><a href="#">620.原点检测/U型开关</a></em>
              <em><a href="#">621.单相电源模块</a></em>
              <em><a href="#">622.散热风扇</a></em>
              <em><a href="#">623.安全制动适配器</a></em>
              <em><a href="#">624.制动电阻</a></em>
              <em><a href="#">625.座椅俯仰电机</a></em>
              <em><a href="#">626.座椅位置检测开关</a></em>
              <em><a href="#">627.编码器</a></em>
              <em><a href="#">628.按钮/开关</a></em>
              </dd>             
            </dl>           
          </div>
          <div class="cat-right">
            <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·平台</a></span>
                <br />
                <br />
                <span><a href="#">·平台</a></span>
             </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
                              <!-- <li><a href="#">5.特技系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <p><a href="">5.特技系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">14.控制系统</a></dt>
              <dd>
              <em><a href="#">711.PLC/程序</a></em>
              <em><a href="#">712.变频器</a></em>
              <em><a href="#">713.调速器</a></em>
              <em><a href="#">714.编码器</a></em>
              <em><a href="#">715.伺服驱动器</a></em>
              <em><a href="#">716.软启动器</a></em>
              <em><a href="#">717.限位行程开关</a></em>
              <em><a href="#">718.接近开关</a></em>
              <em><a href="#">719.原点检测开关</a></em>
              <em><a href="#">712.对射开关</a></em>
              <em><a href="#">721.按钮/开关</a></em>
              </dd>
              <dt><a href="#">15.传动系统</a></dt>
              <dd>
              <em><a href="#">811.链条/链轮</a></em>
              <em><a href="#">812.曲柄/摇杆</a></em>
              <em><a href="#">813.齿轮箱</a></em>
              <em><a href="#">814.离合器</a></em>
              <em><a href="#">815.卷扬机</a></em>
              <em><a href="#">816.联轴器</a></em>
              <em><a href="#">817.传送带</a></em>
              <em><a href="#">818.齿条</a></em>
              </dd>
              <dt><a href="#">16.成品设备</a></dt>
              <dd>
              <em><a href="#">851.水雾机</a></em>
              <em><a href="#">852.烟雾机</a></em>
              <em><a href="#">853.烘干机</a></em>
              <em><a href="#">854.泡泡机</a></em>
              <em><a href="#">855.雪花机</a></em>
              <em><a href="#">856.水枪水炮</a></em>
              <em><a href="#">857.开门机</a></em>
              <em><a href="#">858.热风机</a></em>
              <em><a href="#">859.电动幕帘</a></em>
              <em><a href="#">860.小机器人</a></em>
              <em><a href="#">861.站台气动门</a></em>
              <em><a href="#">862.火盆灯</a></em>
              <em><a href="#">863.潜水泵</a></em>
              <em><a href="#">864.火炮</a></em>
              </dd>
              <dt><a href="#">17.气压系统</a></dt>
              <dd>
              <em><a href="#">851.空压机</a></em>
              <em><a href="#">852.储气罐</a></em>
              <em><a href="#">853.安全阀</a></em>
              <em><a href="#">854.干燥器</a></em>
              <em><a href="#">855.气动三联件</a></em>
              <em><a href="#">856.气缸</a></em>
              <em><a href="#">857.节流阀</a></em>
              </dd>             
            </dl>           
          </div>
          <div class="cat-right">
            <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·TJ001---TJ040（上站台到下站台特技顺序）</a></span>
                <br />
                <br />
                <span><a href="#">·TJ001---TJ040（上站台到下站台特技顺序）</a></span>
                <br />
                <br />
                <span><a href="#">·TJ001---TJ040（上站台到下站台特技顺序）</a></span>
                <br />
                <span><a href="#">·QDM01---QDM10(站台左到右顺序)</a></span>
                <br />
                <br />
                <span><a href="#">·TJ001---TJ040（上站台到下站台特技顺序）</a></span>
             </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
                              <!-- <li><a href="#">6.停车场系统</a></li> -->
    <div class="all-sort-list">
      <div class="item bo">
        <p><a href="">6.停车场系统</a></p>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">18.停车场系统</a></dt>
              <dd>
              <em><a href="#">901.车辆号牌识别一体机</a></em>
              <em><a href="#">902.地感线圈</a></em>
              <em><a href="#">903.显示屏(含万能语音卡)</a></em>
              <em><a href="#">904.道闸</a></em>
              <em><a href="#">905.千兆交换机</a></em>
              <em><a href="#">906.车辆检测器</a></em>
              <em><a href="#">907.补光灯</a></em>
              <em><a href="#">908.继电器</a></em>
              <em><a href="#">909.时间继电器</a></em>
              <em><a href="#">910.收费电脑</a></em>
              </dd>             
            </dl>           
          </div>
          <div class="cat-right">
            <dl>
            <dt>位置信息</dt>
              <dd>
                <span><a href="#">·停车场闸口01-10</a></span>
             </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
                            </ul>
                          </li>
                          <li><a href="#">大闹水晶宫</a></li>
                          <li><a href="#">缤纷华夏</a></li>
                          <li><a href="#">魅力戏曲</a></li>
                          <li><a href="#">灵魂之旅</a></li>
                          <li><a href="#">女娲补天</a></li>
                          <li><a href="#">雷峰塔</a></li>
                          <li><a href="#">烈焰风云</a></li>
                          <li><a href="#">九州神韵</a></li>
                          <li><a href="#">熊出没剧场</a></li>
                          <li><a href="#">千古蝶恋</a></li>
                        </ul>
                      </li>
                      <li><a><i class="fa fa-list-ul"></i> 梦幻王国</a>
                        <ul class="nav child_menu">
                          <li><a href="#">水漫金山</a></li>
                          <li><a href="#">盘丝洞</a></li>
                          <li><a href="#">未来警察</a></li>
                          <li><a href="#">生命之光</a></li>
                          <li><a href="#">秦陵历险</a></li>
                          <li><a href="#">宇宙小勇士</a></li>
                          <li><a href="#">魔法城堡</a></li>
                          <li><a href="#">探空飞梭</a></li>
                          <li><a href="#">极速飞车</a></li>
                          <li><a href="#">大摆锤</a></li>
                          <li><a href="#">豪华转马</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  

                  <li><a><i class="fa fa-edit"></i> 数据添加 
                  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="user.php">用户录入</a></li>
                      <li><a href="city.php">城市录入</a></li>
                      <li><a href="park.php">公园录入</a></li>
                      <li><a href="project.php">项目录入</a></li>
                      <li><a href="code.php">故障代码录入</a></li>
                      <li><a href="detail.html">设备清单录入</a></li>
                      <li><a href="problem.php">详细问题录入</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> 数据查询 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="query.php">详细查询</a></li>
                      <li><a href="all.php">总体查询</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> 数据分析 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inquery.php">图样展示</a></li>
                      <li><a href="zzt.php">图样分析</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt=""><?php include 'auth.php' ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> 个人信息</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>设置</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">帮助</a></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                  </ul>
                </li>
            </nav>
          </div>
        </div>
    </div>

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
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-star"></i> 故障编码 <small>编码意义</small></h2>
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
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">故障编码</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">原则</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">意义</a>
                        </li>
                      </ul>
                      <div id="myTabContent2" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                          <img src="images/code.png">
                          <p>其中位置编码较为复杂，详情<a href="../src/故障编码细则.xlsx"><b style="color:red">DownLoad...</b></a></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
						  <p>1、通用性，适用于各地公园；</p>
                          <p>2、唯一性，能够体现出具体的目标；</p>
                          <p>3、客观性，反应客观现实情况；</p>
                          <p>4、等...</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">
                          <p>1、故障编码是最基本的 </p>
                          <p>2、数据化，标准化，明确化； </p>
                          <p>3、故障记录高效准确； </p>
                          <p>4、故障记录定位准确； </p>
                          <p>4、为解决故障流程信息化； </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="row">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">维修开始时间
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="ProblemType">
                            <option value="投影">投影</option>
                            <option value="音响">音响</option>
                            <option value="灯光">灯光</option>
                            <option value="特技">特技</option>
                            <option value="室外">室外</option>
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
                       <input type="number" class="form-control" placeholder="例如：2"
                       required="required" data-validate-minmax="1,999999" name="Mount">
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">维修结束时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker2">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="EndTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">备注
                      <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Note" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12">疏散次数
                       <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" placeholder="例如：8次(按月计)(无填0)"
                             required="required" name="Evacuate">
                         </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">是否解决
                          <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                             <select class="select2_single form-control" tabindex="-1"
                              required="required" name="DoSolve">
                              <option value="1">是</option>
                              <option value="2">否</option>
                             </select>
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
            </div>   
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            http://10.98.98.80/fangte <a href="http://10.98.98.80/fangte">华强方特</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date-zh-CN.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../js/option1.js"></script>
    <script src="js/custom/jquery.dataTables.js"></script>
    <!-- <script src="js/custom/jquery.min.js"></script> -->
    <script type="text/javascript">
    $('.all-sort-list > .item').hover(function(){
      var eq = $('.all-sort-list > .item').index(this),       //获取当前滑过是第几个元素
        h = $('.all-sort-list').offset().top,           //获取当前下拉菜单距离窗口多少像素
        s = $(window).scrollTop(),                  //获取游览器滚动了多少高度
        i = $(this).offset().top,                 //当前元素滑过距离窗口多少像素
        item = $(this).children('.item-list').height(),       //下拉菜单子类内容容器的高度
        sort = $('.all-sort-list').height();            //父类分类列表容器的高度
      
      if ( item < sort ){                       //如果子类的高度小于父类的高度
        if ( eq == 0 ){
          $(this).children('.item-list').css('top', (i-h));
        } else {
          $(this).children('.item-list').css('top', (i-h));
        }
      } else {
        if ( s > h ) {                        //判断子类的显示位置，如果滚动的高度大于所有分类列表容器的高度
          if ( i-s > 0 ){                     //则 继续判断当前滑过容器的位置 是否有一半超出窗口一半在窗口内显示的Bug,
            $(this).children('.item-list').css('top', (s-h) );
          } else {
            $(this).children('.item-list').css('top', (s-h)-(-(i-s)) );
          }
        } else {
          $(this).children('.item-list').css('top', 0 );
        }
      } 

      $(this).addClass('hover');
      $(this).children('.item-list').css('display','block');
    },function(){
      $(this).removeClass('hover');
      $(this).children('.item-list').css('display','none');
    });

    $('.item > .item-list > .close').click(function(){
      $(this).parent().parent().removeClass('hover');
      $(this).parent().hide();
    });
  </script>

    <!-- 自定义mydatepicker -->
    <script>
    $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    $('#myDatepicker3').datetimepicker({
        format: 'YYYY-MM-DD HH:MM'
    });
    </script>  
  </body>
</html>
