<?php


$conn = mysqli_connect('localhost','root','','icsd17093');
mysqli_query($conn, 'SET NAMES utf8');

//session_start();
if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
?>
