<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login with MD5</title>
</head>
<body>
    <h2>Form Login</h2>

    <?php 
        if(isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal") {
                echo "Failed to login, check your username and password";
            } elseif($_GET['pesan'] == "logout") {
                echo "You have been logged out";
            } elseif($_GET['pesan'] == "belum_login") {
                echo "You should loggin first to access admin page";
            }
        }
    ?>

    <form action="cek_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="username" placeholder="Input Username" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="password" placeholder="Input Password" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>