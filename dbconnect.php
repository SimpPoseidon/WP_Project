<?php
$host="localhost:3308";
$username="root";
$password="";
$dbname="iips";

$conn=new mysqli($host,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed!!!".$conn->error);
}
?>