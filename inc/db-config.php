<?php 

    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', 'root');
    define ('DB_NAME', 'aa-astro');

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($mysqli->connect_errno) {
        echo 'Impossibile connettersi al database' . $mysqli->error;
        exit();
    }

?>