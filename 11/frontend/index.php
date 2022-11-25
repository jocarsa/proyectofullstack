<?php 
    include "inc/cabecera.php" 
?>
    <section id="banner">
        <h3>Formacion</h3>
        <h3>Desarrollo</h3>
        <h3>Diseño</h3>
    </section>
    <section id="noticias">
        <?php
            
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
                            <img src="photo/'.$fila['imagen'].'" alt="Jose Vicente">
                            <p>Título de la <span>imagen</span></p>
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- clearfix -->
        <div class="clearfix"></div>
    </section>
<?php 
    include "inc/piedepagina.php" 
?>    