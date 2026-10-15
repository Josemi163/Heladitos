<?php
    $nombreHeladeria = "Heladeria Frosty Lab";
    $administrador = "José Miguel Rodríguez Fuertes";
    $ciudad = "Pasto";
    $edad = 5;
    $diaSemana = "lunes";
    $SaborEspecial = "Maracuyà Tropical";
    $saborDisponible = false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreHeladeria; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <header>
        <h1>🍧 <?php echo $nombreHeladeria; ?> 🍧</h1>
        <p>Gerente Propietario: <strong><?php echo $administrador; ?></strong> | Sucursal: <strong><?php echo $ciudad; ?></strong></p>
    </header>

    <section class="bienvenida">
        <?php 
            if ($edad >= 18) {
                echo "<p>¡Qué bueno verte por aquí! Explora nuestras creaciones con toques de autor y licores de la casa.</p>";
            } else {
                echo "<p>¡Hola! Prepárate para descubrir una experiencia dulce e inolvidable en cada cucharada.</p>";
            }
        ?>
    </section>

    <section class="promociones">
        <h2>Especiales de la Semana</h2>
        <?php 
            if ($diaSemana == "martes") {
                echo "<p>¡Helados de Doble Sabor! Solo por hoy 2x1 en Conos.</p>";
            } else {
                echo "<p>Ven y disfruta de nuestra selección clásica elaborada con fruta 100% natural.</p>";
            }
        ?>
    </section>

    <section class="productos">
        <h2>Nuestras Creaciones Estrella</h2>
        <div class="tarjetas-contenedor">
            <div class="tarjeta">
                <img src="img/9DF0C5D7-0423-492B-9E85-27578FD9AED6.avif" alt="Vainilla Bourbon">
                <h3>Vainilla Bourbon</h3>
                <p class="precio">$5.000</p>
            </div>
            <div class="tarjeta">
                <img src="img/image.webp" alt="Chocolate Suizo">
                <h3>Chocolate Suizo</h3>
                <p class="precio">$6.000</p>
            </div>
            <div class="tarjeta">
                <img src="img/5b3875d9-12a9-4f6b-a196-84ee2d0f40ad.jpg" alt="Frutos Rojos">
                <h3>Frutos Rojos</h3>
                <p class="precio">$5.500</p>
            </div>
            <div class="tarjeta">
                <img src="img/Helado-de-Maracuyá.webp" alt="Maracuyá Tropical">
                <h3>Maracuyá Tropical</h3>
                <p class="precio">$6.000</p>
            </div>
        </div>
    </section>

    <section class="disponibilidad">
        <p>Edición Limitada - Sabor del Mes: <strong><?php echo $SaborEspecial; ?></strong>:
            <strong>
                <?php 
                    if ($saborDisponible == true) {
                        echo "¡Disponible hoy!";
                    } else {
                        echo "Agotado temporalmente, ¡vuelve pronto!";
                    }
                ?>
            </strong>
        </p>
    </section>

    <footer>
        <p>📞 Línea de atención: 3101234567 | 📧 contacto@elportalhelados.com</p>
        <p>&copy; 2026 Helados Artesanales El Portal - Todos los derechos reservados.</p>
    </footer>

</body>
</html>