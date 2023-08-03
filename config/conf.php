<?php

/*  DB  */

$modeDb = 'development';

if ($modeDb == 'development') {
    $host = "localhost";
    $porta = 3306;
    $user = "root";
    $db = "modelo-1";
    $password = "";
}

if ($modeDb == 'production') {
    $host = "localhost";
    $porta = 3306;
    $user = "root";
    $db = "modelo-1";
    $password = "";
}


/*
 *  Após efetuar as alterações de DB, execute o comando:
 *  php artisan config:cache
 */
