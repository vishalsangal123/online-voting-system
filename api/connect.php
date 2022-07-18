<?php

$servername="localhost";
$username="root";
$password="";
$database="voting";

$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
    die("connection failed!!!");
}




?>