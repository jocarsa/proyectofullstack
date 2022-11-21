<?php
$mysqli = mysqli_connect("localhost", "appusuario", "appcontrasena", "aplicacion");
$query = "SELECT * FROM usuarios";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['usuario']." - ".$row['contrasena'];
}
?>