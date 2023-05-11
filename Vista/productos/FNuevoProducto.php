<div class="modal-header">
    <h4 class="modal-title">Registrar Nuevo Usuario</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormRegUsuario" enctype="multipart/form-data"> <!-- Para colocar imagenes y encriptar para registrar fotografias-->
        <div class="row">
            
            <div class="col-sm-6">
            <label for="">Nombre de Usuario :  </label>
            <input type="text" class="form-control" id="nomUsuario" name="nomUsuario">
            </div>
            <div class="col-sm-6">
            <label for="">Email de Usuario : </label>
            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" id="passUsuario" name="passUsuario">

            <p class="text-danger" id="error-pass"></p>

            </div>
            <div class="col-sm-6">
            <label for="">Repita la contraseña</label>
            <input type="password" class="form-control" id="passUsuario2" name="passUsuario2">
            </div>
        </div>
        <div class="row">
            
            <div class="col-sm-12">
            <label for="">Foto o Imagen del Usuario</label>
            <input type="file" class="form-control" id="imgUsuario" name="imgUsuario">
        </div>
        </div>
     
    </form>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegUsuario()">Guardar</button>
</div>