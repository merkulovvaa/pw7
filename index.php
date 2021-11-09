<?php

session_start();

?>


<!DOCTYPE html>
<html lang= en>
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            padding-top: 3rem;
        }
        .container {
            width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="auth.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <h2>Login</h2>
                <div class="field">
                    <label>email <input type="text" name="login"></label>
                </div>
            </div>
            <div class="row">
                <div class="field">
                    <label>Password <input type="password" name="password"></label>
                </div>
            </div>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</body>
</html>

