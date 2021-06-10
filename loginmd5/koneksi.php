<?php 
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

//Check Connection
if(mysqli_connect_errno()) {
    echo "Failed to connect database ".mysqli_connect_error();
}
?>