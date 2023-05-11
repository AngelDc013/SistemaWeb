 <!-- Main Footer -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Angel David Diaz 
    </div>

   
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="https://ekesoft.es">Ekesoft</a>.</strong> Derechos reservados
  </footer>
</div>
<!-- jQuery -->
<script src="assest/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- AdminLTE App -->
<script src="assest/dist/js/adminlte.js"></script>
 
 <!-- DataTables  & Plugins -->
 <script src="assest/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assest/plugins/jszip/jszip.min.js"></script>
<script src="assest/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assest/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- SweetAlert2 -->
<script src="assest/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="assest/js/usuario3.js"></script>

<!-- Seccion de Modals-->
<div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="content-lg">  <!-- Podemos Reutilizar las veces que sea necesario-->
          

        </div>
          <!-- /.modal-content -->
      </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#DataTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTable_wrapper .col-md-6:eq(0)');
    
  });
</script>
</body>
</html>



