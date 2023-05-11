function MNuevoUsuario(){
    $("#modal-lg").modal("show")
   
   
    var obj=""

    $.ajax({
        type:"POST",
        url:"Vista/usuarios/FNuevoUsuario.php", // Encaje la vista
        data:obj,//Variable odj puede llamarse como se requiera
        success:function(data){
            $("#content-lg").html(data)
        }

    })
}

function RegUsuario(){
    let pass=document.getElementById("passUsuario").value
    let pass2=document.getElementById("passUsuario2").value
    if (pass==pass2){
        var formData = new FormData($("#FormRegUsuario")[0])
        $.ajax({//Ajax para envio de datos, con ajax no se comvoca a index 
            type:"POST", //Ayax envia todo a la base de datos por POST
            url:"Controlador/usuarioControlador.php?ctrRegUsuario",//Eviamos un dato a usuario controlador respetando la arquitectura mvc
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
                console.log(data)
                if (data="ok"){
                    Swal.fire({
                        icon: 'success',
                        showConfirmButton: false,
                        title: 'Usuario registrado',
                        timer: 1000
                    } )
                    setTimeout(function(){
                        location.reload()
                    },1200 )
                }else { Swal.fire({
                    icon: 'error',
                    showConfirmButton: false,
                    title: 'Error de Regitro',
                    timer: 1500
                    })
                } 
            }
        }) 
        

    }else{
        
        document.getElementById("error-pass").innerHTML="La contraseña no es igual"//Para mostrar un mensaje de error si las contrase;as no son iguales

    }
}

function MVerUsuarios(id){
    $("#modal-lg").modal("show")

    var obj=""

    $.ajax({
        type:"POST",
        url:"Vista/usuarios/MVerUsuarios.php?id="+id, // Encaje la vista
        data:obj,//Variable odj puede llamarse como queiras
        success:function(data){
            $("#content-lg").html(data)
        }

    })
}
function EditUsuario(id){
    $("#modal-lg").modal("show")

    var obj=""

    $.ajax({
        type:"POST",
        url:"Vista/usuarios/EditUsuario.php?id="+id, // Encaje la vista
        data:obj,//Variable odj puede llamarse como queiras
        success:function(data){
            $("#content-lg").html(data)
        }

    })
}

function editarUsuario(id){
let pass=document.getElementById("passUsuario").value
let pass2=document.getElementById("passUsuario2").value
if (pass==pass2){
    var formData = new FormData($("#FormEditUsuario")[0])
    $.ajax({//Ajax para envio de datos, con ajax no se comvoca a index 
        type:"POST", //Ayax envia todo a la base de datos por POST
        url:"Controlador/usuarioControlador.php?ctrEditUsuario",//Eviamos un dato a usuario controlador respetando la arquitectura mvc
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data){
            console.log(data)
            if (data="ok"){
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: false,
                    title: 'Usuario actualizado',
                    timer: 1000
                } )
                setTimeout(function(){
                    location.reload()
                },1200 )
            }else { Swal.fire({
                icon: 'error',
                showConfirmButton: false,
                title: 'Error',
                timer: 1500
                })
            } 
        }
    }) 
    //minuto 31

}else{
    
    document.getElementById("error-pass").innerHTML="La contraseña no es igual"//Para mostrar un mensaje de error si las contrase;as no son iguales

}
}
