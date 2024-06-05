<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Page</title>
</head>
<body>
    <form action="userlogs.php" method="POST">
        <h1>Login</h1>
        <div class="input-control">
            <label for="login_username">Username</label>
            <input id="login_username" name="username" type="text">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <label for="login_password">Password</label>
            <input id="login_password" name="password" type="password">
            <div class="error"></div>
        </div>
        <!-- Hidden input for logtime -->
        <input type="hidden" name="logtime" value="<?php echo $hashed_logtime; ?>">
        <button type="submit" name="login_submit">Login</button>
    </form>
</body>
</html>
