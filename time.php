<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p {
color: blue ;
font-size:100px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body{background-color:white;}
</style>
<p> <?php 
date_default_timezone_set("Asia/Kolkata");
echo date(" h: i : s A"); ?> </p>
</head>