<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>找回密码</title>
    <style>
        body{
            margin: 0;
            background-color: #e7e7e7;
        }
        #all{
            margin: 0 auto;
            width: 1280px;
            height: 1024px;
            background-image: url("images/help.jpg");
        }
        #all  p{
            text-align: center;
            font-size: 25px;
        }
        #all span{
            font-size:15px;
        }
    </style>
</head>
<body>
<div id="all">
   <form action="find_password_action.php" method="post">
       <p><span>请输入用户名：&nbsp; </span><input type="text" name="name"></p>
       <p><span>请输入电话号码：</span><input type="text" name="tel"></p>
       <p><span>请输入住址：</span><input type="text" name="address"></p>
       <p><button type="submit">确认提交</button></p>
   </form>
</div>
</body>
</html>