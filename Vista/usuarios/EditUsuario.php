<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";

$id=$_GET["id"];

$usuario=ControladorUsuario::ctrInfoUsuario($id);

?>


<div class="modal-header">
  <h4 class="modal-title">Editar Usuario</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FormEditUsuario" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-6">
        <label for="">Nombre de usuario</label>
        <input type="text" class="form-control" id="nomUsuario" name="nomUsuario" value="<?php echo $usuario["nombre_usuario"];?>">
        <input type="hidden" name="idUsuario" value="<?php echo $id;?>">
      </div>
      <div class="col-sm-6">
        <label for="">E-mail de usuario</label>
        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" value="<?php echo $usuario["email_usuario"];?>" readonly>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label for="">Password de usuario</label>
        <input type="password" class="form-control" id="passUsuario" name="passUsuario" value="<?php echo $usuario["pass_usuario"];?>">
        <p class="text-danger" id="error-pass"></p>
      </div>
      <div class="col-sm-6">
        <label for="">Repetir password</label>
        <input type="password" class="form-control" id="passUsuario2" name="passUsuario2" value="<?php echo $usuario["pass_usuario"];?>">
        <?php // hidden se usa para ocultar?>
        <input type="hidden" value="<?php echo $usuario["pass_usuario"];?>" name="passUsuario3">
      
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <label for="">Rol</label>
        <select name="rolUsuario" id="rolUsuario" class="form-control">
          <option value="Administrador" <?php if($usuario["rol_usuario"]=="Administrador"):?> selected <?php endif;?> >Administrador</option>
          <option value="Moderador" <?php if($usuario["rol_usuario"]=="Moderador"):?> selected <?php endif;?>>Moderador</option>
          <option value="Suscriptor" <?php if($usuario["rol_usuario"]=="Suscriptor"):?> selected <?php endif;?>>Suscriptor</option>
        </select>
      </div>
      <div class="col-sm-6">
        <label for="">Estado</label>
        <select name="estadoUsuario" id="estadoUsuario" class="form-control">
          <option value="1" <?php if($usuario["estado_usuario"]=="1"):?> selected <?php endif;?>>Activo</option>
          <option value="0" <?php if($usuario["estado_usuario"]=="0"):?> selected <?php endif;?>>Inactivo</option>
        </select>

      </div>
    </div>
    <div class="row">

      <div class="col-sm-6">
        <label for="">Imagen de usuario</label>
        <input type="file" class="form-control" id="imgUsuario" name="imgUsuario">
        <input type="hidden" value="<?php echo $usuario["foto_usuario"];?>" name="imgUsuarioActual">
      </div>
      <div class="col-sm-6 text-center">

        <?php if( $usuario["foto_usuario"]==""){
        ?>
        <img src="assest/dist/img/Usuario/user_default.png" alt="" width="150">
        <?php
}else{
        ?>
        <img src="assest/dist/img/Usuario/<?php echo $usuario["foto_usuario"];?>" alt="" width="150">
        <?php
}?>

      </div>
    </div>

  </form>


</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="editarUsuario()">Guardar</button>
</div>
