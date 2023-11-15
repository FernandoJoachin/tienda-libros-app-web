<?php 

require 'funciones.php';
require 'database.php';
require_once __DIR__ . '/../models/ActiveRecord.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);
session_start();