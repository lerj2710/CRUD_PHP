<?php


session_start();

$db = mysqli_connect( 'localhost', 'root', 'root','crud');

if(isset($db)){
    // echo 'DB conectada';  
}
?>