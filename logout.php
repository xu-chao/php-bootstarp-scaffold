<?php
//session_destroy();
  session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['user'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的用户
            header('location:index.html ');
        }else{
            //header('location:skip.php?url=index.html&info=NO AUTH，请稍后重试！');
            header('location:index.html ');
        }
?>
