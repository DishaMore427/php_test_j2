<?php
$servername="localhost";
$username="root";
$password="";
$dbname="j2php";
$conn=new mysqli($servername,$username,$password,$dbname);
if (! $conn) {
    # code...
    echo "Db not connected";
    }
?>