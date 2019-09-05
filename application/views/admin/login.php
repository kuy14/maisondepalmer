<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>
    <form action="<?php echo base_url('AdminLogin/login_proses') ?>" method="post">
    <p>Username</p>
    <input type="text" name="username"><br>
    <p>Password</p>
    <input type="text" name="password"><br>
    <input type="submit" value="Login">
    </form>
</body>
</html>