<?php
session_start();

$ab = filter_input(INPUT_POST, 'user');
$cd = filter_input(INPUT_POST, 'passw');

if ($ab === 'griya' && $cd === 'sehat') {
    $_SESSION["adminlog"]=true;
    $_SESSION['reservtrue']=false;
    header("location: dashboardadmin.php");
}
else{
    $_SESSION["adminlog"]=false;
    header("location: adminlogin.html");
}
?>