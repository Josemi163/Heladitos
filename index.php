<?php
    // Reto 1: Información del negocio
    $nombreHeladeria = "Heladería Dulce Sabor";
    $administrador = "José Miguel Rodríguez Fuertes";
    $ciudad = "Pasto";

    // Reto 2: Mensaje según la edad
    $edad = 20;

    // Reto 3: Promoción según el día
    $diaSemana = "martes";

    // Reto 4: Disponibilidad de un sabor
    $saborDisponible = true;
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
    
    <!-- Encabezado y Reto 1 -->
    <header>
        <h1>🍦 <?php echo $nombreHeladeria; ?> 🍦</h1>
        <p>Administrador: <strong><?php echo $administrador; ?></strong> | Ciudad: <strong><?php echo $ciudad; ?></strong></p>
    </header>

    <!-- Reto 2: Bienvenida según la edad -->
    <section class="bienvenida">
        <?php 
            if ($edad >= 18) {
                echo "<p>¡Bienvenido! Conoce nuestras promociones especiales.</p>";
            } else {
                echo "<p>¡Bienvenido! Descubre nuestros deliciosos sabores.</p>";
            }
        ?>
    </section>

    <!-- Reto 3: Promoción según el día -->
    <section class="promociones">
        <h2>Sección de Promociones</h2>
        <?php 
            if ($diaSemana == "martes") {
                echo "<p>🎉 ¡Hoy tenemos 2x1 en conos!</p>";
            } else {
                echo "<p>🍦 Hoy puedes disfrutar de nuestros sabores habituales.</p>";
            }
        ?>
    </section>

    <!-- Sección de Productos (Al menos 4 sabores con sus imágenes) -->
    <section class="productos">
        <h2>Nuestros Sabores</h2>
        <div class="tarjetas-contenedor">
            <div class="tarjeta">
                <img src="img/9DF0C5D7-0423-492B-9E85-27578FD9AED6.avif" alt="Vainilla">
                <h3>Vainilla</h3>
                <p class="precio">$5.000</p>
            </div>
            <div class="tarjeta">
                <img src="img/image.webp" alt="Chocolate">
                <h3>Chocolate</h3>
                <p class="precio">$6.000</p>
            </div>
            <div class="tarjeta">
                <img src="img/5b3875d9-12a9-4f6b-a196-84ee2d0f40ad.jpg" alt="Fresa">
                <h3>Fresa</h3>
                <p class="precio">$5.500</p>
            </div>
            <div class="tarjeta">
                <img src="img/Helado-de-Maracuyá.webp" alt="Maracuyá">
                <h3>Maracuyá</h3>
                <p class="precio">$6.000</p>
            </div>
        </div>
    </section>

    <!-- Reto 4: Disponibilidad de un sabor -->
    <section class="disponibilidad">
        <p>Estado del Sabor Especial del Mes: 
            <strong>
                <?php 
                    if ($saborDisponible == true) {
                        echo "¡Este sabor está disponible!";
                    } else {
                        echo "Lo sentimos, este sabor está agotado.";
                    }
                ?>
            </strong>
        </p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>📞 Contacto: 3101234567 | 📧 info@heladeriadulcesabor.com</p>
        <p>&copy; 2026 Heladería Dulce Sabor</p>
    </footer>

</body>
</html>