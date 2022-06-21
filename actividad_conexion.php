<?php

$conection = pg_connect("host=localhost port=5432 dbname=FOCUS user=postgres password=");

if ($conection == FALSE)
{
   echo  'Conexión fallida';
}

?>