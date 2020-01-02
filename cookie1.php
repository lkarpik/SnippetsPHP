<?php
    
    
    
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['data1']);
        $email = htmlentities($_POST['data2']);

        setcookie('username', $username, time()+3600);

        header ('Location: cookie2.php');
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
<div class="m-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="area">Example textarea 1</label>
            <textarea class="form-control" id="area" name="data1" rows="3" cols="10"></textarea>
        </div>
        <div class="form-group">
            <label for="area">Example textarea 2</label>
            <textarea class="form-control" id="area" name="data2" rows="3" cols="10"></textarea>
        </div>
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        
    </form>
</body>
</html>