<?php
session_start();
if(empty($_SESSION['user'])){
    //echo "error!";
    header('location: index.html');
}