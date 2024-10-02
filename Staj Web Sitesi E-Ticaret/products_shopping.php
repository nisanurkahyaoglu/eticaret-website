<?php

$connect = new mysqli("localhost", "root", "root", "project");

if($connect->connect_error){
    echo "Connection error : " . $connect -> connect_error;
}else{
    echo "hello";
}

?>