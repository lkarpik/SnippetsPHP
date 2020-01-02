<?php 
    $user = ['name' => 'Bradyburgia', 'email' => 'lkarpik@wp.pl', 'age' => 22];

    $user = serialize($user);

    setcookie('user', $user, time() + 3600);

    $user = unserialize($_COOKIE['user']);

    print_r ($user);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>