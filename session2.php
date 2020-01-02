<?php
    session_start();

    $name = !empty($_SESSION['data1']) ? $_SESSION['data1'] : 'Guest';
    $email = !empty($_SESSION['data2']) ? $_SESSION['data2'] : 'email';
    
    
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
    <h4>Thankyou <?php echo $name; ?>. You have been mailed at: <?php echo $email; ?></h4>
    <a href="session3.php">page3</a>
</body>
</html>