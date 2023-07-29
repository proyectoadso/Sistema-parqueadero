<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['vehicle']) >= 1 &&
        strlen($_POST['plate']) >= 1 &&
        strlen($_POST['brand']) >= 1 
       ) {
            $name = trim($_POST['name']);
            $phone = trim($_POST['phone']);
            $vehicle = trim($_POST['vehicle']);
            $plate = trim($_POST['plate']);
            $brand = trim($_POST['brand']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, telefono, vehiculo, placa, marca, fecha)
                VALUES('$name', '$phone', '$vehicle', '$plate', '$brand', '$fecha')";
            $resultado = mysqli_query($conex, $consulta); 
            if ($resultado) {
             ?>
                <h3 class="success" >Tu registro se ha completado con éxito.</h3>
             <?php  
            } else {
             ?>
                <h3 class="error" >Ocurrio un error</h3>
             <?php   
            } 
        } else {
            ?>
                <h3 class="error" >Llena todos los campos</h3>
            <?php
        }       

}

?>