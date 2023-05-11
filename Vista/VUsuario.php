 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0">Lista de Usuarios</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Nombre Usuario</th>
                    <th>Email</th>
                    
                    <th>Rol</th>
                    <th>Fecha de Creacion</th>
                    <th>Estado</th>
                    <td>
                      <button class="btn btn-primary" onclick="MNuevoUsuario()">Nuevo</button>
                    </td>
                  </tr>
                  </thead>

                  <tbody>
                 <?php
                 $usuario=ControladorUsuario::ctrInfoUsuarios();// Se solicita la consulta y la conexion a la base de datos mediante el controlador
                 foreach($usuario as $value){//renombrar
                  ?><!-- cerramos una pausa-->
                  <tr> 
                  <td> <?php echo $value["nombre_usuario"];?> </td>
                  <td> <?php echo $value["email_usuario"];?> </td>
               
                  <td> <?php echo $value["rol_usuario"];?> </td>
                  <td> <?php echo $value["fecha_creacion"];?> </td>

                  <td> <?php if ($value["estado_usuario"]==1){
                    ?> 
                    <span class="badge badge-success">Activo</span>
                  <?php
                  }else {
                    ?> <span class="badge badge-danger">Inactivo</span> 
                    <?php
                  }?>
                  </td>
                  
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info" onclick='MVerUsuarios(<?php echo $value["id_usuario"];?>)'>
                      <i class="fas fa-eye"></i>
                      </button>
                      <button class="btn btn-secondary " onclick='EditUsuario(<?php echo $value["id_usuario"];?>)'>
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>

                </tr>
                
                  <?php
                 }
                 ?>
                 
                </table>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>  
     