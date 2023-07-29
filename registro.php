<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<nav class="nav">
      <div class="container">
        <h1 class="logo"><a href="/index.html">Sistema
            de Parqueadero</a></h1>
            <ul>
                <li><a href="index.html" class="current">Inicio</a></li>
                <li><a href="registro.php">Registrar</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
      </div>
    </nav>

    <form method="post" >
        <h2>Registro de Datos</h2>
        <p>Inicia el registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" >
            <!-- <img class="input-icon" src="images/name.svg" alt=""> -->
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <!-- <img class="input-icon" src="images/phone.svg" alt=""> -->
        </div>
        <div class="input-wrapper">
            <input type="text" name="vehicle" placeholder="Vehiculo" >
            <!-- <img class="input-icon" src="images/vehicle.svg" alt=""> -->
        </div>
        <div class="input-wrapper">
            <input type="text" name="plate" placeholder="Placa" >
            <!-- <img class="input-icon" src="images/plate.svg" alt=""> -->
        </div>
        <div class="input-wrapper">
            <input type="text" name="brand" placeholder="Marca" >
            <!-- <img class="input-icon" src="images/brand.svg" alt=""> -->
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php 
        include("registrar.php");
    ?>

    
</body>
</html>