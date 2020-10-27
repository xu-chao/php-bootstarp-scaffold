<?php
if(empty($_SESSION['user'])){
    echo "error!";
    header('location: ../index.html');
    exit;
}
else if($_SESSION['permission'] != 1){
	echo "error!";
    header('location: ../index.html');
    exit;
}else
{
    echo $_SESSION['user'];
}