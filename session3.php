<?php
    session_start();
    $name = !empty($_SESSION['data1']) ? $_SESSION['data1'] : 'Guest';
    $email = $_SESSION['data2'];
    
    print_r($_SESSION);

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
    <h3> hello <?php echo $name." we sent you somenthing at: ".$email; ?>
    <a href="session.php">page1</a>
    <a href="session4.php">page4</a>
</body>
</html>