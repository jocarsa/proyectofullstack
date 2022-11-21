$(document).ready(function(){
    $("#enviar").click(function(){
        var usuario = $("#usuario").val();
        console.log("el usuario que vas a enviar es: "+usuario)
        var contrasena = $("#contrasena").val();
        console.log("la contraseña que vas a enviar es: "+contrasena)
        $("#resultado").load("php/login.php?usuario="+usuario+"&contrasena="+contrasena);
    })
})