<?php
if(empty($_SESSION['user'])){
    echo "NO AUTH!";
    header('location: ../index.html');
    exit;
}
else if($_SESSION['permission'] == 2)
{
	echo $_SESSION['user'];
}
else
{
    echo "error!";
    header('location: ../index.html');
    exit;
}
