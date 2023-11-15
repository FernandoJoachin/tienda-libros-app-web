<?php
    require_once __DIR__ . '/../includes/funciones.php';
    require_once __DIR__ . '/../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booke - Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.datatables.net/v/dt/dt-1.13.7/b-2.4.2/b-colvis-2.4.2/r-2.5.0/datatables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="./build/css/app.css">
</head>
<body class="dashboard">
    <header class="dashboard__header">
        <div class="dashboard__header-grid">
            <a href="/">        
                <h2 class="dashboard__logo">
                    Booke
                </h2>
            </a>

            <nav class="dashboard__nav">
                <form method="POST" action="/logout" class="dashboard__form">
                    <input type="submit" value="Cerrar Sesión" class="dashboard__submit--logout">
                </form>
            </nav>
        </div>
    </header>