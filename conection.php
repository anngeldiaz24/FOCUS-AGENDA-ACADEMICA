<?php

    $conection=pg_connect("host=localhost dbname=FOCUS user=postgres password=");

    if($conection == FALSE){
        echo 'Conexión fallida';
    }


?>