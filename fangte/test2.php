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
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="top"></div>
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="menu">
              <div class="all-sort"><h2><a href="">全部问题分类</a></h2></div>
			  
            </div>
          </div>

          <!-- /top tiles -->



  <div class="row">
    <div class="wrap">
     <div class="all-sort-list">
      <div class="item bo">
        <h3><span>·</span><a href="">01.飞越极限</a>&nbsp<a href="">02.马尼拉</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.投影机</a></li>
                <li><a href="#" target="_blank">002.投影机镜头</a></li>
                <li><a href="#" target="_blank">003.投影机灯泡</a></li>
                <li><a href="#" target="_blank">004.偏振镜</a></li>
                <li><a href="#" target="_blank">005.滤网</a></li>
                <li><a href="#" target="_blank">006.银幕</a></li>
                <li><a href="#" target="_blank">007.影片</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">03.动感狮城</a>&nbsp<a href="">04.万塔之城</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.显示器</a></li>
                <li><a href="#" target="_blank">002.网络模块</a></li>
                <li><a href="#" target="_blank">003.内存条</a></li>
                <li><a href="#" target="_blank">004.硬盘</a></li>
                <li><a href="#" target="_blank">005.处理器</a></li>
                <li><a href="#" target="_blank">006.计算机整机</a></li>
                <li><a href="#" target="_blank">007.CIG软件</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">05.走进吴哥</a>&nbsp<a href="">06.千岛之歌</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.行走电机</a></li>
                <li><a href="#" target="_blank">002.行走变频器</a></li>
                <li><a href="#" target="_blank">003.条码阅读器</a></li>
                <li><a href="#" target="_blank">004.激光扫描仪</a></li>
                <li><a href="#" target="_blank">005.防撞条</a></li>
                <li><a href="#" target="_blank">006.防撞检测开关</a></li>
                <li><a href="#" target="_blank">007.RFID读卡器</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">07.拉玛传奇</a>&nbsp<a href="">08.塔銮盛典</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.液压锁</a></li>
                <li><a href="#" target="_blank">002.比例阀</a></li>
                <li><a href="#" target="_blank">003.压力传感器</a></li>
                <li><a href="#" target="_blank">004.温度传感器</a></li>
                <li><a href="#" target="_blank">005.蓄能器</a></li>
                <li><a href="#" target="_blank">006.液压站</a></li>
                <li><a href="#" target="_blank">007.平台升降电机</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">09.马六甲</a>&nbsp<a href="">10.七彩之旅</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.PLC/程序</a></li>
                <li><a href="#" target="_blank">002.变频器</a></li>
                <li><a href="#" target="_blank">003.调速器</a></li>
                <li><a href="#" target="_blank">004.编码器</a></li>
                <li><a href="#" target="_blank">005.伺服驱动器</a></li>
                <li><a href="#" target="_blank">006.软启动器</a></li>
                <li><a href="#" target="_blank">007.限位行程开关</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">11.相约下龙湾</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.车辆号牌识别一体机</a></li>
                <li><a href="#" target="_blank">002.地感线圈</a></li>
                <li><a href="#" target="_blank">003.显示屏(含万能语音卡)</a></li>
                <li><a href="#" target="_blank">004.道闸</a></li>
                <li><a href="#" target="_blank">005.千兆交换机</a></li>
                <li><a href="#" target="_blank">006.车辆检测器</a></li>
                <li><a href="#" target="_blank">007.补光灯</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
	<div class="row">
    <div class="wrap2">
     <div class="all-sort-list">
      <div class="item bo">
        <h3><span>·</span><a href="">01.牛郎织女</a>&nbsp<a href="">02.大闹水晶宫</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.投影机</a></li>
                <li><a href="#" target="_blank">002.投影机镜头</a></li>
                <li><a href="#" target="_blank">003.投影机灯泡</a></li>
                <li><a href="#" target="_blank">004.偏振镜</a></li>
                <li><a href="#" target="_blank">005.滤网</a></li>
                <li><a href="#" target="_blank">006.银幕</a></li>
                <li><a href="#" target="_blank">007.影片</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">03.缤纷华夏</a>&nbsp<a href="">04.魅力戏曲</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.显示器</a></li>
                <li><a href="#" target="_blank">002.网络模块</a></li>
                <li><a href="#" target="_blank">003.内存条</a></li>
                <li><a href="#" target="_blank">004.硬盘</a></li>
                <li><a href="#" target="_blank">005.处理器</a></li>
                <li><a href="#" target="_blank">006.计算机整机</a></li>
                <li><a href="#" target="_blank">007.CIG软件</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">05.灵魂之旅</a>&nbsp<a href="">06.女娲补天</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.行走电机</a></li>
                <li><a href="#" target="_blank">002.行走变频器</a></li>
                <li><a href="#" target="_blank">003.条码阅读器</a></li>
                <li><a href="#" target="_blank">004.激光扫描仪</a></li>
                <li><a href="#" target="_blank">005.防撞条</a></li>
                <li><a href="#" target="_blank">006.防撞检测开关</a></li>
                <li><a href="#" target="_blank">007.RFID读卡器</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">07.雷峰塔</a>&nbsp<a href="">08.烈焰风云</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.液压锁</a></li>
                <li><a href="#" target="_blank">002.比例阀</a></li>
                <li><a href="#" target="_blank">003.压力传感器</a></li>
                <li><a href="#" target="_blank">004.温度传感器</a></li>
                <li><a href="#" target="_blank">005.蓄能器</a></li>
                <li><a href="#" target="_blank">006.液压站</a></li>
                <li><a href="#" target="_blank">007.平台升降电机</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">09.九州神韵</a>&nbsp<a href="">10.熊出没剧场</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.PLC/程序</a></li>
                <li><a href="#" target="_blank">002.变频器</a></li>
                <li><a href="#" target="_blank">003.调速器</a></li>
                <li><a href="#" target="_blank">004.编码器</a></li>
                <li><a href="#" target="_blank">005.伺服驱动器</a></li>
                <li><a href="#" target="_blank">006.软启动器</a></li>
                <li><a href="#" target="_blank">007.限位行程开关</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">11.千古蝶恋</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.车辆号牌识别一体机</a></li>
                <li><a href="#" target="_blank">002.地感线圈</a></li>
                <li><a href="#" target="_blank">003.显示屏(含万能语音卡)</a></li>
                <li><a href="#" target="_blank">004.道闸</a></li>
                <li><a href="#" target="_blank">005.千兆交换机</a></li>
                <li><a href="#" target="_blank">006.车辆检测器</a></li>
                <li><a href="#" target="_blank">007.补光灯</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
	</div>
