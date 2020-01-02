<!DOCTYPE html>
<html lang="pl">
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
<?php 
# substr()
// # zwraca częć ciągu tekstowego
// $a = 'Moja Mała';
// // $output = substr('Moja maża', 0, 8);
// // $output = strlen($a);
// // $output = strrpos($a, 'a');
// // $output = trim($a);
// // $output = strtoupper($a);
// $output = strtolower($a);
// $output = ucwords($output);
// // $output = str_replace('mała', 'Kochana', $a);

// $output = is_string($a);

// $a='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusantium veritatis, natus, nesciunt ab maiores distinctio magnam, temporibus nulla autem ratione. Veniam odio placeat delectus doloremque voluptate et eaque explicabo.';

// $o = gzcompress($a);
// $o = gzuncompress($o);

// echo ($o);

$logged = true;
// if ($logged == true) {
//     echo ('You are in');
// } else {
//     echo ('You are out');
// }

// echo $logged ? $logged=1 : $logged=2; 

// $age = 9;
// $score = 11;
// echo 'Twój wynik jest: '.($score > 10 ? ($age > 10 ? 'Not bad' : 'GREAT') : ($age > 10 ? 'Eat shit' : 'Not bad as your age'));
$array = [1, 2, 3, 4, 5, 6];
$counter = 0;
?>

<div>
<?php if ($logged) { ?>
    <h1>Welcome</h1>
<?php } else { ?>
    <h1> Nie Ty </h1>
<?php } ?>
</div>

<div>
    <?php if ($logged): ?>
        <h1> Tak to Ty </h1>
    <?php else: ?>
        <h1> Nie ja? </h1>

    <?php endif ?>
</div>

<div>
    <table>
        <thead>
            <th>L.p</th>
            <th>Wartosć</th>
        </thead>
        <tbody>
            <?php foreach ($array as $a):?>
                <?php 
                $counter--;
                echo ("<tr><td>$counter</td><td>$a</td></tr>");
                ?>

            <?php endforeach ?>

            
        </tbody>

    </table>


</div>