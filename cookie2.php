<?php
    
    
    if (isset($_COOKIE['username'])) {
        echo 'User '. $_COOKIE['username']. ' is set<br>';

    } else {
        echo 'user in not set';
    }
    
        

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
    <a href="cookie1.php">page1</a>
</body>
</html>