<div class="wrap3">
     <div class="all-sort-list">
      <div class="item bo">
        <h3><span>·</span><a href="">01.水漫金山</a>&nbsp<a href="">02.盘丝洞</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.投影机</a></li>
                <li><a href="#" target="_blank">002.投影机镜头</a></li>
                <li><a href="#" target="_blank">003.投影机灯泡</a></li>
                <li><a href="#" target="_blank">004.偏振镜</a></li>
                <li><a href="#" target="_blank">005.滤网</a></li>
                <li><a href="#" target="_blank">006.银幕</a></li>
                <li><a href="#" target="_blank">007.影片</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">03.未来警察</a>&nbsp<a href="">04.生命之光</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.显示器</a></li>
                <li><a href="#" target="_blank">002.网络模块</a></li>
                <li><a href="#" target="_blank">003.内存条</a></li>
                <li><a href="#" target="_blank">004.硬盘</a></li>
                <li><a href="#" target="_blank">005.处理器</a></li>
                <li><a href="#" target="_blank">006.计算机整机</a></li>
                <li><a href="#" target="_blank">007.CIG软件</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">05.秦陵历险</a>&nbsp<a href="">06.宇宙小勇士</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.行走电机</a></li>
                <li><a href="#" target="_blank">002.行走变频器</a></li>
                <li><a href="#" target="_blank">003.条码阅读器</a></li>
                <li><a href="#" target="_blank">004.激光扫描仪</a></li>
                <li><a href="#" target="_blank">005.防撞条</a></li>
                <li><a href="#" target="_blank">006.防撞检测开关</a></li>
                <li><a href="#" target="_blank">007.RFID读卡器</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">07.魔法城堡</a>&nbsp<a href="">08.探空飞梭</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.液压锁</a></li>
                <li><a href="#" target="_blank">002.比例阀</a></li>
                <li><a href="#" target="_blank">003.压力传感器</a></li>
                <li><a href="#" target="_blank">004.温度传感器</a></li>
                <li><a href="#" target="_blank">005.蓄能器</a></li>
                <li><a href="#" target="_blank">006.液压站</a></li>
                <li><a href="#" target="_blank">007.平台升降电机</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">09.极速飞车</a>&nbsp<a href="">10.大摆锤</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.PLC/程序</a></li>
                <li><a href="#" target="_blank">002.变频器</a></li>
                <li><a href="#" target="_blank">003.调速器</a></li>
                <li><a href="#" target="_blank">004.编码器</a></li>
                <li><a href="#" target="_blank">005.伺服驱动器</a></li>
                <li><a href="#" target="_blank">006.软启动器</a></li>
                <li><a href="#" target="_blank">007.限位行程开关</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="item bo">
        <h3><span>·</span><a href="">11.豪华转马</a></h3>
        <div class="item-list clearfix">
          <div class="close">x</div>
          <div class="subitem">
            <dl class="fore1">
              <dt><a href="#">1.影音灯光系统</a></dt>
              <dd><em><a href="#">01.投影系统</a></em><em><a href="#">02.音响系统</a></em><em><a href="#">03.灯光系统</a></em><em><a href="#">04.电视/LED屏</a></em></dd>
              <dd><em><a href="#">001.投影机</a></em><em><a href="#">002.投影机镜头</a></em><em><a href="#">003.投影机灯泡</a></em><em><a href="#">004.偏振镜</a></em></dd>
            </dl>
            <dl class="fore2">
              <dt><a href="#">2.计算机软件网络通讯系统</a></dt>
              <dd><em><a href="#">01.计算机/软件系统</a></em><em><a href="#">02.网络通讯系统</a></em><em><a href="#">03.网络通讯系统</a></em></dd>
              <dd><em><a href="#">001.显示器</a></em><em><a href="#">002.网络模块</a></em><em><a href="#">003.内存条</a></em><em><a href="#">004.硬盘</a></em></dd>
              <dd><em><a href="#">005.处理器</a></em><em><a href="#">006.计算机整机</a></em><em><a href="#">007.CIG软件</a></em><em><a href="#">008.投影控制软件</a></em></dd>
              <dd><em><a href="#">009.交换机</a></em><em><a href="#">010.路由器</a></em><em><a href="#">011.西门子客户端748</a></em><em><a href="#">012.串口模块</a></em></dd>
            </dl>
            <dl class="fore3">
              <dt><a href="#">3.车船系统</a></dt>
              <dd><em><a href="#">01.行走系统</a></em><em><a href="#">02.车体结构/灯光音响系统</a></em><em><a href="#">03.旋转摇摆/液压系统</a></em><em><a href="#">04.控制系统</a></em><em><a href="#">05.动力系统</a></em></dd>
              <dd><em><a href="#">001.行走电机</a></em><em><a href="#">002.行走变频器</a></em><em><a href="#">003.条码阅读器</a></em><em><a href="#">004.激光扫描仪</a></em></dd>
            </dl>
            <dl class="fore4">
              <dt>4.平台系统</dt>
              <dd><em><a href="#">01.升降系统</a></em><em><a href="#">02.旋转/控制系统</a></em></dd>
              <dd><em><a href="#">001.液压锁</a></em><em><a href="#">002.比例阀</a></em><em><a href="#">003.压力传感器</a></em><em><a href="#">004.温度传感器</a></em></dd>
            </dl>
            <dl class="fore5">
              <dt>5.特技系统</dt>
              <dd><em><a href="#">01.控制系统</a></em><em><a href="#">02.传动系统</a></em><em><a href="#">03.成品设备</a></em><em><a href="#">04.气压系统</a></em></dd>
              <dd><em><a href="#">001.PLC/程序</a></em><em><a href="#">002.变频器</a></em><em><a href="#">003.调速器</a></em><em><a href="#">004.编码器</a></em></dd>
            </dl>
            <dl class="fore6">
              <dt>6.停车场系统</dt>
              <dd><em><a href="#">01.停车场系统</a></em></dd>
              <dd><em><a href="#">001.车辆号牌识别一体机</a></em><em><a href="#">002.地感线圈</a></em><em><a href="#">003.显示屏(含万能语音卡)</a></em><em><a href="#">004.道闸</a></em></dd>
            </dl>           
          </div>
          <div class="cat-right">
            <dl class="categorys-brands" clstag="homepage|keycount|home2013|0601d">
              <dt>详细信息</dt>
              <dd>
              <ul>
                <li><a href="#" target="_blank">001.车辆号牌识别一体机</a></li>
                <li><a href="#" target="_blank">002.地感线圈</a></li>
                <li><a href="#" target="_blank">003.显示屏(含万能语音卡)</a></li>
                <li><a href="#" target="_blank">004.道闸</a></li>
                <li><a href="#" target="_blank">005.千兆交换机</a></li>
                <li><a href="#" target="_blank">006.车辆检测器</a></li>
                <li><a href="#" target="_blank">007.补光灯</a></li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
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
                    <table id="datatable-buttons_problem" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>维修开始时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>更换数量</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>疏散次数</th>
                          <th>是否解决</th>
                          <th>所属项目</th>
                          <th>所属公园</th>
                          <th>所属城市</th>
                          <th>问题ID</th>
                        </tr>
                      </thead>
                      <tfoot>
                          <tr>
                          <th>维修开始时间</th>
                          <th>问题分类</th>
                          <th>问题概要</th>
                          <th>负责人</th>
                          <th>更换零件名称</th>
                          <th>更换数量</th>
                          <th>维修持续时间</th>
                          <th>维修人员</th>
                          <th>原因分析</th>
                          <th>疏散次数</th>
                          <th>是否解决</th>
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
</div> 
        <!-- footer content -->
        <?php include "footor.php";?>
        <!-- /footer content -->
      </div>
    </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
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
          $(this).children('.item-list').css('top', (i-h)+1);
        }
      } else {
        if ( s > h ) {                        //判断子类的显示位置，如果滚动的高度大于所有分类列表容器的高度
          if ( i-s > 0 ){                     //则 继续判断当前滑过容器的位置 是否有一半超出窗口一半在窗口内显示的Bug,
            $(this).children('.item-list').css('top', (s-h)+2 );
          } else {
            $(this).children('.item-list').css('top', (s-h)-(-(i-s))+2 );
          }
        } else {
          $(this).children('.item-list').css('top', 3 );
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
    <script src="js/custom/jquery.dataTables.js"></script>
	
  </body>
</html>
