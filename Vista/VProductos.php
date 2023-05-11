 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0">Lista de Productos</h2>
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
                    
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th>Tipo de Producto</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Foto producto</th>

                    <td>
                      <button class="btn btn-primary" onclick="MNuevoProducto()">Nuevo</button>
                    </td>
                  </tr>
                  </thead>

                  <tbody>
                 <?php
                 $producto=ControladorProducto::ctrInfoProductos();// Se solicita la consulta y la conexion a la base de datos mediante el controlador
                 foreach($producto as $value){//renombrar
                  ?><!-- cerramos una pausa-->
                  <tr> 
                  <td> <?php echo $value["id_producto"];?> </td>
                  <td> <?php echo $value["desc_producto"];?> </td>
                  
                  <td> <?php echo $value["id_tipo"];?> </td>
                  <td> <?php echo $value["fechaVen_producto"];?> </td>
                  <td> <?php if ($value["foto_producto"]==""){
                    ?>
                    <img src="assest/dist/img/Productos/gemlo5.png" alt="" width = "100">
                    <?php
                  }else {
                    ?>
                    <img src="assest/dist/img/Productos/<?php echo $value["foto_producto"];?>" alt="" width = "150">
                     </td>
                    <?php
                  }
                  
                  ?>
                  
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info" onclick='MVerProductos(<?php echo $value["id_Producto"];?>)'>
                      <i class="fas fa-eye"></i>
                      </button>
                      <button class="btn btn-secondary " onclick='EditProducto(<?php echo $value["id_Producto"];?>)'>
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
     