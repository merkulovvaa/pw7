<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 400px;
        }
    </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
    <?php
    require 'upload.php';

    if($_POST["name"] == null || $_POST["email"] == null || $_POST["gender"] == null){
        echo "<div style='color: red'>Invalid data</div>";
    }else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        echo "User Added " . $name . "</br>";
        echo "Email " . $email . "</br>";
        echo "Gender " . $gender;
    }

    if (!file_exists('database/users.csv')) {
        file_put_contents('database/users.csv', '');
    }

    if($isUploaded == true){
        $fp = fopen('database/users.csv', 'a');
        fwrite($fp, "$name,$email,$gender,$filePath \n");
        fclose($fp);
    } else {
        $fp = fopen('database/users.csv', 'a');
        fwrite($fp, "$name,$email,$gender \n");
        fclose($fp);
    }

    ?>

    <hr>
    <a class="btn" href="adduser.php">return back</a>
    <a class="btn" href="table.php">view list</a>

</div>
</body>
</html>
