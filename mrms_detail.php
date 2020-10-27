<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>维修记录查询系统</title>
    <link rel="stylesheet" href="css/base.css"> <!--初始化文件-->
    <link rel="stylesheet" href="css/menu.css"> <!--主样式-->
    <link href="css/normal.css" type="text/css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="js/jquery.js"></script>
    <script src="js/cloud.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/sanji.js"></script>
    <script type="text/javascript" src="js/sanji2.js"></script>
    <script language="javascript">
    $(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    $(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
    </script>
    <script src="js/adapter.js"></script> <!--rem适配js-->
</head>
<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div> 
<div id="all">
    <div class="top">
        <div class="left">
            <img src="images/datalogo.png">
        </div>
        <div class="right">
            <strong>
            <span style="font-size: 20px;color: #616130"><?php include 'info.php'?>,你好</span>
            </strong>
            <a href="logout.php">退出</a>
        </div>
    </div>
    <div id="menu">
    <!--隐藏菜单-->
     <div id="ensconce">
        <h2>
            <img src="images/show.png" alt="">
            菜单
        </h2>
     </div>
    <!--显示菜单-->
    <div id="open">
        <div class="navH">
            菜单
            <span><img class="obscure" src="images/obscure.png" alt=""></span>
        </div>
        <div class="navBox">
            <ul>
                <li>
                    <h2 class="obtain">数据查询<i></i></h2>
                      <div class="secondary">
                        <a href="#"><h3>详细查询</h3></a>
                        <a href="all.php"><h3>总体查询</h3></a>                      
                      </div>
                </li>
                <li>
                    <h2 class="obtain">图标分析<i></i></h2>
                      <div class="secondary">
                        <a href="mrms_zzt.php"><h3>柱状图</h3></a>
                        <h3>折线图</h3>                        
                      </div>             
                </li> 
                <li>
                    <h2 class="obtain"><a href="index.php">返回首页<i></i></a></h2>             
                </li>  
            </ul>
        </div>
    </div>
</div>
<script src="js/menu.js"></script>
        <div class="right">
            <div class="middle">
    <form action="/mrms_detail_action.php" method="POST">
    <span>城市：</span>
    <select id='s1' style="width:200" name="city"></select>
    <span>公园：</span>
    <select id='s2' style="width:200" name="park"></select>
    <span>项目：</span>
    <select id='s3' style="width:200" name="project"></select>
    <span>城市：</span>
    <select id='s11' style="width:200" name="city2"></select>
    <span>公园：</span>
    <select id='s22' style="width:200" name="park2"></select>
    <span>项目：</span>
    <select id='s33' style="width:200" name="project2"></select>
    <br>
    <br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
    </form>
    <form action="mrms_time_action.php" method="POST">
    <span>初始日期：</span>
    <input type="datetime-local" name="starttime">
    <span>结束日期：</span>
    <input type="datetime-local" name="endtime">
    <br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
    </form>
    <br>
    <form action="mrms_like_action.php" method="POST">
    <span>负责人：</span><input type="text" name="engineer">
    <br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
    </form>
            </div>
    </div>
</div>
</body>
</html>
