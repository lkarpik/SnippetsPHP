

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>

<?php 

    // Sprawdzenie danych wejsciowych
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     $email = $_POST['data'];

    //     // remove illegal chars

    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo 'Email ok';
    //     } 
    //     else {
    //     echo 'Błędny email';
    //     }
    // }
    // $var = '<script>alert(1)</script>';
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    
    // $data = array (
    //     'name' => 'Laki Lan',
    //     "age" => '121',
    //     "email" => 'lak@wp.pl'
    // );

    // $filters = array (
    //     "name" => array (
    //         "filter" => FILTER_CALLBACK,
    //         "options" => "strtoupper"
    //     ),
    //     "age" => array (
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array (
    //             "min_range" => 1,
    //             "max_range" => 120
    //         )
    //     ),
    //     "email" => FILTER_SANITIZE_EMAIL
    // );
    
    // print_r(filter_var_array($data, $filters));



?>
    <div class="m-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="area">Example textarea 1</label>
            <textarea class="form-control" id="area" name="data1" rows="5" cols="10"></textarea>
        </div>
        <div class="form-group">
            <label for="area">Example textarea 2</label>
            <textarea class="form-control" id="area" name="data2" rows="5" cols="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
</body>
</html>