<?php 
//mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

//mengalihkan halaman sambil melempar pesan logout
header("location:../index.php?pesan=logout");
?>