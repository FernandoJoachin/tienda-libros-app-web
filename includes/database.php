<?php
require_once __DIR__ . "/../config.inc.php";
$db = mysqli_connect(
    $GLOBALS["servidor"] ?? "",
    $GLOBALS["usuario"] ?? "",
    $GLOBALS["contrasena"] ?? "",
    $GLOBALS["base_datos"] ?? ""
);

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
