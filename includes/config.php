<?php
// DB credentials.
define('DB_HOST', 'https://calificacionesjersy.000webhostapp.com/');
define('DB_USER', 'id21574162_calificacionesjersy');
define('DB_PASS', 'Calificaciones1.');
define('DB_NAME', 'id21574162_notas');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
