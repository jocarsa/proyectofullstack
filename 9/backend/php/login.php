<?php
$mysqli = mysqli_connect("localhost", "appusuario", "appcontrasena", "aplicacion");
$query = "
SELECT 
* 
FROM usuarios 
WHERE 
usuario = '".$_GET['usuario']."' 
AND 
contrasena = '".$_GET['contrasena']."'
";
$pasas = false;
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_assoc($result)) {
    //echo $row['usuario']." - ".$row['contrasena'];
    $pasas=true;
}

if($pasas == true){
    echo "El usuario existe";
}else{
    echo "El usuario no existe";
}

?>