<?php
    $msg="";
    $msgClass="";
    
    if (filter_has_var(INPUT_POST, 'submit')) {
        $email = htmlspecialchars($_POST['email']);
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
    
        // czy wypełnione
        if (!empty($email) && !empty($name) && !empty($message)) {
        
            // PASS
            // $msg = "Passed validation and sent";
            // $msgClass = "alert-success";

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = "Check email format";
                $msgClass = "alert-danger";
            } else {

                // sent form to
                $toEmail = "lkapik@wp.pl";
                $subject = "Contact request from".$name;
                $body = '<h2>Contackt request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                // Email headers
                $headers = "MIME-Vesrion: 1.0" ."\r\n";
                $headers .= "Centent-Type:text/html;charset=UTF-8" ."\r\n";
                // Additional headers
                $headers .= "From: ".$name."<".$email.">"."\r\n";
                
                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Passed validation and sent";
                    $msgClass = "alert-success";
                }else {
                    $msg = "Your email was not sent";
                    $msgClass = "alert-danger";
                }
            }


        } else {
            // 2
            $msg = "Fill all the fields";
            $msgClass = "alert-danger";
        }
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
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="contact.php" class="navbar-brand">My web</a>
                <a href="contact.php" class="navbar-brand">My web</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg !=''): ?>

            <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?></div>

        <?php endif; ?>
    <form class="m-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $name : '';?>" >
        </div>
        <div class="form-group">
            <label for="area">Message</label>
            <textarea class="form-control" id="area" name="message" rows="5" cols="10"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
        </div>
        <div class="form-group"></div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
    </div>
    

</body>
</html>