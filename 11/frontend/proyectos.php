<?php 
    include "inc/cabecera.php";
?>
    
<section>
    <?php
            
            // Preparo una petición en la que pido todos los artículos que haya en la base de datos
            $query = "SELECT * FROM proyectos";
            // Ejecutamos la consulta sobre el servidor
            $result = mysqli_query($mysqli, $query);
            // Para cada uno de los resultados de la consulta (4 en este momento)
            while ($fila = mysqli_fetch_assoc($result)) {
                // Y ahora para cada resultado, lanza un article en pantalla
                // $fila el resultado de cada tupla, convertido en un array
                echo '
                    <article>
                        <h4>'.$fila['titulo'].'</h4>
                        <p>'.$fila['resumen'].'</p>
                        <div class="imagen">
                            <img src="photo/'.$fila['imagen'].'" alt="Proyecto">
                            <p>Título de la <span>imagen</span></p>
                        </div>
                    </article>
                ';
            }
        ?>
</section>

<?php 
    include "inc/piedepagina.php" 
?>    