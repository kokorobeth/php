<?php 
//koneksi databse

$koneksi = mysqli_connect('localhost', 'root', '', 'user_level');

//check connection
if(mysqli_connect_errno()) {
    echo "Failed to connect : ".mysqli_connect_error();
}
?>