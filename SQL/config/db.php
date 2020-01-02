<?php
    //Połączenie do SQL
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Sprawdź połączenie
    if (mysqli_connect_errno()){
        echo 'Brak połączenia z SQL'. mysqli_connect_errno();
        die();
    }
?>