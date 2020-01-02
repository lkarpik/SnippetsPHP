<?php
    session_start();

    unset($_SESSION['name']);
    unset($_SESSION['data1']);

    session_destroy();

    header('Location: session2.php');

?>