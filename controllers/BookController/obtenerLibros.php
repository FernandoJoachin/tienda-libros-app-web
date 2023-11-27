<?php
require_once __DIR__ . '/../../models/LibroModel.php';
require_once __DIR__ . "/../../includes/app.php";

function obtenerLibros()
{
    $libros = LibroModel::all();
    return $libros;
}