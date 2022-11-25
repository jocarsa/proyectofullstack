$(document).ready(function(){
    $("#enviar").click(function(){
        var usuario = $("#usuario").val();
        console.log("el usuario que vas a enviar es: "+usuario)
        var contrasena = $("#contrasena").val();
        console.log("la contraseña que vas a enviar es: "+contrasena)
        $("#resultado").load("php/login.php?usuario="+usuario+"&contrasena="+contrasena);
        // Si el usuario existe, llevame a otra parte
        $.ajax({
            url: "php/login.php?usuario="+usuario+"&contrasena="+contrasena,
            success: function(e){
            console.log("ok exito")
                if(e == "El usuario existe"){
                    setTimeout(function(){
                        window.location = "paneldecontrol.html"
                    },5000)
                    }
            },
            timeout: 4000,
            error: function(){console.log("han habido problemas");}
          });
    })
})