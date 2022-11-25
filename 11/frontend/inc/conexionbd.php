<?php
    // Primero me conecto a la base de datos
            $mysqli = mysqli_connect("localhost", "appusuario", "appcontrasena", "aplicacion");
            // Quiero que los resultados se interpreten como UTF-8
            mysqli_set_charset($mysqli, "utf8mb4");
?>