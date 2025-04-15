<?php
// Establecer configuración y verificar archivo
$welcomeFile = 'welcome.html';
if (!file_exists($welcomeFile) || !is_readable($welcomeFile)) {
    $welcomeContent = "<p>No se pudo cargar el contenido de bienvenida en este momento. Por favor, inténtelo de nuevo más tarde.</p>";
} else {
    ob_start();
    include($welcomeFile);
    $welcomeContent = ob_get_clean();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        .car-cover {
            width: 10em;
        }
        .car-item .col-auto {
            max-width: calc(100% - 12em) !important;
        }
        .car-item:hover {
            transform: translate(0, -4px);
            background: #a5a5a521;
        }
        .banner-img-holder {
            height: 25vh !important;
            width: calc(100%);
            overflow: hidden;
        }
        .banner-img {
            object-fit: scale-down;
            height: calc(100%);
            width: calc(100%);
            transition: transform .3s ease-in;
        }
        .car-item:hover .banner-img {
            transform: scale(1.3);
        }
        .welcome-content img {
            margin: .5em;
        }
    </style>
</head>
<body>
    <div class="col-lg-12 py-5">
        <div class="container-fluid">
            <div class="card card-outline card-navy shadow rounded-0">
                <div class="card-body rounded-0">
                    <div class="container-fluid">
                        <h3 class="text-center">Bienvenido</h3>
                        <hr>
                        <div class="welcome-content">
                            <?= $welcomeContent ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
