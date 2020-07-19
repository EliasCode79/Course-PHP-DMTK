<?php

    error_reporting( E_ALL );           //para reportar errores
    ini_set('display_errors', 1);       // para mostar los errores
    setlocale(LC_TIME, 'es');           // estable el idioma en mostrar los datos en php en este caso le indiamos español
    date_default_timezone_set('America/La_Paz');      // Establece la zona horario 
    require ('inc/posts.php');