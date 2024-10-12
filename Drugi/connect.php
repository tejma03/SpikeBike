<?php
$conn = mysqli_connect('localhost','matej','vts','spikebike');

if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>
