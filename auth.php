<?php
session_start();
if(empty($_SESSION['user'])){
    echo "NO AUTH";
    exit;
}
else if($_SESSION['permission'] != 1){
	echo "error!";
    header('location: index.html');
}else
{
    echo $_SESSION['user'];
}