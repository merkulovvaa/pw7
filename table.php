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
    ini_set('display_errors', 'Off');

    $localstorage = file_get_contents("database/users.csv");
    $str = explode("\n", $localstorage);

    foreach ($str as $value){
        $user = explode(",", $value);
        $users[] = [
            'name' => $user[0],
            'email' => $user[1],
            'gender' => $user[2]
        ];
    }

    foreach ($users as $value){
        echo $value['name'].' '.$value['email'].' '.$value['gender'].'<br><hr>';
    }
    ?>
    <a class="btn" href="adduser.php">return back</a>

</div>
</body>
</html>

