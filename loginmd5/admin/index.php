<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page MD5</title>
</head>
<body>
    <h2>Admin Page</h2>

    <?php 
        session_start();
        if($_SESSION['status'] != "login") {
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang <?php echo $_SESSION['username']; ?>!, Anda telah login.</h4>

    <h3><a href="logout.php">Logout</a></h3>
</body>
</html>