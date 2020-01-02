<?php 
    $path = '../AJAX/main.js';
    $file = 'text.txt';
    echo basename($path); 
    echo "<br>";
    echo basename($path, '.js');
    echo "<br>";
    echo dirname($path);
    echo "<br>";
    echo file_exists($file);
    echo '<br>';
    echo realpath($file);
    echo '<br>';
    echo is_file($file);
    echo '<br>';
    echo is_writable($file);
    echo '<br>';
    echo filesize($file);
    echo '<br>';
    mkdir('TEST');
    echo '<br>';
    rmdir('test');
    echo '<br>';
    echo copy('text.txt', 'text2.txt');
    rename('text2.txt', 'text.txt');
    echo '<br>';
    $text = file_get_contents($file);
    $text .= " Nowy text.\n";
    file_put_contents($file, $text);
    echo '<br>';


?>
