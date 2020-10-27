<?php
session_start();
if($_SESSION['permission'] == 1){
    echo $_SESSION['user'];
}
else
{
    echo "error!";
    header('location: index.html');
}
