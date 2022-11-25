<!doctype html>
<html lang="es">
    <head>
        <title>La web de Jose Vicente</title>
        <meta charset="utf-8">
        
        <link rel="Stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!-- Aquí dentro va la información de la cabecera -->
        <header>
            <img src="josevicente.jpg" alt="Jose Vicente">
            <h1 style="color:red;">Jose Vicente Carratalá</h1>
            <h2>Formador, desarrollador, diseñador</h2>
            <nav>
                <ul>
                    <li><a href="inicio.html">Inicio</a></li>
                    <li><a href="proyectos.html">Proyectos</a></li>
                    <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <!-- Aquí dentro va la información de la sección principal -->
        <main>
            <section id="banner">
                <h3>Formacion</h3>
                <h3>Desarrollo</h3>
                <h3>Diseño</h3>
            </section>
            <section id="noticias">
                <?php
                    // Primero me conecto a la base de datos
                    $mysqli = mysqli_connect("localhost", "appusuario", "appcontrasena", "aplicacion");
                    // Quiero que los resultados se interpreten como UTF-8
                    mysqli_set_charset($mysqli, "utf8mb4");
                    // Preparo una petición en la que pido todos los artículos que haya en la base de datos
                    $query = "SELECT * FROM articulos";
                    // Ejecutamos la consulta sobre el servidor
                    $result = mysqli_query($mysqli, $query);
                    // Para cada uno de los resultados de la consulta (4 en este momento)
                    while ($fila = mysqli_fetch_assoc($result)) {
                        // Y ahora para cada resultado, lanza un article en pantalla
                        // $fila el resultado de cada tupla, convertido en un array
                        echo '
                            <article>
                                <h4>'.$fila['titulo'].'</h4>
                                <p>'.$fila['contenido'].'</p>
                                <div class="imagen">
                                    <img src="josevicente.jpg" alt="Jose Vicente">
                                    <p>Título de la <span>imagen</span></p>
                                </div>
                            </article>
                        ';
                    }
                ?>
                <!-- clearfix -->
                <div class="clearfix"></div>
            </section>
        </main>
        <footer></footer>
    </body>
</html>