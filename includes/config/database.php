<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienes_inmobiliarios');

    if(!$db) {
        echo 'No se pudo conectar';
        exit;
    } 

    return $db;
}